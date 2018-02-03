Feature: Top Nav on homepage
  In order to see other vehicles
  As a potential car buyer
  I would like to navigate throughout the site using the top nav links


  Scenario: I select a new vehicle using the new car link in the top nav
    Given I am on "/"
    And wait for the page to be loaded
    When I select a random make from the New Car link in the top nav
    And wait for the page to be loaded
    And I select a random model from the top nav
    And wait for the page to be loaded
    And I select a year from the top nav
    And wait for the page to be loaded
    Then I should see the correct vehicle