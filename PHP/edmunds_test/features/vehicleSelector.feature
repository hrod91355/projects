Feature: Vehicle selector on homepage
  In order to see results of the selected car
  As a potential car buyer
  I need to search for a vehicle using the vehicle selector on the homepage


  Scenario: I select a specific car using a hardcoded car and predefined steps provided by behat
    Given I am on "/"
    When I select "Acura" from "select-make"
    And wait for the page to be loaded
    And I select "ILX Sedan" from "select-model"
    And wait for the page to be loaded
    And I select a year/new
    And I click on Go button
    Then I should see "Acura ILX"

  Scenario: I select a random vehicle, make, model
    Given I am on "/"
    When I select a random make
    And wait for the page to be loaded
    And I select a random model
    And wait for the page to be loaded
    And I select a year/new
    And I click on Go button
    Then I should see the correct vehicle