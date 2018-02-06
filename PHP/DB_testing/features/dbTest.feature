Feature: DB data update
  In order to see data in the DB
  As a DBA
  I want to validate I am able to insert, update, or delete data


  Scenario: Inserting data into the user db
  Given I am DBA connected to the DB
  When New user info is added to the db
  Then I should see the users info in the DB
