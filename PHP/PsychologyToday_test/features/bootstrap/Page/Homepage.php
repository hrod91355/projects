<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 2/8/18
 * Time: 8:08 PM
 */

namespace Page;


use Behat\Behat\Context\Context;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;
use Behat\MinkExtension\Context\MinkContext;


class Homepage extends Page
{

    public function enterZipCodeInTherapistSearch()
    {
        $zipCodeArr = ['91355', '95135', '80501', '02144'];
        $randNum = rand(0, 3);
        $zipCode = $zipCodeArr[$randNum];
        $GLOBALS[selectedZipCode] = $zipCode;
        //click search button to initiate text field
        $this->find('xpath', "//div//button[@value='Search']")->click();
        //Add zip code
        $this->findField('autosuggestSearchInput')->setValue($zipCode);
        //click new search button
        $this->find('css', "#autosuggestSearchButton")->click();
    }


}