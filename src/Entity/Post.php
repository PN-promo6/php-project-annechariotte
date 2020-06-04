<?php

namespace Entity;

use ludk\Utils\Serializer;

use Entity\User;

class Post
{
    public int $id;
    public string $url_image;
    public string $title;
    public string $content;
    public string $created_at;
    public string $category;
    public string $location;
    public string $contact;
    public User $user;

    use Serializer;
}
