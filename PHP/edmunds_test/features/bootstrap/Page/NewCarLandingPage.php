<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/31/18
 * Time: 12:45 PM
 */

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;
use Behat\MinkExtension\Context\MinkContext;
use Page\homepage;
use WebDriver\Exception;


class NewCarLandingPage extends Page


{
    public function headerValidation()
    {
        $headerText = $this->find('css', 'h1')->getText();
        $selectedMake = $GLOBALS[selectedMakeTextForValidation];
        if (strpos($headerText, $selectedMake) !== false) {
            echo "The correct landing page has loaded.";
        } else {
            print "Wrong new car landing page loads." . $selectedMake;
        }
    }

}