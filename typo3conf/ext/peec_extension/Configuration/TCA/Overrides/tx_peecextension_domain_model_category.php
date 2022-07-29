<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    'peec_extension',
    'tx_peecextension_domain_model_category'
);

$GLOBALS['TCA']['tx_peecextension_domain_model_category']['ctrl']['iconfile'] = 'EXT:peec_extension/Resources/Public/Icons/tx_peecextension_domain_model_category.svg';
$GLOBALS['TCA']['tx_peecextension_domain_model_category']['ctrl']['label_alt'] = 'abbreviation';
$GLOBALS['TCA']['tx_peecextension_domain_model_category']['ctrl']['label_alt_force'] = true;
