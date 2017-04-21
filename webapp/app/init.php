<?php

function onProlog()
{

}

function onEpilog()
{
    $app = Application::getInstance();
    $app->setPageProperty('h1', 'neews');
}