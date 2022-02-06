<div align="center">

![Magento 2 Custom Shipping](https://i.imgur.com/d8QEHRb.png)
# Magento 2 Custom Shipping

</div>

<div align="center">

[![Packagist Version](https://img.shields.io/github/v/tag/MagePsycho/magento2-custom-shipping?sort=semver&label=packagist&style=for-the-badge)](https://packagist.org/packages/magepsycho/magento2-custom-shipping)
[![Packagist Downloads](https://img.shields.io/packagist/dt/magepsycho/magento2-custom-shipping.svg?style=for-the-badge)](https://packagist.org/packages/magepsycho/magento2-custom-shipping/stats)
![Supported Magento Versions](https://img.shields.io/badge/magento-%202.2_|2.3_|_2.4-brightgreen.svg?logo=magento&longCache=true&style=for-the-badge)
![License](https://img.shields.io/badge/license-MIT-green?color=%23234&style=for-the-badge)

</div>

Overview
==================

[Magento 2 Custom Shipping](https://www.magepsycho.com/magento-2-custom-shipping.html) is a sample for Shipping module in Magento 2.   
You can use this module as a base for developing any custom shipping modules.

Installation
-------------
**Using Composer**

*Run the commands from the root of the Magento installation*
```
composer require magepsycho/magento2-custom-shipping
```

**Using modman**
```
modman init
modman clone git@github.com:MagePsycho/magento2-custom-shipping.git
```

**Using Zip**
* Download the [Zip File](https://github.com/MagePsycho/magento2-custom-shipping/archive/master.zip)
* Extract & upload the files to `/path/to/magento2/app/code/MagePsycho/CustomShipping/`

After installation by either means, enable the extension by running following commands (again from root of Magento2 installation):
```
php bin/magento module:enable MagePsycho_CustomShipping --clear-static-content
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

## Authors

- Raj KB [Maintainer] [![Twitter Follow](https://img.shields.io/twitter/follow/rajkbnp.svg?style=social)](https://twitter.com/rajkbnp)
- `{{this could be you}}` (see "Contribution" section)

## Need Support?
If you encounter any problems or bugs, please create an issue on [GitHub](https://github.com/MagePsycho/magento2-custom-shipping/issues).

Please [visit our store](https://www.magepsycho.com/extensions/magento-2.html) for more FREE / paid extensions OR [contact us](https://magepsycho.com/contact) for customization / development services.

## Contribution
Any contribution to the development of `Magento 2 Custom Shipping` is highly welcome.  
The best possibility to provide any code is to open a [pull request on GitHub](https://github.com/MagePsycho/magento2-custom-shipping/pulls).
