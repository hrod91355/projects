<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Page\Homepage;
use Page\TherapistsResultsPage;
use Page\SpecificTherapistsPage;


//global elements for validation
$selectedZipCode = '';

class FeatureContext extends MinkContext implements Context
{

    private $homepage;
    private $specificTherapistsPage;
    private $therapistsResultsPage;


    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(Homepage $homepage, SpecificTherapistsPage $specificTherapistsPage, TherapistsResultsPage $therapistsResultsPage )
    {
        $this->homepage = $homepage;
        $this->specificTherapistsPage = $specificTherapistsPage;
        $this->therapistsResultsPage = $therapistsResultsPage;
    }

    /**
     * @When /^wait for the page to be loaded$/
     */
    public function waitForThePageToBeLoaded()
    {
        $this->getSession()->wait(10000, "document.readyState === 'complete'");
    }



    /**
     * @Given I navigate to the therapist results landing page
     */
    public function iNavigateToTheTherapistResultsLandingPage()
    {
        $this->homepage->enterZipCodeInTherapistSearch();
        $this->waitForThePageToBeLoaded();
        $this->therapistsResultsPage->validateCorrectZipCode();
    }

    /**
     * @When I select a random therapist
     */
    public function iSelectARandomTherapist()
    {
        throw new PendingException();
    }

    /**
     * @Then the landing page of the selected therapist loads
     */
    public function theLandingPageOfTheSelectedTherapistLoads()
    {
        throw new PendingException();
    }

    /**
     * @When I select one criteria from the side nav
     */
    public function iSelectOneCriteriaFromTheSideNav()
    {
        throw new PendingException();
    }

    /**
     * @When I select several criteria from the side nav
     */
    public function iSelectSeveralCriteriaFromTheSideNav()
    {
        throw new PendingException();
    }
}
