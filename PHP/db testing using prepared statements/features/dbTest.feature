Feature: DB data update
  In order to see data in the DB
  As a DBA
  I want to validate I am able to insert, update, or delete user data

  Background:
    Given A DBA is connected to the correct db with correct data showing

  Scenario: Creating a new user
    When new user is created
    Then the dba will see the new user in the db

  Scenario: Updating user information
    When the password of the user is updated
    Then the dba will see the password for the user updated

  Scenario: Deleting user
    When the user has been deleted
    Then the dba will no longer see the deleted user

