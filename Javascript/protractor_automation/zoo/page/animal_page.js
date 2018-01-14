require ('../page/confirm_page.js');

var animal_page = function() {
    this.selectAnimal = function(index) {
        element(by.model('animal')).$('[value="' + index + '"]').click();
    };

    this.clickContinueButton = function() {
        element(by.css('#continue_button')).click();
        return require('./confirm_page.js');
    };

};

module.exports = new animal_page();
