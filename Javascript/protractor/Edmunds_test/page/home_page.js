var homePage = function() {

    //List of elements on the page

    this.makeDropdown = element(by.name('select-make'));
    this.makeDropdownList = element(by.name('select-make')).all(by.tagName('option'));
    this.modelDropdown = element(by.xpath('//div//select[@name="select-model"]'));
    this.modelDropdownList = element(by.xpath('//div//select[@name="select-model"]')).all(by.tagName('option'));
    this.newUsedYearDropdownList = element(by.xpath('//div[3]//select')).all(by.tagName('option'));
    this.goButton = element(by.xpath('//a[contains(.,"Go")]'));
    this.navNewCarLink = element(by.id('nav_new_future_makes'));
    // this.newCarList = element()

    var helper = require("../page/helper.js");

    this.selectRandomMake = function() {
        var allOptions = this.makeDropdownList;
        helper.selectOptions(allOptions);
    };

    this.selectRandomModel = function() {
        var allOptions = this.modelDropdownList;
        helper.selectOptions(allOptions);
    };

    this.selectNewUsedYear = function() {
        element(by.xpath('//div[3]//select//option[2]')).click();
        browser.sleep(1000);
    };

    this.selectRandomNewCar = function() {
        this.navNewCarLink.click();


        element.all(by.xpath("//div[@class='anchor-columns list small text-white']//a")).get(3).click();
        browser.sleep(2000);
        element.all(by.xpath("//div[@class='anchor-columns list small text-white']//a")).get(3).click();
        browser.sleep(2000);
        element.all(by.xpath("//div[@class='anchor-columns list small text-white']//a")).get(1).click();
        // browser.sleep(20000);
        // helper.selectOptions(allOptions);
    };

};

module.exports = new homePage();
