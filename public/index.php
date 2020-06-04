<?php

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
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordRetype'])) {
            $errorMsg = NULL;
            $users = $userRepo->findBY(array("nickname" => $_POST['username']));

            if (count($users) > 0) {
                $errorMsg = "Nickname already used.";
            } else if ($_POST['password'] != $_POST['passwordRetype']) {
                $errorMsg = "Passwords are not the same.";
            } else if (strlen(trim($_POST['password'])) < 8) {
                $errorMsg = "Your password should have at least 8 characters.";
            } else if (strlen(trim($_POST['username'])) < 4) {
                $errorMsg = "Your nickame should have at least 4 characters.";
            }
            if ($errorMsg) {
                include "../views/RegisterForm.php";
            } else {
                // $user = CreateNewUser($_POST['username'], $_POST['password']);
                $user = new User();
                $user->nickname = $_POST["username"];
                $user->password = $_POST["password"];
                $user->contact = "";
                $manager->persist($user);
                $manager->flush();
                $_SESSION['user'] = $user;
                header('Location: ?action=display');
            }
        } else {
            include "../templates/RegisterForm.php";
        }
        break;

    case 'logout':
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        header('Location: ?action=display');
        break;

    case 'login':
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $users = $userRepo->findBY(array("nickname" => $_POST['username'], "password" => $_POST['password']));
            if (count($users) == 1) {
                $_SESSION['user'] = $users[0];
                header('Location: ?action=display');
            } else {
                $errorMsg = "Wrong login or password.";
                include "../templates/LoginForm.php";
            }
        } else {
            include "../templates/LoginForm.php";
        }
        break;

    case 'new':
        break;

    case 'display':
    default:
        $items = array();
        if (isset($_GET["search"])) {
            $search = $_GET["search"];
            if (strpos($search, "@") === 0) {
                $nickname = substr($search, 1);
                $users = $userRepo->findBy(array("nickname" => $nickname));
                if (count($users) == 1) {
                    $user = $users[0];
                    $items = $postRepo->findBy(array("user" => $user->id));
                }
            } else {
                $items = $postRepo->findBy(array("title" => $search));
            }
            if (count($items) == 0) {
                $items = $postRepo->findAll();
            }
        } else {
            $items = $postRepo->findAll();
        }
        include "../templates/display.php";
        break;
}
