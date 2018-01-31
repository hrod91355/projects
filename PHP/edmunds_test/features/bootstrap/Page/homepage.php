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
//    protected $elements = array(
////        'Go button' => '.btn-success',
//        'Select Make DropDown' => array('xpath' => "//select[@name='select-make']"),
//        'Select_year' => array('xpath' => '//div[3]//select')
//    );

    public function iSelectGoButton()
    {
        $this->findLink("Go")->click();

    }

    public function selectYearNew()
    {
        $yearNewUsedButton = $this->find('xpath', '//div[3]//select');
        $buttonText = $yearNewUsedButton->getText();
        $yearNewUsedButton->click();
        $buttonNameArr = $this->findAll('xpath', '//div[3]//select//option');
        if (strpos($buttonText, 'NEW') !== false) {
            $this->find('xpath', "//div[3]//select//option[2]")->click();
        } else {
            $maxCount = count($buttonNameArr) - 1;
            $selectedNum = rand(1, $maxCount);
            echo $selectedNum;
            $avaiableButtonText = $buttonNameArr[$selectedNum]->getText();
            echo $avaiableButtonText;
            $this->find('xpath', "//div[3]//select//option[{$selectedNum}]")->click();
        }
    }

    public function iSelectRandomMake()
    {
        $buttonNameArr = $this->findAll('xpath', '//div[3]//select//option');
        $maxCount = count($buttonNameArr);
        $selectedNum = rand(2, $maxCount);
        echo $selectedNum;
        $avaiableButtonText = $buttonNameArr[$selectedNum]->getText();
        echo $avaiableButtonText;
    }


}