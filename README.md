Custom Shipping for Magento 2
==================

This is a sample for Shipping module in Magento 2. You are free to use this module as a base for developing any custom shipping modules.

Installation
-------------
**Using Composer**

Run the following series of command (from root of your Magento2 Installation):
```
composer config repositories.magesycho-magento2-custom-shipping git git@github.com:MagePsycho/magento2-custom-shipping.git

composer require magepsycho/magento2-custom-shipping:dev-master
```

**Using Zip**
* Download the [Zip File](https://github.com/MagePsycho/magento2-custom-shipping/archive/master.zip)
* Extract & upload the files to `/path/to/magento2/app/code/MagePsycho/Customshipping/`

After installation by either means, enable the extension by running following commands (again from root of Magento2 installation):
```
php bin/magento module:enable MagePsycho_Customshipping --clear-static-content
php bin/magento setup:upgrade
```


[Click here to read more on module packaging, installation & activation in Magento 2](http://www.blog.magepsycho.com/install-magento-2-module-from-github-or-bitbucket-repository-using-composer/)

Screenshots
-----------
![Backend Settings](http://www.blog.magepsycho.com/wp-content/uploads/2015/12/magento2-custom-shipping.png "Backend Settings")
1. Screentshot - Backend Settings

![Checkout Steps 1 - Checkout](http://www.blog.magepsycho.com/wp-content/uploads/2015/11/magento2-custom-shipping-checkout.png "Checkout Steps 1 - Checkout")
2. Checkout Steps 1 - Checkout

![Checkout Steps 2 - Summary](http://www.blog.magepsycho.com/wp-content/uploads/2015/11/magento2-custom-shipping-checkout-summary.png "Checkout Steps 2 - Summary")
3. Checkout Steps 2 - Summary
