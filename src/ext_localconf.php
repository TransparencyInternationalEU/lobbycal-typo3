<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (version_compare(TYPO3_branch, '6.2', '<')) {
    $extensionUtility = 'Tx_Extbase_Utility_Extension';
}
else {
    $extensionUtility = '\TYPO3\CMS\Extbase\Utility\ExtensionUtility';
}

$extensionUtility::configurePlugin(
    $_EXTKEY,
    'Pi1',
    array(
        'LobbyCal' => 'list'
    ),
    // non-cacheable actions
    array(
        array(
            'LobbyCal' => 'list'
        ),
    )
);

