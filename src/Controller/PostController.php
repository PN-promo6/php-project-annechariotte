<?php

namespace Controller;

use Entity\Post;



class PostController
{
    public function create()
    {
        global $manager;

        if (isset($_SESSION['user']) && isset($_POST['img']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category']) && isset($_POST['location']) && isset($_POST['contact'])){
            $errorMsg = NULL;
            if(empty($_POST['img']) || empty($_POST['title']) || empty($_POST['content']) || empty($_POST['category']) || empty($_POST['location']) || empty($_POST['contact'])){
                $errorMsg = "Veuillez remplir tous les champs";
            }
            if($errorMsg){
                include "../templates/AddPost.php";
            } else {
                $post = new Post();
                $post->url_image = $_POST['img'];
                $post->title = $_POST['title'];
                $post->content = $_POST['content'];
                $post->created_at = "il y à 3 min";
                $post->category = $_POST['category'];
                $post->location = $_POST['location'];
                $post->contact = $_POST['contact'];
                $post->user = $_SESSION['user'];
                $manager->persist($post);
                $manager->flush();
                header('Location: ?action=display');
            }
        }
        else {
            include "../templates/AddPost.php";
        }
    }
}
