module.exports = {

    selectOptions: function(allOptions) {

        allOptions.count().then(function(numberOfItems) {
            return Math.floor(Math.random() * numberOfItems);
        }).then(function(randomNumber) {
            allOptions.get(randomNumber).getText().then(function(text) {
              global.globalDropDownSelection = text;
            });
            allOptions.get(randomNumber).click();
            browser.sleep(1000);
        });
    },

    titleValidation: function(globalDropDownSelection ) {
        expect(browser.getTitle()).toContain(globalDropDownSelection );
    }

};



// browser.globalDropDownSelection =allOptions.get(randomNumber).getText().then(function(text) {
//                 return  = text;
//};
