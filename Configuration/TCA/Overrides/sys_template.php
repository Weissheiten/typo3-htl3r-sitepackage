<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'htl3r_demo_sitepackage';

    /**
     * Default TypoScript for Htl3rDemoSitepackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'HTL3R Demo Sitepackage'
    );
});
