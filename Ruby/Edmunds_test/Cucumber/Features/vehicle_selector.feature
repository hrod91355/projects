Feature: vehicle selector
In order to see information on a desired vehicle
As a customer
I must use the vehicle selector in order to view a specific vehicle

Scenario: Select a specific vehicle
  Given I'm on the homepage
  When I select a make
  And I select a model
  And I select a year
  And select the go button
  Then the page of the selected car loads
