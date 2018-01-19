var util = require('util');

describe('test new vehicle search functionality', function() {
    beforeEach(function() {
        browser.waitForAngularEnabled(false);
        browser.get('https://www.edmunds.com/');
    });

    var HomePage = require('../page/home_page.js');

    it('I should be able to search for a new vehicle using the new vehicle search', function() {
        HomePage.selectRandomMake();
        HomePage.selectRandomModel();
        HomePage.selectNewUsedYear();
        HomePage.goButton.click();
        // expect(page.getTitle()).toBe("make of car");
    });

});
