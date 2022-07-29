<?php

$GLOBALS['TCA']['tx_peecextension_domain_model_employee']['types'] = [
    '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, firstname, lastname, academictitle, postacademictitle, email, phonenumber, picture, position, education, career'],
];

$GLOBALS['TCA']['tx_peecextension_domain_model_employee']['ctrl']['iconfile'] = 'EXT:peec_extension/Resources/Public/Icons/tx_peecextension_domain_model_employee.svg';

$GLOBALS['TCA']['tx_peecextension_domain_model_employee']['ctrl']['sortby'] = 'sorting';
$GLOBALS['TCA']['tx_peecextension_domain_model_employee']['ctrl']['label_alt'] = 'lastname';
$GLOBALS['TCA']['tx_peecextension_domain_model_employee']['ctrl']['label_alt_force'] = true;
