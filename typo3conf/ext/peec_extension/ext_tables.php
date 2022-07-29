<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PEEC.PeecExtension',
            'Peecfe',
            'Peecfe'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('peec_extension', 'Configuration/TypoScript', 'PEEC Extension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_employee', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_employee.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_employee');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_project', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_project.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_project');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_education', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_education.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_education');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_career', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_career.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_career');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_publication', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_publication.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_publication');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_fundingpartner', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_fundingpartner.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_fundingpartner');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_companypartner', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_companypartner.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_companypartner');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_position', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_position.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_position');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_category', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_partner', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_partner.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_partner');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_participant', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_participant.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_participant');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_peecextension_domain_model_researchpartner', 'EXT:peec_extension/Resources/Private/Language/locallang_csh_tx_peecextension_domain_model_researchpartner.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_peecextension_domain_model_researchpartner');

    }
);
