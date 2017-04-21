<?php

final class Application
{
    private $property = [];

    private static $instance = null;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function includeFile($path)
    {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $path)) {
            include_once $_SERVER['DOCUMENT_ROOT'] . $path;
        }
    }

    private function __construct()
    {
        $this->includeFile('/app/init.php');
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    private function __sleep()
    {

    }

    public function restartBuffer()
    {
        ob_clean();
    }

    private function getBuffer()
    {
        return ob_get_clean();
    }

    public function setPageProperty($id, $value)
    {
        $this->property[$id] = $value;
    }

    private function showEditedContent()
    {
        $buffer = $this->getBuffer();
        echo str_replace($this->getReplaceProp(), $this->property, $buffer);
    }

    private function getReplaceProp()
    {
        $array = [];
        foreach ($this->property as $key => $value) {
            $array[] = $this->getProperty($key);
        }
        return $array;
    }


    public function getPageProperty($id)
    {
        return $this->property[$id];
    }

    public function showProperty($id)
    {
        echo $this->getProperty($id);
    }

    private function getProperty($id)
    {
        return '#PAGE_PROPERTY_' . $id . '#';
    }

    public function showHeader($template_id)
    {
        $this->handler('onProlog');
        ob_start();

        $path = "/app/templates/" . $template_id . "/header.php";
        $this->includeFile($path);
    }

    public function showFooter($template_id)
    {
        $path = "/app/templates/" . $template_id . "/footer.php";
        $this->includeFile($path);
        $this->handler('onEpilog');
        $this->showEditedContent();
    }

    public function handler($event)
    {
        if (function_exists($event)) {
            call_user_func($event);
        }
    }

}