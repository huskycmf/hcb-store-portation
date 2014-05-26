define([
    "dojo/_base/declare",
    "dojo/_base/array",
    "dojo/_base/lang",
    "dojo/on",
    'hc-backend/layout/main/content/_ContentMixin',
    "dijit/_TemplatedMixin",
    "dojo/text!./templates/Container.html",
    "dojo/i18n!../nls/View",
    "dojo/request",
    "hc-backend/router"
], function(declare, array, lang, on, _ContentMixin, _TemplatedMixin,
            template, translation) {
    return declare('hcb-store-portation.view.Container', [ _ContentMixin, _TemplatedMixin ], {
        //  summary:
        //      List container. Contains widgets who responsible for
        //      displaying list of clients.
        templateString: template,

        baseClass: 'storePortationView'
    });
});
