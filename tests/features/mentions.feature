@api @javascript @mentions
Feature: Mentions
  Background:
    Given users:
      | name         | mail              |
      | testreceiver | test1@example.com |
      | testsender   | test2@example.com |
  Scenario: When posting a post, a user should be able to do a mention
    Given I am logged in as "testsender"
    When I am on the homepage
    And I fill in "edit-field-post-0-value" with "test @testreceiver"
    # Trigger keydown.
    And I trigger "keydown" on "#edit-field-post-0-value"
    And I wait for AJAX to finish
    Then I wait for "2" seconds
    Then I click the xth "0" element with the css "ul .mention__item"
    Then I press the "Post" button
    Then I should see "test testreceiver"
    Then I should see the link "testreceiver"
