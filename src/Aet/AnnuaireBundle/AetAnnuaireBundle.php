<?php

namespace Aet\AnnuaireBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AetAnnuaireBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
