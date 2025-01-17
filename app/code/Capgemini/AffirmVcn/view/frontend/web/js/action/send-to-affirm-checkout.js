define([
    "jquery",
    "mage/translate",
    "Astound_Affirm/js/model/aslowas",
    "Magento_Checkout/js/model/full-screen-loader",
    "Magento_Checkout/js/model/quote",
    "mage/url",
    'Magento_Customer/js/model/customer',
    "Astound_Affirm/js/model/affirm",
    'Magento_Ui/js/model/messageList'
], function ($, $t, loadScript, fullScreenLoader, quote, url, customer, affirmCheckout, Messages) {

    /*var options = {
        public_api_key: window.checkoutConfig.payment['affirm_gateway'].apiKeyPublic,
        script: window.checkoutConfig.payment['affirm_gateway'].script
    };

    loadScript.loadScript(options);*/

    return function(response, affirmGateway) {
        fullScreenLoader.startLoader();
        var result = JSON.parse(response),
            giftWrapItems = result.wrapped_items,
            checkoutObj;

        affirmCheckout.prepareOrderData(result);
        if (giftWrapItems !== 'undefined') {
            affirmCheckout.addItems(giftWrapItems);
        }
        try {
            affirm.ui.error.on("close", function() {
                //redirect to checkout cart in case if customer canceled or returned from error pop-up
                $.mage.redirect(window.checkoutConfig.payment['affirm_gateway'].merchant.user_cancel_url);
            });
            checkoutObj = affirmCheckout.getData();
            if (affirmCheckout.getFinancingProgram()) {
                checkoutObj.financing_program = affirmCheckout.getFinancingProgram();
            }

            //affirm.checkout(checkoutObj); seems it's redundant.
            affirm.checkout.open_vcn({
                checkout_data: checkoutObj,

                success: function(card_checkout) {
                    affirmGateway.placeOrderPayfabric(card_checkout);

                },

                error: function(error_response) {
                    console.log(error_response);
                }

            });
        } catch (err) {
            Messages.addErrorMessage({
                    'message': $t('We have a problem with your affirm script loading, please verify your API URL!')}
            );
            fullScreenLoader.stopLoader();
        }
    }
});
