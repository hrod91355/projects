Feature: DB test
  In order to interact with DB
  As a


  Scenario: Inserting data into the user db
  Given I am DBA connected to the DB
  When New user info is added to the db
  Then I should see the users info in the DB
