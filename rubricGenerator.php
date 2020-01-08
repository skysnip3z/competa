<?php
require_once('Models/UserData/UserData.php');

session_start();

$view = new stdClass();
$view->user = null;


if(isset($_SESSION['user']))
{
    $view->user = $_SESSION['user'];
}

$view->pageTitle = 'Rubric Generator';

require_once('Views/rubricGenerator.phtml');
