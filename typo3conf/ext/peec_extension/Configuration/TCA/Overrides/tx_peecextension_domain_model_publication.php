<?php

$GLOBALS['TCA']['tx_peecextension_domain_model_publication']['ctrl'] = [
    'title' => 'LLL:EXT:peec_extension/Resources/Private/Language/locallang_db.xlf:tx_peecextension_domain_model_publication',
    'type' => 'type',
    'label' => 'type',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'versioningWS' => true,
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'delete' => 'deleted',
    'enablecolumns' => [
        'disabled' => 'hidden',
        'starttime' => 'starttime',
        'endtime' => 'endtime',
    ],
    'searchFields' => 'referencelink,doi,title,journal,volume,number,startpage, endingpage,month,note,publisher,address,edition,isbn,booktitle,organization,series,chapter,school,howpublished',
    'iconfile' => 'EXT:peec_extension/Resources/Public/Icons/tx_peecextension_domain_model_publication.svg'
];

$GLOBALS['TCA']['tx_peecextension_domain_model_publication']['ctrl']['label_alt'] = 'title';
$GLOBALS['TCA']['tx_peecextension_domain_model_publication']['ctrl']['label_alt_force'] = true;

$GLOBALS['TCA']['tx_peecextension_domain_model_publication']['types'] = [
    '0' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, type, title, author, citationlable, journal, volume, number, startpage, endingpage, month, year, doi, referencelink, pdf, note'],
    '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, type, title, author, citationlable, volume, edition,  address, publisher, month, year, series, doi, referencelink, pdf, note, isbn'],
    '2' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, type, title, author, citationlable, booktitle, publisher, year, edition, editor, volume, series, chapter, startpage, endingpage, address, edition, month, pdf, referencelink, note'],
    '3' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, type, title, author, citationlable, organization, publisher, address, month, year, startpage, endingpage, booktitle, editor, volume, series, pdf, referencelink, note'],
    '4' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, type, title, author, citationlable, howpublished, month, year, doi, pdf, referencelink, note']
];

$GLOBALS['TCA']['tx_peecextension_domain_model_publication']['columns']['type']['config'] = [
    'type' => 'select',
    'renderType' => 'selectSingle',
    'items' => [
        ['Journal Article', 0],
        ['Book', 1],
        ['Book Chapter', 2],
        ['Conference Paper', 3],
        ['Misc', 4]
    ],
    'size' => 1,
    'maxitems' => 1,
    'eval' => ''
];
