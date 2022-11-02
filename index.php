<?php
require_once('views/CView.php');
require_once('controllers/CController.php');

$view=new View();
$contoller=new CController();

$pageHeader=$view->GetHeader();
$pageBody=$view->ViewMainPage();
$pageFooter=$view->GetFooter();

include($pageHeader);
// $pageData=$view->ViewMainPage();
// include($pageFooter);
