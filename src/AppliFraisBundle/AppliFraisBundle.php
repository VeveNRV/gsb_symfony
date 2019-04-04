<?php

namespace AppliFraisBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppliFraisBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
