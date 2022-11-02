<?php
require_once('./controllers/CController.php');
class View{
    public function ViewMainPage(){
        $contoller = new CController();
        $arrayResult=$contoller->SetMainPage();
        include 'views/view_mainPage.php';
        Return $arrayResult;
    }
    public function GetHeader(){
        return 'views/header.php';
    }
    public function GetFooter(){
        return 'views/footer.php';
    }
}