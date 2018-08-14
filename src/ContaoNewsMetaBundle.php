<?php

/*
 * This file is part of ErdmannFreunde/contao-news-meta
 *
 * (c) 2018 Erdmann & Freunde.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    euf_hero
 * @author     Dennis Erdmann
 * @author     Frank Müller
 * @copyright  2016-2018 Erdmann & Freunde
 * @license    LICENSE LGPL-3.0
 *
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
