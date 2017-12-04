
require 'selenium-webdriver'

browser = Selenium::WebDriver.for :chrome


Before do 
	browser.get "https://app.formassembly.com/users/login/"
	sleep 3
end

#at_exit do
#	@browser.close
#end