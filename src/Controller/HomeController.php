<?php

namespace Controller;

class HomeController
{
    public function display()
    {
        global $userRepo;
        global $postRepo;

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
    }
}