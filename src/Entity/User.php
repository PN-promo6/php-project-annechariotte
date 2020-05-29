<?php

namespace Entity;

use ludk\Utils\Serializer;

class User
{
    public $id;
    public $nickname;
    public $password;
    public $contact;

    use Serializer;
}
