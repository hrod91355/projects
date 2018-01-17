require 'selenium-webdriver'

driver = Selenium::WebDriver.for :chrome
driver.get "https://app.formassembly.com/users/login/"

#Enter invalid login creds
driver.find_element(:id, 'username').send_keys "blah@blah.com"
driver.find_element(:id, 'password').send_keys "password1"
driver.find_element(:id, 'loginButton').click

#validate error message "Login failed: Credentials mismatch." appears

test = driver.find_element(:id, 'password-E').text

if test.include? "Login failed" 
	puts "Test has passed"
else puts "Test has failed due to no error message"
end


sleep 3

driver.close