<?php
/**
 * Created by PhpStorm.
 * User: vvolo
 * Date: 20.09.2018
 * Time: 23:44
 */

namespace Frontend\Widgets;


use Dalt\Core\Widget;

class NewsWidget extends Widget
{
    /**
     * @var string
     */
    public $username = '';

    public function run()
    {
        $this->render('news', [
            'username' => $this->username,
        ]);
    }
}