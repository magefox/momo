# Magento 2 MoMo
[![Join the chat at https://gitter.im/magefox/momo](https://badges.gitter.im/magefox/momo.svg)](https://gitter.im/magefox/momo?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Build Status](https://img.shields.io/travis/magefox/momo.svg?style=flat)](https://travis-ci.org/magefox/momo)
[![Latest Stable Version](https://poser.pugx.org/magefox/momo/v/stable)](https://packagist.org/packages/magefox/momo)
[![Total Downloads](https://poser.pugx.org/magefox/momo/downloads)](https://packagist.org/packages/magefox/momo)
[![Software License](https://img.shields.io/badge/license-MIT-green.svg?style=flat)](https://opensource.org/licenses/MIT)

## Description
MoMo Payment Gateway Integration for Magento 2.

## Installation
### Manual (without composer)
- Download zip file of thelast version of this extension under release tab
- Extract files in the Magento root directory in the folder app/code/Magefox/MoMo
- Enable the extension
```
php bin/magento --clear-static-content module:enable Magefox_MoMo
```
- Upgrade Magento setup
```
php bin/magento setup:upgrade
```

### With Composer
In the Magento root directory
- Install the module
```
composer require magefox/momo
php bin/magento module:enable Magefox_MoMo
php bin/magento setup:upgrade
```

### Cleaning
- Upgrade Magento setup
```
php bin/magento setup:upgrade
```
- Clear cache
```
php bin/magento cache:flush
```