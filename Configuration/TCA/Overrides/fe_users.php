<?php
    defined('TYPO3_MODE') or die();
    $_EXTKEY = $GLOBALS['_EXTKEY'] = 'fe_user_cards';

    // Configure new fields:
    $fields = array(
        'tx_fe_user_cards_position' => array(
            'label' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_db.xlf:fe_users.fe_user_cards_position',
            'exclude' => 0,
            'config' => array(
                'type' => 'input',
                'max' => 255
            ),
        ),
        'tx_fe_user_cards_mobile' => array(
            'label' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_db.xlf:fe_users.fe_user_cards_mobile',
            'exclude' => 0,
            'config' => array(
                'type' => 'input',
                'size' => 20,
                'max' => 30
            ),
        ),
        'tx_fe_user_cards_sorting' => array(
            'label' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_db.xlf:fe_users.fe_user_cards_sorting',
            'exclude' => 0,
            'config' => array(
                'type' => 'input',
                'max' => 255
            ),
        ),
    );

    // Add new fields to fe_users
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $fields);
    
    // Add position before name
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'fe_users',
        'fe_user_cards_position',
        '',
        'before:name'
    );

    // Add mobile after phone
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'fe_users',
        'fe_user_cards_mobile',
        '',
        'after:telephone'
    );

    // Add sorting after TS Config
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'fe_users',
        'fe_user_cards_sorting',
        '',
        'before:TSconfig'
    );
