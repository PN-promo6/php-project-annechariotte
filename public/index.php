<?php

use Controller\PostController;
use Controller\AuthController;
use Controller\HomeController;
use Entity\Post;
use ludk\Persistence\ORM;
use Entity\User;

require __DIR__ . '/../vendor/autoload.php';
session_start();

$orm = new ORM(__DIR__ . '/../Resources');

$manager = $orm->getManager();
$postRepo = $orm->getRepository(Post::class);
$userRepo = $orm->getRepository(User::class);

// $item = $postRepo->find(1);
// $item->title = "Nouveau titre";
// $manager->persist($item);
// $manager->flush();

$action = $_GET["action"] ?? "display";
switch ($action) {
    case 'register':
        $controller = new AuthController();
        $controller->register();
        break;

    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;

    case 'new':
        $controller = new PostController();
        $controller->create();
        break;

    case 'display':
    default:
        $controller = new HomeController();
        $controller->display();
        break;
}
