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
        'Go button' => '.btn-success',
        'Select Make DropDown' => array('xpath' => "//select[@name='select-make']")
    );

    public function iSelectGoButton()
    {
        $this->homepage->findLink("Go")->click();

    }

    public function iSelectRandomMake()
    {
        $this->hompage->findLink('Select Make DropDown')->click();
    }



}