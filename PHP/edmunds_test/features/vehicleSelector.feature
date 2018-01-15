Feature: Vehicle selector on homepage
  In order to see results of the selected car
  As a potential car buyer
  I need to search for a car using the vehicle selector on the homepage

  Scenario: I select a specific car using a hardcoded car and predefined steps provided by behat
    Given I am on "/"
    When I select "Acura" from "select-make"
    When wait for the page to be loaded
    And I select "ILX Sedan" from "select-model"
    When wait for the page to be loaded
    And I select "2017" from "select-year"
    When wait for the page to be loaded
    And I press "Go"
    Then I should see " Acura ILX "



