<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (version_compare(TYPO3_branch, '6.2', '<')) {
    $extensionMamagementUtility = 't3lib_extMgm';
    $extensionUtility = 'Tx_Extbase_Utility_Extension';
}
else {
    $extensionMamagementUtility = '\TYPO3\CMS\Core\Utility\ExtensionManagementUtility';
    $extensionUtility = '\TYPO3\CMS\Extbase\Utility\ExtensionUtility';
}

$extensionUtility::registerPlugin(
    $_EXTKEY,
    'Pi1',
    'LobbyCal'
);

$extensionMamagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'LobbyCal');