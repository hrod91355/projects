require 'rubygems'
require 'selenium-webdriver'
require 'page-object'
require 'page-object/page_factory'
require 'require_all'

require_all 'lib'

World(PageObject::PageFactory)







