/*
 * File: stoDias.js
 * Date: Sat Jun 02 2012 07:03:55 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

stoDias = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        stoDias.superclass.constructor.call(this, Ext.apply({
            storeId: 'stoDias',
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
new stoDias();