var homePage = function() {

    //List of elements on the page
    this.makeDropdown = element(by.name('select-make'));
    this.makeDropdownList = element(by.name('select-make')).all(by.tagName('option'));
    this.modelDropdown = element(by.xpath('//div//select[@name="select-model"]'));
    this.modelDropdownList = element(by.xpath('//div//select[@name="select-model"]')).all(by.tagName('option'));
    this.newUsedYearDropdownList = element(by.xpath('//div[3]//select')).all(by.tagName('option'));
    this.goButton = element(by.xpath('//a[contains(.,"Go")]'));
    this.navNewCarLink = element(by.id('nav_new_future_makes'));


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

    this.navMenuSelectRandomNewCar = function() {

        this.navNewCarLink.click();
        // browser.sleep(1000);
        // element.all(by.xpath("//a[@data-tracking-id='nav_mmy_select_make']")).get(5).click();
        var allOptions = element.all(by.xpath("//a[@data-tracking-id='nav_mmy_select_make']"));

        // allOptions.map(function(items){
        //     return items.getText();
        // });

        // console.log(allOptions);

        // allOptions.then(function(items) {
        //     console.log(items.length)

        // });

        // allOptions.count().then(function(numberOfItems) {
        //     console.log(numberOfItems);
        //     return Math.floor(Math.random() * numberOfItems);
        // }).then(function(randomNumber) {
        //     console.log(randomNumber);
        //     browser.sleep(1000);
        //     allOptions.get(randomNumber).click();

        // })

    };

    this.navMenuSelectRandomMake = function() {
        element.all(by.xpath("//a[@data-tracking-id='nav_mmy_model_select']")).get(2).click();
        browser.sleep(2000);
    };

    this.navMenuSelectRandomYear = function() {
        element.all(by.xpath("//a[@data-tracking-id='nav_mmy_year_select']")).get(1).click();

        // var allOptions = element.all(by.xpath("//a[@data-tracking-id='nav_mmy_year_select']"));

        // allOptions.count().then(function(numberOfItems) {
        //     return Math.floor(Math.random() * numberOfItems);
        // }).then(function(randomNumber) {
        //     allOptions.get(randomNumber).getText().then(function(text) {
        //         console.log(text);
        //     });
        //     allOptions.get(randomNumber).click();

        // })
    };

};

module.exports = new homePage();
