<?php


namespace Frontend\Controllers;


use Common\Models\News;
use Frontend\System\FrontendController;
use Dalt\Libraries\Pagination;

class NewsController extends FrontendController
{
    public $news;

    public function indexAction()
    {
        $this->view->set([
            'title' => 'News',
        ]);

        $this->news = News::orderBy('created_at', 'ASC')->limit('3')->get();

        $this->view->render('index');
    }

}
