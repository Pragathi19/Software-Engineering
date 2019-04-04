from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
browser = webdriver.Chrome('C:/Users/Prajwala/Desktop/SE/chromedriver.exe')
browser.get("http://localhost/cabify/deletecab.php")
time.sleep(1)
cab = browser.find_element_by_name("cab_number")


cab.send_keys("KA20 E111")

login_attempt = browser.find_element_by_xpath("//*[@name='submit1']")
login_attempt.submit()