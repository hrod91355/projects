var HomePage = function() {

    //List of elements on the page

    this.makeDropdown = element(by.name('select-make'));
    this.makeDropdownList = element(by.name('select-make')).all(by.tagName('option'));
    this.modelDropdown = element(by.xpath('//div//select[@name="select-model"]'));
    this.modelDropdownList = element(by.xpath('//div//select[@name="select-model"]')).all(by.tagName('option'));
    this.newUsedYearDropdownList = element(by.xpath('//div[3]//select')).all(by.tagName('option'));
    this.goButton = element(by.xpath('//a[contains(.,"Go")]'));


    this.selectRandomMake = function() {

        var allOptions = this.makeDropdownList;

        allOptions.count().then(function(numberOfItems) {
            return Math.floor(Math.random() * numberOfItems) + 1;
        }).then(function(randomNumber) {
            allOptions.get(randomNumber).getText().then(function(text) {
                var selectedMake = text;
                console.log(selectedMake);
            });
            allOptions.get(randomNumber).click();
            browser.sleep(1000);
        });
    };

    this.selectRandomModel = function() {

        var allOptions = this.modelDropdownList;

        allOptions.count().then(function(numberOfItems) {
            return Math.floor(Math.random() * numberOfItems) + 1;
        }).then(function(randomNumber) {
            allOptions.get(randomNumber).getText().then(function(text) {
                console.log(text);
            });
            allOptions.get(randomNumber).click();
            browser.sleep(1000);
        });
    };

    this.selectNewUsedYear = function() {

        element(by.xpath('//div[3]//select//option[2]')).click();
        browser.sleep(1000);

    };

};

module.exports = new HomePage();
