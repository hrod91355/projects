module.exports = {

    selectLot: function(allOptions) {
        allOptions.count().then(function(numberOfItems) {
            return Math.floor(Math.random() * numberOfItems);
        }).then(function(randomNumber) {
            allOptions.get(randomNumber).getText().then(function(text) {
                globalDropDownSelection = text;
                console.log(globalDropDownSelection);
            });
            allOptions.get(randomNumber).click();
            browser.sleep(1000);
        });
    },

};
