class HomePage
  include PageObject

   select_list(:make_dropdown, :name => 'select-make')

   def select_vehicle_from_make_dropdown
    self.make_dropdown.click
   end


end
