require ('../page/animal_page.js');

var home_page = function() {

    this.enterFieldValue = function(value) {
        element(by.model('person.name')).sendKeys(value);
    };

    this.getDynamicText = function() {
        element(by.bind('person.name')).getText();
    };

    this.clickContinueButton = function() {
        element(by.css('#continue_button')).click();
        return require('./animal_page.js');
    };


};
module.exports = new home_page();
