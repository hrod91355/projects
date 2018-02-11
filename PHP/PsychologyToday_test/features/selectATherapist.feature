Feature: Therapist homepage
  In order to select a therapist
  As someone in need
  I would like to select a therapist based on a certain criteria

  Background:
    Given I am on "/"
    And I navigate to the therapist results landing page

  Scenario: Select therapist on page 1 of the therapist result's page
    When I select a random therapist
    Then the landing page of the selected therapist loads
#
#  Scenario: Select a therapist based on one criteria
#    When I select one criteria from the side nav
#    And I select a random therapist
#    Then the landing page of the selected therapist loads
#
#  Scenario: Select a therapist based on several criteria
#    When I select several criteria from the side nav
#    And I select a random therapist
#    Then the landing page of the selected therapist loads