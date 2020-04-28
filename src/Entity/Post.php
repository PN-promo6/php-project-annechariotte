<?php

namespace Entity;

use Entity\User;

class Post
{
    public $id;
    public $url_image;
    public $title;
    public $content;
    public $created_at;
    public $category;
    public $location;
    public $contact;
    public User $user;

    public function __construct($id, $url_image, $title, $content, $created_at, $category, $location, $contact, $user)
    {
        $this->id = $id;
        $this->url_image = $url_image;
        $this->title = $title;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->category = $category;
        $this->location = $location;
        $this->contact = $contact;
        $this->user = $user;
    }
}
