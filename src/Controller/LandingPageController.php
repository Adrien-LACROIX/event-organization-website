<?php
require_once dirname(__FILE__) . '/ControllerInterface.php';
require_once dirname(__FILE__) . '/../View/LandingPageView.php';
require_once dirname(__FILE__) . '/../Model/EventManager.php';

class LandingPageController implements ControllerInterface {

    public function run()
    {
        $events = EventManager::getEvents();
        return (new LandingPageView())->render($events);
    }
}
?>