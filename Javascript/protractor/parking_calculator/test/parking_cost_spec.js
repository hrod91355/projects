describe('Test parking calculator text field validation', function() {
    beforeEach(function() {
        browser.waitForAngularEnabled(false);
        browser.get('http://adam.goucher.ca/parkcalc/');

    });

    var homePage = require('../page/home_page.js');

    it('I should not be able to add a time tha', function() {
        homePage.selectRandomLot();
        homePage.enterTextInEntryDateTextField();
        homePage.enterEntryDate();
        homePage.enterTextInExitDateTextField();
        homePage.enterExitDate();
        homePage.calculateButton.click();
        browser.sleep(2000);
    });
});
