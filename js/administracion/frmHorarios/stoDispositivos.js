/*
 * File: stoDispositivos.js
 * Date: Sun Jun 03 2012 22:16:06 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

stoDispositivos = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        stoDispositivos.superclass.constructor.call(this, Ext.apply({
            storeId: 'stoDispositivos',
            root: 'data',
            url: '/programacion/getDispositivos',
            messageProperty: 'msg',
            fields: [
                {
                    name: 'id'
                },
                {
                    name: 'nombre'
                }
            ]
        }, cfg));
    }
});
new stoDispositivos();