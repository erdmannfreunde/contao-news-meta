<?php
namespace EuF\ContaoNewsMeta\Classes;

use Contao\Frontend;
use Contao\LayoutModel;
use Contao\NewsModel;
use Contao\PageModel;
use Contao\PageRegular;

class NewsMeta extends Frontend {

    public function onGeneratePage(PageModel $objPage, LayoutModel $objLayout, PageRegular $objPageRegular) {

        if (!$this->Input->get('items')) {
            return; // no news
        }

        $news = NewsModel::findOneBy(
            array('alias=?', 'published=?'),
            array($this->Input->get('items'), 1)
        );

        if (null === $news) {
            return; // not found
        }

        $objPage->meta_title = $news->meta_title;
        $objPage->meta_description = $news->meta_description;

    }

}