<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

include 'Page/DataBaseConnector.php';
include 'Page/User.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends User implements Context
{

    private $dataBaseConnector;

    public function __construct()
    {
    }
    
}
