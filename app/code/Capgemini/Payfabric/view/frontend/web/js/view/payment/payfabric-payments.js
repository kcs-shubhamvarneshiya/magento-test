define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'payfabric',
                component: 'Capgemini_Payfabric/js/view/payment/method-renderer/payfabric',
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
