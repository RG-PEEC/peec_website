<?php

defined('TYPO3_MODE') or die();

$identifier = 'peecextension_peecfe';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']
    [$identifier] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $identifier,
    'FILE:EXT:peec_extension/Configuration/FlexForms/flexforms.xml'
);
