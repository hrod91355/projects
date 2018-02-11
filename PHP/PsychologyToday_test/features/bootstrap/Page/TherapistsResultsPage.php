<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 2/8/18
 * Time: 8:22 PM
 */

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;
use Behat\MinkExtension\Context\MinkContext;
use WebDriver\Exception;


class TherapistsResultsPage extends Page
{
    public function validateCorrectZipCode()
    {
        $headerText = $this->find('xpath', "//div[@class='results-title']//h1")->getText();
        $selectedZipCode = $GLOBALS[selectedZipCode];
        try {
            if (strpos($headerText, $selectedZipCode) !== false) {
                echo "Zip code " .$selectedZipCode. " as expected is showing in results page.";
            }else {
                echo "Wrong zip code or no zip code is showing in " .$headerText;
            }

        } catch (Exception $e) {
           $e->getMessage();
        }

    }
}