module.exports = function(){
  var faker = require("faker");
  var _ = require("lodash");
  return {
    users: _.times(100, function (n) {
      return {
        id: n,
        name: faker.name.findName(),
        email: faker.internet.email(),
        address: faker.address.streetAddress(),
        city: faker.address.city(),
        department: faker.commerce.department()
      }
    })
  }
}
