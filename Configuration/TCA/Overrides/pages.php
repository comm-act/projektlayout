<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'projektlayout',
    'Configuration/TSconfig/Page.tsconfig',
    'General Page TSconfig'
);