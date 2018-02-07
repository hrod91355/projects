<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

include 'Page/dbh.php';
include 'Page/User.php';

//Global elements for validation
$createdUserFirstName='';


class FeatureContext extends User implements Context
{

    private $dataBaseConnector;

    public function __construct()
    {
    }
    /**
     * @Given A DBA is connected to the correct db with correct data showing
     */
    public function aDbaIsConnectedToTheCorrectDbWithCorrectDataShowing()
    {
        $this->connect();
    }

    /**
     * @When new user is created
     */
    public function newUserIsCreated()
    {
        $this->createNewUser();
    }

    /**
     * @Then the dba will see the changes in the db
     */
    public function theDbaWillSeeTheChangesInTheDb()
    {
        $this->validateUserIsShowingInDB();
    }

    /**
     * @When the password of the user is updated
     */
    public function thePasswordOfTheUserIsUpdated()
    {
        throw new PendingException();
    }

    /**
     * @When the user has been deleted
     */
    public function theUserHasBeenDeleted()
    {
        throw new PendingException();
    }
}
