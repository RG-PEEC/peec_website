<?php
$GLOBALS['TCA']['tx_peecextension_domain_model_fundingpartner']['ctrl']['iconfile'] = 'EXT:peec_extension/Resources/Public/Icons/tx_peecextension_domain_model_fundingpartner.svg';
$GLOBALS['TCA']['tx_peecextension_domain_model_fundingpartner']['ctrl']['label_alt'] = 'abbreviation';
$GLOBALS['TCA']['tx_peecextension_domain_model_fundingpartner']['ctrl']['label_alt_force'] = true;

$GLOBALS['TCA']['tx_peecextension_domain_model_fundingpartner']['types'] = [
    '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, abbreviation, website, logo'],
];

$GLOBALS['TCA']['tx_peecextension_domain_model_fundingpartner']['ctrl']['sortby'] = 'sorting';
