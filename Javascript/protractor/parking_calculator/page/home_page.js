var homePage = function() {

    //List of elements
    this.lotDropdownList = element(by.id('Lot')).all(by.tagName('option'));
    this.entryTimeTextField = element(by.id('EntryTime'));
    this.entryDateTextField = element(by.id('EntryDate'));
    this.exitTimeTextField = element(by.id('ExitTime'));
    this.exitDateTextField = element(by.id('ExitDate'));
    this.calculateButton = element(by.name('Submit'));

    var helper = require("../page/helper.js");

    this.selectRandomLot = function() {
        var allOptions = this.lotDropdownList;
        helper.selectLot(allOptions);
    };

    this.enterEntryDate = function() {
        this.entryDateTextField.clear().sendKeys("01/15/2018");
    };

    this.enterTextInEntryDateTextField = function() {
        var getRandomTime = Math.floor(Math.random() * 2400) + 1000;
        this.entryTimeTextField.clear().sendKeys(getRandomTime);
    };

    this.enterTextInExitDateTextField = function() {
        var getRandomTime = Math.floor(Math.random() * 2400) + 1000;
        this.exitTimeTextField .clear().sendKeys(getRandomTime);
    };

    this.enterExitDate = function() {
      this.exitDateTextField.clear().sendKeys("01/20/2018");
    };





};

module.exports = new homePage();
