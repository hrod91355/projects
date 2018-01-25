<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/14/18
 * Time: 6:55 PM
 */

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;
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
        $select = $this->getPage()->find('id', 'home_page_mmy_make_select');
        $options = $select->findAll('xpath', '//div//select[@name="select-make"]//option')
        $secondOption = $options[1];

        $select = $this->getSession()->getPage()->find('css', '#home_page_mmy_make_select');
        sleep(2);
       ;
//        $secondOption = $options[1];
//        $this->$select[1]->click();

//        echo count($options);
        echo gettype($options);


    }



}