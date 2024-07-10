fred.page.Element = function (config) {
    config = config || {};
    config.permission = config.permission || {};

    config.isUpdate = (MODx.request.id) ? true : false;

    Ext.applyIf(config, {
        formpanel: 'fred-panel-element',
        buttons: [
            {
                text: _('save'),
                method: 'remote',
                process: config.isUpdate ? 'Fred\\Processors\\Elements\\Update' : 'Fred\\Processors\\Elements\\Create',
                keys: [
                    {
                        key: MODx.config.keymap_save || 's',
                        ctrl: true
                    }
                ]
            },
            {
                text: _('cancel'),
                params: {
                    a: 'home',
                    namespace: 'fred'
                }
            },
            {
                xtype: 'fred-button-help',
                path: 'elements.html'
            }
        ],
        components: [
            {
                xtype: 'fred-panel-element',
                isUpdate: config.isUpdate,
                permission: config.permission
            }
        ]
    });
    fred.page.Element.superclass.constructor.call(this, config);
};
Ext.extend(fred.page.Element, MODx.Component);
Ext.reg('fred-page-element', fred.page.Element);
