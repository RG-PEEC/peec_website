<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PEEC.PeecExtension',
            'Peecfe',
            [
                'Employee' => 'list, show',
                'Project' => 'list, show',
                'Publication' => 'list',
                'Partner' => 'list'
            ],
            // non-cacheable actions
            [
                'Employee' => '',
                'Project' => '',
                'Publication' => '',
                'Partner' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        peecfe {
                            iconIdentifier = peec_extension-plugin-peecfe
                            title = LLL:EXT:peec_extension/Resources/Private/Language/locallang_db.xlf:tx_peec_extension_peecfe.name
                            description = LLL:EXT:peec_extension/Resources/Private/Language/locallang_db.xlf:tx_peec_extension_peecfe.description
                            tt_content_defValues {
                                CType = list
                                list_type = peecextension_peecfe
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'peec_extension-plugin-peecfe',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:peec_extension/Resources/Public/Icons/user_plugin_peecfe.svg']
			);
		
    }
);
