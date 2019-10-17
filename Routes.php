<?php
require_once('classes/Router.php');
require_once('classes/Controller.php');

Router::addTwoWay('/','/Index', function() {
    Controller::CreateStandardView('viewIndex');
});

Router::add('/ForgetPassword', function() {
        Controller::CreateStandardView('viewForgetPassword');
});

Router::addLoggedWay('/MyProfile', function() {
    Controller::CreateStandardView('viewMyProfile');
});

Router::addNoLoggedWay('/Register', function() {
    Controller::CreateStandardView('viewRegister');
});

Router::add('/Thanks', function() {
    Controller::CreateStandardView('viewThanks');
});

Router::add('/test', function() {
    Controller::CreateStandardView('view');
});

Router::add('/Contact',function () {
    Controller::CreateView('viewContact');
});

Router::forceHTTPS();
Router::checkErrorUrl();

//
//$test = new Router();
//$test->add('/testa', function (){
//    require ('header.php');
//    include_once('footer.php');
//});
//$test->Launch();
?>