var HomePage = function() {

    //List of elements on the page

    this.makeDropdown = element(by.name('select-make'));


    this.selectRandomMake = function() {
        // var makes = element.all(by.tagName('option'));
        // var maxNumOfCars = makes.length;

        // makes.get(maxNumOfCars).click();

        $$('.select option').then(function(items){
          console.log(items.length)
        });

    };

};

module.exports = new HomePage();
