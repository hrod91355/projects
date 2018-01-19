
$b = Selenium::WebDriver.for :chrome

$b = $b

Before do

  # $b.get "https://www.edmunds.com/"
end
at_exit do
  $b.close
end
