require 'page-object'
require 'page-object/page_factory'

class Homepage
  include PageObject
  include PageObject::PageFactory

  page_url 'https://www.edmunds.com/'

  select_list(:make_dropdown, :name => 'select-make')

  def select_vehicle_from_make_dropdown
    self.make_dropdown.click
  end


end
