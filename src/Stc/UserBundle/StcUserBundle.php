<?php

namespace Stc\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StcUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

