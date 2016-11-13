@api
Feature: Homepage
  Scenario: Anonymous user can access homepage
    Given I am an anonymous user
    When I go to "/"
    Then the response status code should be 200