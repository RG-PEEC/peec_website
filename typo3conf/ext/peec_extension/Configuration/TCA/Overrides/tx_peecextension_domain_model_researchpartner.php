<?php
$GLOBALS['TCA']['tx_peecextension_domain_model_researchpartner']['ctrl']['iconfile'] = 'EXT:peec_extension/Resources/Public/Icons/tx_peecextension_domain_model_researchpartner.svg';
$GLOBALS['TCA']['tx_peecextension_domain_model_researchpartner']['ctrl']['label_alt'] = 'abbreviation';
$GLOBALS['TCA']['tx_peecextension_domain_model_researchpartner']['ctrl']['label_alt_force'] = true;

$GLOBALS['TCA']['tx_peecextension_domain_model_researchpartner']['types'] = [
    '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, display, name, abbreviation, website, logo, participant'],
];

$GLOBALS['TCA']['tx_peecextension_domain_model_researchpartner']['ctrl']['sortby'] = 'sorting';

$GLOBALS['TCA']['tx_peecextension_domain_model_researchpartner']['columns']['display']['config'] = [
    'type' => 'check',
    'renderType' => 'checkboxToggle',
    'items' => [
        [
            0 => '',
            1 => ''
        ]
    ],
    'default' => 1
];
