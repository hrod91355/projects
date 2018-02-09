<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

include 'Page/dbh.php';
include 'Page/User.php';


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
     * @Then the dba will see the new user in the db
     */
    public function theDbaWillSeeTheNewUserInTheDb()
    {
        $this->validateUserIsShowingInDB();
    }

    /**
     * @When the password of the user is updated
     */
    public function thePasswordOfTheUserIsUpdated()
    {
        $this->createNewUser();
        $this->updateUserInformation();
    }


    /**
     * @Then the dba will see the password for the user updated
     */
    public function theDbaWillSeeThePasswordForTheUserUpdated()
    {
        $this->validateUserPasswordChange();
    }

    /**
     * @When the user has been deleted
     */
    public function theUserHasBeenDeleted()

    {
        $this->createNewUser();
        $this->deleteUserFromDB();
    }


    /**
     * @Then the dba will no longer see the deleted user
     */
    public function theDbaWillNoLongerSeeTheDeletedUser()

    {
        $this->validateUserHasBeenDeleted();
        $this->cleanDB();
    }

}
