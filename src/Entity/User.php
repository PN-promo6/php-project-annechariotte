<?php

namespace Entity;

class User
{
    public $id;
    public $nickname;
    public $password;
    public $contact;

    public function __construct($id, $nickname, $contact)
    {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->contact = $contact;
    }
}
