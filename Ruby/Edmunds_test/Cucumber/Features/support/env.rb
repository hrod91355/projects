require 'rubygems'
require 'selenium-webdriver'
require 'page-object'
require 'page-object/page_factory'

World(PageObject::PageFactory)


browser = Selenium::WebDriver.for :chrome

Before do
  $b = browser
  $b.get "https://www.edmunds.com/"
end
