<?php
    defined('TYPO3_MODE') or die();
    $_EXTKEY = $GLOBALS['_EXTKEY'] = 'fe_user_cards';
    $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
    $pluginSignature = strtolower($extensionName) . '_multiplefeusercards';
    $pluginTitle = 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_db.xlf:fe_user_cards.multiple_fe_user_cards_title';
    $pluginIcon = '';
    $pluginType = 'list_type';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        [$pluginTitle, $pluginSignature, $pluginIcon],
        $pluginType,
        $_EXTKEY
    );

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature]='pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_multiple_fe_user_cards.xml');