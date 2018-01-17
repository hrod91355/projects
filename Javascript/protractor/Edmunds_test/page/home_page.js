var HomePage = function() {

    //List of elements on the page

    this.makeDropdown = element(by.name('select-make'));
    this.modelDropdown = element(by.xpath('//div//select[@name="select-model"]'));
    this.newUsedDropdown = element(by.name('select-pubstate'));
    this.yearDropdown = element(by.name('select-year'));
    this.goButton = element(by.xpath('//a[contains(.,"Go")]'));


    this.selectRandomMake = function() {

        var allOptions = element(by.name('select-make')).all(by.tagName('option'));

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

    this.selectRandomModel = function() {
        this.modelDropdown.click();
        element.all(by.xpath('//div//select[@name="select-model"]/option[2]')).click();
        browser.sleep(1000);
    }

    this.selectNewUsedYear = function() {
        element(by.xpath('//div[3]//select//option[2]')).click();
        browser.sleep(1000);

    };

};

module.exports = new HomePage();
