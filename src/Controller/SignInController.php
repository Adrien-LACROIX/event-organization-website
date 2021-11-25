<?php 
require_once dirname(__FILE__) . '/ControllerInterface.php';
require_once dirname(__FILE__) . '/../View/SignInView.php';

class SignInController implements ControllerInterface {

    public function run()
    {
        return (new SignInView())->render();
    }
}
?>