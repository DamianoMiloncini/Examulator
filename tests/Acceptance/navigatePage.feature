Feature: navigate between pages

  In order to switch pages
  As a user 
  I need to click the Next Page button
 
  Scenario: try switching pages
    Given I am on "http://localhost/home" 
    When I click Next Page
    Then I see "Aulevoir"