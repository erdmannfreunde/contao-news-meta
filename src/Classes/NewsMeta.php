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
 * @copyright  2018 Erdmann & Freunde
 * @license    LICENSE LGPL-3.0
 *
 */

namespace EuF\ContaoNewsMeta\Classes;

use Contao\Frontend;
use Contao\LayoutModel;
use Contao\NewsModel;
use Contao\PageModel;
use Contao\PageRegular;

class NewsMeta extends Frontend
{
    public function onGeneratePage(PageModel $objPage, LayoutModel $objLayout, PageRegular $objPageRegular)
    {
        if (!$this->Input->get('items')) {
            return; // no news
        }

        $news = NewsModel::findOneBy(
            ['alias=?', 'published=?'],
            [$this->Input->get('items'), 1]
        );

        if (null === $news) {
            return; // not found
        }

        if ($news->meta_title) {
            $objPage->pageTitle = $news->meta_title;
        }

        if ($news->meta_description) {
            $objPage->description = $news->meta_description;
        }

    }
}
