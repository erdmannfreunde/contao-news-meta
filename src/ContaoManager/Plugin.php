<?php

/*
 * This file is part of Contao-News-Meta.
 *
 * (c) Erdmann & Freunde
 *
 * @license LGPL-3.0-or-later
 */

namespace EuF\ContaoNewsMeta\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use EuF\ContaoNewsMeta\ContaoNewsMetaBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoNewsMetaBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
