@api @javascript
Feature: Front page
  Scenario: An anonymous user can access the front page
    Given I am an anonymous user
    When I am on the homepage
    Then I should see "#drupalnorge på slack"

