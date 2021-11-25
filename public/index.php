<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require '../config/application.config.php';
require '../src/utils/Route.inc.php';

include '../src/Controller/IndexController.php';

require '../src/Model/DbConnectionManager.php';

$db = new DbConnectionManager();
$dbConnection = null;
if ($db) {
    $dbConnection = $db->getConnection();
}

// Add base route (startpage)
Route::add('/', function() {
    $controller = new IndexController();
    echo $controller->run();
});

// Simple test route that simulates static html file
Route::add('/test.html',function(){
    echo 'Hello from test.html';
});

// Post route example
Route::add('/contact-form',function(){
    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
},'get');

// Post route example
Route::add('/contact-form',function(){
    echo 'Hey! The form has been sent:<br/>';
    print_r($_POST);
},'post');

// Accept only numbers as parameter. Other characters will result in a 404 error
Route::add('/foo/([0-9]*)/bar',function($var1){
    echo $var1.' is a great number!';
});

Route::run(URL);


/*
error_reporting(E_ALL);
ini_set('display_errors', '1');

require '../src/utils/Router.inc.php';
require '../src/utils/Route.inc.php';
require '../src/utils/UrlGenerator.inc.php';


// Retrieve configuration
$appConfig = require __DIR__ . '/../config/application.config.php';

// the Application initialisation/entry point.
$routeAction = $_SERVER["REQUEST_URI"];
if (isset($_GET['action'])) {
    $routeAction = $_GET['action'];
}

$router = new Router([
    new Route('index', URL . '/', [IndexController::class]),
    new Route('api_articles_collection', '/api/articles', [ArticleController::class, 'getAll']),
    new Route('api_articles', '/api/articles/{id}', [ArticleController::class, 'get']),
]);

$route = $router->matchFromPath($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

echo var_dump($route);
return;

// router
switch ($routeAction) {
    case '/about':
    case 'about':
        $controllerName = CmsController::class;
        $action = 'aboutAction';
        break;

    case 'post':
        $controllerName = 'BlogController';
        $action = 'postAction';
        break;

    case 'addpost':
        $controllerName = 'BlogController';
        $action = 'addAction';
        break;

    case 'addpostsubmitted':
        $controllerName = 'BlogController';
        $action = 'addpostsubmittedAction';
        break;

    case 'addcomment':
        $controllerName = 'BlogController';
        $action = 'addcommentAction';
        break;

    case 'addcommentsubmitted':
        $controllerName = 'BlogController';
        $action = 'addcommentsubmittedAction';
        break;

    case '/login':
    case 'login':
        $controllerName = AuthController::class;
        $action = 'loginAction';
        break;


    case '/loginsubmitted':
    case 'loginsubmitted':
        $controllerName = AuthController::class;
        $action = 'loginsubmittedAction';
        break;

    case '/logout':
    case 'logout':
        $controllerName = AuthController::class;
        $action = 'logoutAction';
        break;

    case 'list':
    default:
        $controllerName = 'BlogController';
        $action = 'indexAction';
        break;
}

require '../src/Controller/ControllerInterface.php';
require '../src/Controller/' . $controllerName . '.php';
require '../src/Model/DbConnectionManager.php';
require '../src/Model/BlogManager.php';
require '../src/Model/UserManager.php';
require '../src/View/BlogView.php';


$db = new DbConnectionManager($appConfig);
$dbConnection = null;
if ($db) {
    $dbConnection = $db->getConnection();
}
$blogManager = new BlogManager($dbConnection);
$userManager = new UserManager($dbConnection);

$controller = new $controllerName($blogManager, $userManager);
$controller->{$action}($_REQUEST);*/