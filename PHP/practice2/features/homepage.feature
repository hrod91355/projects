Feature: google search functionality
  test hotel search functionality
  as a customer
  I must search for a hotel

  Scenario: I see hotel results based on a city
    Given I am on "/way2auto_jquery/index.php"
    When I fill in the following:
      | Name:  | George |
      | Phone: | 1234567 |

    Then I should see "ALEXANDRIA"
