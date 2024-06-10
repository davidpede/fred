<?php

/*
 * This file is part of the Fred package.
 *
 * Copyright (c) MODX, LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/index.class.php';

/**
 * @package fred
 * @subpackage controllers
 */
class FredElementOptionSetUpdateManagerController extends FredBaseManagerController
{
    public function process(array $scriptProperties = [])
    {
    }

    public function getPageTitle()
    {
        return $this->modx->lexicon('fred.element_option_sets.update');
    }

    public function loadCustomCssJs()
    {
        $this->addJavascript($this->fred->getOption('jsUrl') . 'element_option_set/panel.js');
        $this->addLastJavascript($this->fred->getOption('jsUrl') . 'element_option_set/page.js');

        $this->addHtml('
        <script type="text/javascript">
            Ext.onReady(function() {
                MODx.load({ 
                    xtype: "fred-page-element-option-set"
                });
            });
        </script>
        ');
    }

    public function getTemplateFile()
    {
        return $this->fred->getOption('templatesPath') . 'element_option_set.tpl';
    }

    public function checkPermissions()
    {
        if (!$this->modx->hasPermission('fred_element_option_sets_save')) {
            return false;
        }

        return parent::checkPermissions();
    }
}
