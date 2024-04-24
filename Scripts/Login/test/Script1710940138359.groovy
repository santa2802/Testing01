import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import static com.kms.katalon.core.testobject.ObjectRepository.findWindowsObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.cucumber.keyword.CucumberBuiltinKeywords as CucumberKW
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testng.keyword.TestNGBuiltinKeywords as TestNGKW
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import com.kms.katalon.core.windows.keyword.WindowsBuiltinKeywords as Windows
import internal.GlobalVariable as GlobalVariable
import org.openqa.selenium.Keys as Keys

WebUI.openBrowser('')

WebUI.navigateToUrl('https://cv-me.metrodataacademy.id/')

WebUI.click(findTestObject('Object Repository/Page_Beranda  CV-ME/a_Login'))

WebUI.setText(findTestObject('Object Repository/Page_Beranda  CV-ME/input_Masuk ke akun Anda_email'), 'Jonathan.halim@mii.co.id')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Beranda  CV-ME/input_Masuk ke akun Anda_password'), 'tY6lGaNFwIGkmpPQtjN6ZQ==')

WebUI.click(findTestObject('Object Repository/Page_Beranda  CV-ME/button_MASUK'))

WebUI.click(findTestObject('Object Repository/Page_Dashboard  CV-ME/p_Edit'))

WebUI.switchToWindowTitle('App / CV-ME')

WebUI.click(findTestObject('Page_App  CV-ME/a_'))

WebUI.uploadFile(findTestObject('Object Repository/Page_App  CV-ME/b_Ubah Foto'), 'C:\\Users\\USER\\Pictures\\swot.png')

FilePath = WebUI.getAttribute(findTestObject('Page_App  CV-ME/b_Ubah Foto'), 'value')

WebUI.verifyMatch('FilePath', 'C:\\Users\\USER\\Pictures\\swot.png', false)

WebUI.delay(5)

WebUI.closeBrowser()

