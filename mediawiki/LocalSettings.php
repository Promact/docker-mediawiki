<?php
if ( !defined( 'MEDIAWIKI' ) ) {
        exit;
}
$wgSitename = "zodiac";
$wgMetaNamespace = "Zodiac";
$wgScriptPath = "/w";
$wgArticlePath = "/w/$1";
$wgScriptExtension = ".php";
$wgServer = "http://180.211.100.149";
$wgStylePath = "$wgScriptPath/skins";
$wgResourceBasePath = $wgScriptPath;
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";
$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO
$wgEmergencyContact = "apache@180.211.100.149";
$wgPasswordSender = "apache@180.211.100.149";
$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;
$wgDBtype = "postgres";
$wgDBserver = "localhost";
$wgDBname = "mediawiki2";
$wgDBuser = "user3";
$wgDBpassword = "welcome@123";
$wgDBport = "5432";
$wgDBmwschema = "mediawiki";
$wgMemCachedServers = array();
$wgEnableUploads = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgUseInstantCommons = false;
$wgShellLocale = "en_US.utf8";
$wgLanguageCode = "en";
$wgSecretKey = "377d5e6f765e6bd341aba06081bd093dead2a0d84c3146f01e7087f5ad0bcbf2";
$wgUpgradeKey = "c7b1d8fe79f8f945";
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
$wgDiff3 = "/usr/bin/diff3";
$wgDefaultSkin = "vector";
wfLoadSkin( 'CologneBlue' );
wfLoadSkin( 'Modern' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );
$wgEnableUploads  = true;
$wgGenerateThumbnailOnParse = false;
$wgEnableAPI = true;
require_once("$IP/extensions/Collection/Collection.php");
require_once("$IP/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php");
require_once("$IP/extensions/VisualEditor/VisualEditor.php");
?>