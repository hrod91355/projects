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
use page\NewCarLandingPage;


class HomePage extends Page
{
//    protected $elements = array(
////        'Go button' => '.btn-success',
//        $Select_Make_DropDown => array('xpath' => "//select[@name='select-make']"),
//        'selectModelDropDown' => array('xpath' => '//div//select[@name="select-model"]'),
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
            $avaiableButtonText = $buttonNameArr[$selectedNum]->getText();
            $this->find('xpath', "//div[3]//select//option[{$selectedNum}]")->click();
        }
    }

    public function randomMakeSelection()
    {
        $selectMakeDropDown = $this->find('xpath', '//div//select[@name="select-make"]');
        $selectMakeDropDown->click();

        $availableMakesArr = $this->findAll('xpath', '//div//select[@name="select-make"]//option');
        $maxCount = count($availableMakesArr);
        $selectedNum = rand(2, $maxCount);
        $selectedMake = $availableMakesArr[$selectedNum - 1]->getText();
        $GLOBALS[selectedMakeTextForValidation] = $selectedMake;
        $this->find('xpath', "//div//select[@name='select-make']//option[{$selectedNum}]")->click();

    }

    public function randomModelSelection()
    {
        $selectModelDropDown = $this->find('xpath', '//div//select[@name="select-model"]');
        $selectModelDropDown->click();

        $availableModelArr = $this->findAll('xpath', '//div//select[@name="select-model"]//option');
        $maxCount = count($availableModelArr);
        $selectedNum = rand(2, $maxCount);
        $selectedModel = $availableModelArr[$selectedNum - 1]->getText();
        $this->find('xpath', "//div//select[@name='select-model']//option[{$selectedNum}]")->click();
    }

    public function randomMakeTopNav()
    {
        $selectNewCarLinkTopNav = $this->findLink('New Cars');
        $selectNewCarLinkTopNav->click();

        $makesArr = $this->findAll('xpath', "//div[@class='makes']//a");
        $maxCount = count($makesArr);
        $selectedNum = rand(2, $maxCount);
        $selectedMake = $makesArr[$selectedNum]->getText();
        echo $selectedMake;
        $GLOBALS[selectedMakeTextForValidation] = $selectedMake;
        $this->find('xpath', "//div[@class='makes']//a[{$selectedNum}]")->click();
    }

    public function randomModelTopNav() {
        $modelArr = $this->findAll('xpath', "//div[@class='models']//a");
        $maxCount = count($modelArr);
        $selectedNum = rand(2, $maxCount);
        $this->find('xpath', "//div[@class='models']//a[{$selectedNum}]")->click();

    }


}