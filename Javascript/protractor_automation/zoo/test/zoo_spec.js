var util = require('util')

describe('To test the animal adoption flow', function() {
    beforeEach(function() {
        browser.get('http://www.thetestroom.com/jswebapp/');
    });

    var home_page = require('../page/home_page.js');

    it('Should be able to adopt an animal by page objects', function() {
        home_page.enterFieldValue('You will subscribe');
        var getHomePageText = home_page.getDynamicText();
        expect(getHomePageText).toBe('You will subscribe');
        var animal_page = home_page.clickContinueButton();

        animal_page.selectAnimal(3);
        var confirm_page = animal_page.clickContinueButton();
        expect(confirm_page.getTitle()).toBe('Thank You');

    });
});
