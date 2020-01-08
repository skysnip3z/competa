<?php
require_once('Models/UserData/UserData.php');

session_start();

$view = new stdClass();
$view->user = null;
$view->username = null;


if(isset($_SESSION['user']))
{
    $view->user = $_SESSION['user'];
    $view->username = $view->user->getUserName();
}

$view->pageTitle = 'Homepage';
$view->post_user = null;

require_once('Views/index.phtml');