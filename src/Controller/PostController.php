<?php

namespace Controller;

use Entity\Post;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class PostController extends AbstractController
{
    public function create(Request $request): Response
    {
        $manager = $this->getOrm()->getManager();

        if (($request->getSession()->has('user')) && $request->request->has('img') && $request->request->has('title') && $request->request->has('content') && $request->request->has('category') && $request->request->has('location') && $request->request->has('contact')) {
            $errorMsg = NULL;
            if (empty($request->request->get('img')) || empty($request->request->get('title')) || empty($request->request->get('content')) || empty($request->request->get('category')) || empty($request->request->get('location')) || empty($request->request->get('contact'))) {
                $errorMsg = "Veuillez remplir tous les champs";
            }
            if ($errorMsg) {
                $data = array(
                    "errorMsg" => $errorMsg
                );
                return $this->render('AddPost.php', $data);
            } else {
                $post = new Post();
                $post->url_image = $request->request->get('img');
                $post->title = $request->request->get('title');
                $post->content = $request->request->get('content');
                $post->created_at = "il y à 3 min";
                $post->category = $request->request->get('category');
                $post->location = $request->request->get('location');
                $post->contact = $request->request->get('contact');
                $post->user = $request->getSession()->get("user");
                $manager->persist($post);
                $manager->flush();
                return $this->redirectToRoute('display');
            }
        } else {
            $data = array(
                "errorMsg" => null
            );
            return $this->render('AddPost.php', $data);
        }
    }
}
