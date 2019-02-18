/******************************************************
 * @package Magento 2 MoMo Payment Gateway Integration
 * @author http://www.magefox.com
 * @copyright (C) 2019 - Magefox.Com
 * @license MIT
 *******************************************************/

define([
    'jquery',
    'Magento_Payment/js/view/payment/cc-form'
], function ($, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'Magefox_MoMo/payment/web'
        },
    });
});