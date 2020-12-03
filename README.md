# Magento 2 Module - Redirect to Home Page after Login
Using this Magento 2 extension, you will redirect to home page after customer login.


## Installation Guide

### Type 1: Zip file

 - Unzip the theme zip file in `app/code/CsVikram/RedirectAfterLogin`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - Disable module by running `php bin/magento module:disable CsVikram_RedirectAfterLogin`
 - Enable module by running `php bin/magento module:enable CsVikram_RedirectAfterLogin`
 - Flush the cache by running `php bin/magento cache:clean`
