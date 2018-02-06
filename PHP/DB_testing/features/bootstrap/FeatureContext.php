<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

include 'Page/DataBaseConnector.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends DataBaseConnector implements Context
{

    private $dataBaseConnector;

    public function __construct()
    {
    }

    /**
     * @Given I am DBA connected to the DB
     */
    public function iAmDbaConnectedToTheDb()
    {
        $this->connect();
    }

    /**
     * @When New user info is added to the db
     */
    public function newUserInfoIsAddedToTheDb()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see the users info in the DB
     */
    public function iShouldSeeTheUsersInfoInTheDb()
    {
        throw new PendingException();
    }
}
