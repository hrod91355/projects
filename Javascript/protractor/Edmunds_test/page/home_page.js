var HomePage = function() {

    //List of elements on the page

    this.makeDropdown = element(by.name('select-make'));
    this.modelDropdown = element(by.xpath('//div//select[@name="select-model"]'));
    this.newUsedDropdown = element(by.name('select-pubstate'));
    this.yearDropdown = element(by.name('select-year'));


    this.selectRandomMake = function() {
        var selectionLength = element.all(by.tagName('option'));
        console.log(typeof selectionLength);

        var selection = element.all(by.tagName('option')).get(3);
        selection.getText().then(function(text) {
            console.log(text);
        });

        selection.click();

    };

    this.selectRandomModel = function() {
        this.modelDropdown.click();
        element.all(by.xpath('//div//select[@name="select-model"]/option[2]')).click();
    }

    this.selectPubState = function() {
        this.yearDropdown.click();
        browser.sleep(2000);


    }



};

module.exports = new HomePage();
