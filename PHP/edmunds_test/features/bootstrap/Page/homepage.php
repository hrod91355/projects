<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/14/18
 * Time: 6:55 PM
 */

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class homepage extends Page
{
    protected $elements = array(
        'Go button' => '.btn-success'

    );

    public function iSelectGoButton()
    {
        $this->homepage->findLink("Go")->click();

    }

    public function iSelectRandomMake()
    {
        
    }



}