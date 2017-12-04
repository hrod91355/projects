require 'rubygems'
require 'selenium-webdriver'

browser = Selenium:WebDriver.for :chrome
browser.get "https://app.formassembly.com/users/login/"

sleep 3

browser.close