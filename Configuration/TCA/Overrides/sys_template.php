<?php

defined('TYPO3_MODE') || die();

/***************
 * TypoScript: Full Package
 * This includes the full setup including all configurations
 */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'projektlayout',
    'Configuration/TypoScript',
    'Projektlayout'
);