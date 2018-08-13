<?php

/*
 * This file is part of Contao-News-Meta.
 *
 * (c) Erdmann & Freunde
 *
 * @license LGPL-3.0-or-later
 */

namespace EuF\ContaoNewsMeta;

use EuF\ContaoNewsMeta\DependencyInjection\ContaoMetaNewsExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoNewsMetaBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ContaoMetaNewsExtension();
    }
}
