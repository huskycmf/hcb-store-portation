define([
    "dojo/_base/declare",
    'hc-backend/layout/main/content/package',
    "dojo/i18n!./nls/Package",
    'xstyle/css!./css/portation.css'
], function(declare, _Package, translation) {

    return declare("StorePortationPackage", [ _Package ], {
        title: translation['packageTitle']
    });
});
