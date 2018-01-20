globalDropDownSelection = '';

var homePage = function() {

        //List of elements on the page

        this.makeDropdown = element(by.name('select-make'));
        this.makeDropdownList = element(by.name('select-make')).all(by.tagName('option'));
        this.modelDropdown = element(by.xpath('//div//select[@name="select-model"]'));
        this.modelDropdownList = element(by.xpath('//div//select[@name="select-model"]')).all(by.tagName('option'));
        this.newUsedYearDropdownList = element(by.xpath('//div[3]//select')).all(by.tagName('option'));
        this.goButton = element(by.xpath('//a[contains(.,"Go")]'));

        var helper = require("../page/helper.js");

        this.selectRandomMake = function() {
            var allOptions = this.makeDropdownList;
            // helper.selectOptions(allOptions);

            allOptions.count().then(function(numberOfItems) {
                return Math.floor(Math.random() * numberOfItems);
            }).then(function(randomNumber) {
                allOptions.get(randomNumber).getText().then(function(text) {
                    browser.globalDropDownSelection = text;
                    console.log(browser.globalDropDownSelection);
                });
                allOptions.get(randomNumber).click();
                browser.sleep(1000);
            });

            this.selectRandomModel = function() {
                var allOptions = this.modelDropdownList;
                helper.selectOptions(allOptions);
            };

            this.selectNewUsedYear = function() {
                element(by.xpath('//div[3]//select//option[2]')).click();
                browser.sleep(1000);

            };

        };
};

        module.exports = new homePage();
