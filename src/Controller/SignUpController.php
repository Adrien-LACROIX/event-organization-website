<?php 
require_once dirname(__FILE__) . '/ControllerInterface.php';
require_once dirname(__FILE__) . '/../View/SignUpView.php';

class SignUpController implements ControllerInterface {

    public function run()
    {
        return (new SignUpView())->render();
    }
}
?>