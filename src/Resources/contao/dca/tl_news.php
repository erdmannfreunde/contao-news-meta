<?php

/*
 * This file is part of Contao-News-Meta.
 *
 * (c) Erdmann & Freunde
 *
 * @license LGPL-3.0-or-later
 */

\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField(
    'meta_title',
    'alias',
    \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER
)->applyToPalette('default', 'tl_news');

\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField(
    'meta_description',
    'author',
    \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER
)->applyToPalette('default', 'tl_news');

$GLOBALS['TL_DCA']['tl_news']['fields']['meta_title'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_news']['meta_title'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => false,
        'decodeEntities' => true,
        'maxlength' => 255,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_news']['fields']['meta_description'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_news']['meta_description'],
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => [
        'tl_class' => 'w50',
    ],
    'sql' => 'text NULL',
];
