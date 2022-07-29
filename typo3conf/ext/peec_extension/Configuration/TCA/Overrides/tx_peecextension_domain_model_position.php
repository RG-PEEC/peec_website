<?php
$GLOBALS['TCA']['tx_peecextension_domain_model_position']['ctrl']['iconfile'] = 'EXT:peec_extension/Resources/Public/Icons/tx_peecextension_domain_model_position.svg';

$GLOBALS['TCA']['tx_peecextension_domain_model_position']['types'] = [
    '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name'],
];

$GLOBALS['TCA']['tx_peecextension_domain_model_position']['ctrl']['sortby'] = 'sorting';
