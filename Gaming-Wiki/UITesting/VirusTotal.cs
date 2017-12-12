using System;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using System.Threading;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
namespace UITestLab
{
    [TestClass]
    public class VirusTotal
    {
        private IWebDriver browser;
        [TestInitialize]
        public void Initialize()
        {
            browser = new ChromeDriver();
        }
        [TestCleanup]
        public void Cleanup()
        {
            browser.Close();
        }
        [TestMethod]
        public void SearchVirusTotalUrl()
        {
            browser.Navigate().GoToUrl("https://http://webdev.cs.uwosh.edu/students/ahmedj47/Gaming-Wiki/ClientSide/home.php");
            IWebElement urlTextBox = browser.FindElements(By.Id("search"))[1];
            urlTextBox.SendKeys("Dark Soul");
            IWebElement scanIt = browser.keyDown(id, "\\13");;
            scanIt.Click();
            Thread.Sleep(4000);           
        }
        
    }
}