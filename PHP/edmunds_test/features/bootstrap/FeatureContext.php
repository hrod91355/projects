<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Page\homepage;



/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(Homepage $homepage)
    {

        $this->homepage = $homepage;
    }


    /**
     * @When /^wait for the page to be loaded$/
     */
    public function waitForThePageToBeLoaded()
    {
        $this->getSession()->wait(10000, "document.readyState === 'complete'");
    }

    /**
     * @When I click on Go button
     */
    public function iClickOnGoButton()
    {
        $this->homepage->findLink("Go")->click();
    }


    /**
     * @When I select a random make
     */
    public function iSelectARandomMake()
    {
        $select = $this->getSession()->getPage()->find('id', 'home_page_mmy_make_select');
        $this->$select-click();

    }

    /**
     * @When I select a random model
     */
    public function iSelectARandomModel()
    {
        throw new PendingException();
    }

    /**
     * @When I select a random year
     */
    public function iSelectARandomYear()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see the correct vehicle
     */
    public function iShouldSeeTheCorrectVehicle()
    {
        throw new PendingException();
    }


}




