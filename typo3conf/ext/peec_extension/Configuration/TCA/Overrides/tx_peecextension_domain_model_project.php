<?php
$GLOBALS['TCA']['tx_peecextension_domain_model_project']['ctrl']['iconfile'] = 'EXT:peec_extension/Resources/Public/Icons/tx_peecextension_domain_model_project.svg';

$GLOBALS['TCA']['tx_peecextension_domain_model_project']['columns']['color_code']['config'] = [
    'type' => 'input',
    'renderType' => 'colorpicker',
    'size' => 10,
    'default' => "#2B2D42"
];

$GLOBALS['TCA']['tx_peecextension_domain_model_project']['columns']['active']['config'] = [
    'type' => 'check',
    'items' => [
        '1' => [
            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
        ]
    ],
    'default' => 1,
];

$GLOBALS['TCA']['tx_peecextension_domain_model_project']['types'] = [
    '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, startdate, enddate, active, description, category, leader,  member, researchpartner, companypartner, fundingpartner, publication, teaserimage, media, color_code'],
];
