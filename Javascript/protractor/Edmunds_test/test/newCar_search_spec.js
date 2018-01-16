var util = require('util');

describe('test new vehicle search functionality', function() {
    beforeEach(function() {
        browser.waitForAngularEnabled(false);
        browser.get('https://www.edmunds.com/');
    });

    var HomePage = require('../page/home_page.js');

    it('should be able to search for a new vehicle using the new vehicle search', function() {
        console.log("start");
        HomePage.makeDropdown.click();
        HomePage.selectRandomMake();
        browser.sleep(2000);
        console.log("test");

    });

});
