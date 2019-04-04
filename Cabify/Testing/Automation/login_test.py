from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
browser = webdriver.Chrome('C:/Users/Prajwala/Desktop/SE/chromedriver.exe') #Add the path of chromedriver in your system
browser.get("http://localhost/cabify/admin_login.php")
time.sleep(1)
username = browser.find_element_by_name("email")
password = browser.find_element_by_name("pswd")

username.send_keys("praj.p98@gmail.com")
password.send_keys("praj")
login_attempt = browser.find_element_by_xpath("//*[@type='submit']")
login_attempt.submit()
