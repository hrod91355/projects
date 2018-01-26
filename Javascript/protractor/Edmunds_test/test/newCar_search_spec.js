require("../page/helper.js");

describe('test new vehicle search functionality', function() {
    beforeEach(function() {
        browser.waitForAngularEnabled(false);
        browser.get('https://www.edmunds.com/');
    });

    var homePage = require('../page/home_page.js');
    var helper = require("../page/helper.js");


    it('I should be able to search for a new vehicle using the new vehicle search', function() {
        homePage.selectRandomMake();
        homePage.selectRandomModel();
        homePage.selectNewUsedYear();
        homePage.goButton.click();
    });

    it('I should be able to select a make from the New Car nav menu', function() {
        homePage.navMenuSelectRandomNewCar();
        homePage.navMenuSelectRandomMake();
        homePage.navMenuSelectRandomYear();
    })

});



