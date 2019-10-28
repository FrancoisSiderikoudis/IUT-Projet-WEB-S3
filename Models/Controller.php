<?php
class Controller {
    public static function CreateView($nameView){
        require_once("Views/$nameView.php");
    }
    public static function test(){
        require_once("Controllers/controllerTest.php");
    }
    public static function CreateStandardView($nameView){
        require_once('Views/Templates/header.php');
        self::CreateView($nameView);
        require_once('Views/Templates/footer.php');
    }
    public static function CreateErrorView($errorNumber){
        self::CreateView('viewError');
        echo '<h1>' . $errorNumber . '</h1>';
    }
};
?>