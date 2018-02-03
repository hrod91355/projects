<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Page\homepage;
use Page\NewCarLandingPage;



/**
 * Defines application features from the specific context.
 */

//Global elements for validation
$selectedMakeTextForValidation='';

class FeatureContext extends MinkContext implements Context
{

    private $homepage;
    private $newCarLandingPage;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(Homepage $homepage, NewCarLandingPage $newCarLandingPage)
    {

        $this->homepage = $homepage;
        $this->newCarLandingPage = $newCarLandingPage;
    }


    /**
     * @When /^wait for the page to be loaded$/
     */
    public function waitForThePageToBeLoaded()
    {
        $this->getSession()->wait(10000, "document.readyState === 'complete'");
    }


    /**
     * @When I select a year\/new
     */
    public function iSelectAYearNewUsed()
    {
        $this->homepage->selectYearNew();
    }

    /**
     * @When I click on Go button
     */
    public function iClickOnGoButton()
    {
        $this->homepage->iSelectGoButton();
    }


    /**
     * @When I select a random make
     */
    public function iSelectARandomMake()
    {
        $this->homepage->randomMakeSelection();
    }

    /**
     * @When I select a random model
     */
    public function iSelectARandomModel()
    {
        $this->homepage->randomModelSelection();
    }

    /**
     * @Then I should see the correct vehicle
     */
    public function iShouldSeeTheCorrectVehicle()
    {
        $this->newCarLandingPage->headerValidation();
    }


    /**
     * @When I select a random make from the New Car link in the top nav
     */
    public function iSelectARandomMakeFromTheNewCarLinkInTheTopNav()
    {
        $this->homepage->randomMakeTopNav();
    }

    /**
     * @When I select a random model from the top nav
     */
    public function iSelectARandomModelFromTheTopNav()
    {
        $this->homepage->randomModelTopNav();
    }

    /**
     * @When I select a year from the top nav
     */
    public function iSelectAYearFromTheTopNav()
    {
        throw new PendingException();
    }


}




