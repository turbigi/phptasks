<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/application.php' ?>
<?php $application = Application::getInstance(); ?>
<?php $application->showHeader('news'); ?>
<h1><?php $application->showProperty('h1') ?></h1>
<h1><?php $application->showProperty('h1') ?></h1>
<?php $application->showFooter('news') ?>