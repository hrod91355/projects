<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/14/18
 * Time: 6:55 PM
 */

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Behat\MinkExtension\Context\MinkContext;

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
        $select = $this->getSession()->getPage()->find('id', 'home_page_mmy_make_select');
        $options = $select->findAll('css', 'option');
        $secondOption = $options[1];

    }



}