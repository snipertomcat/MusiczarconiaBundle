<?php

namespace Stc\BaseBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}