<?php

namespace Entity;

use ludk\Utils\Serializer;

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

    use Serializer;
}
