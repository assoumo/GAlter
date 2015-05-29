<?php

namespace GAlter\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GAlterUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
