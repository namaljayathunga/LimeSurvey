<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/*
* LimeSurvey
* Copyright (C) 2007-2011 The LimeSurvey Project Team / Carsten Schmitz
* All rights reserved.
* License: GNU/GPL License v2 or later, see LICENSE.php
* LimeSurvey is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*
*/

/**
* This file contains the default settings for LimeSurvey
* Do not edit this file as it may change in future revisions of the software.
* Correct procedure to setup LimeSurvey is the following:
* - copy the corresponding parameter you want to change from this file to the config.php file (config section)
* - adjust the setting in config.php
*
* @package configuration
*/


$config = array();

// CAUTION
// This file contains the default settings for LimeSurvey
// Do not edit this file as it may change in future revisions of the software.
// Correct procedure to setup LimeSurvey is the following:
// * copy the lines corresponding to the parameter you want to change
//   from this file to the config.php file
// * edit these lines in config.php


// FILE LOCATIONS

$config['rootdir'] = getcwd(); //dirname(__FILE__); // This is the physical disk location for your limesurvey installation. Normally you don't have to touch this setting.
// If you use IIS then you MUST enter the complete rootdir e.g. : $rootDir="C:\Inetpub\wwwroot\limesurvey"!
// Some IIS installations also require to use forward slashes instead of backslashes, e.g.  $rootDir="C:/Inetpub/wwwroot/limesurvey"!
// If you use OS/2 this must be the complete rootdir with FORWARD slashes e.g.: $rootDir="c:/limesurvey";!


// Site Info
$config['sitename']           = 'LimeSurvey'; // The official name of the site (appears in the Window title)
$config['scriptname']         = 'admin.php'; // The name of the admin script

$config['defaultuser']        = 'admin'; // This is the default username when LimeSurvey is installed
$config['defaultpass']        = 'password'; // This is the default password for the default user when LimeSurvey is installed

// Styling options
$config['admintheme']         = 'Sea_Green'; // This setting specifys the directory where the admin finds it theme/css style files, e.g. setting 'default' points to /admin/styles/default
$config['adminthemeiconsize'] = 32; // This settings describes the icon size for a normal toolbar icon - default for gringegreen is 32


// If the user enters password incorrectly
$config['maxLoginAttempt']    = 3; // Lock them out after 3 attempts
$config['timeOutTime']        = 60 * 10; // Lock them out for 10 minutes.

// Site Settings
$config['printanswershonorsconditions'] = 1; // If set to 1, only relevant answers to questions can be printed by user. If set to 0, also questions not shown are printed

// Only applicable, of course, if you have chosen 'R' for $dropdowns and/or $lwcdropdowns
$config['repeatheadings']            = '25'; // The number of answers to show before repeating the headings in array (flexible) questions. Set to 0 to turn this feature off
$config['minrepeatheadings']         = 3; // The minimum number of remaining answers that are required before repeating the headings in array (flexible) questions.
$config['defaultlang']               = 'en'; // The default language to use - the available languages are the directory names in the /locale dir - for example de = German
$config['timeadjust']                = 0; // Number of hours to adjust between your webserver local time and your own local time (for datestamping responses)
$config['allowexportalldb']          = 0; // 0 will only export prefixed tables when doing a database dump. If set to 1 ALL tables in the database will be exported
$config['maxdumpdbrecords']          = 500; // The maximum number of records that would be ouputted in a go during a database backup. Reduce this number if you're getting errors while backing up the entire database.
$config['deletenonvalues']           = 1; // By default, LimeSurvey does not save responses to conditional questions that haven't been answered/shown. To have LimeSurvey save these responses change this value to 0.
$config['stringcomparizonoperators'] = 0; // By default, LimeSurvey assumes the numrical order for comparizon operators in conditions. If you need string comparizon operators, set this parameter to 1
$config['shownoanswer']              = 1; // Show 'no answer' for non mandatory questions ( 0 = no , 1 = yes , 2 = survey admin can choose )
$config['blacklistallsurveys']       = 'N'; // Blacklist all current surveys for participant once the global field is set
$config['blacklistnewsurveys']       = 'N'; // Blacklist participant for any new added survey once the global field is set
$config['blockaddingtosurveys']      = 'Y'; // Don't allow blacklisted participants to be added to new survey
$config['hideblacklisted']           = 'N'; // Don't show blacklisted participants
$config['deleteblacklisted']         = 'N'; // Delete globally blacklisted participant from the database
$config['allowunblacklist']          = 'N'; // Allow participant to unblacklist himself/herself
$config['userideditable']            = 'N'; // Allow editing of user IDs

$config['defaulttheme']              = 'fruity'; // This setting specifys the default theme used for the 'public list' of surveys
$config['customassetversionnumber']  = 1;        // Used to generate the path of tmp assets (see: LSYii_AssetManager::generatePath()  )

$config['allowedthemeuploads'] = 'gif,ico,jpg,png,css,js,map,json,eot,svg,ttf,woff,txt,md,xml,woff2,twig'; // File types allowed to be uploaded in the themes section.

$config['allowedresourcesuploads'] = '7z,aiff,asf,avi,bmp,csv,doc,docx,fla,flv,gif,gz,gzip,ico,jpeg,jpg,mid,mov,mp3,mp4,mpc,mpeg,mpg,ods,odt,pdf,png,ppt,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,swf,sxc,sxw,tar,tgz,tif,tiff,txt,vsd,wav,wma,wmv,xls,xlsx,xml,zip,css,js'; // File types allowed to be uploaded in the resources sections, and with the HTML Editor

$config['memory_limit'] = '256'; // This sets how much memory LimeSurvey can access in megabytes. 256 MB is the minimum recommended - if you are using PDF functions up to 512 MB may be needed

$config['showpopups']         = 1; // Show popup messages if mandatory or conditional questions have not been answered correctly.
// 1=Show popup message, 0=Show message on page instead.

$config['maxemails']          = 50; // The maximum number of emails to send in one go (this is to prevent your mail server or script from timeouting when sending mass mail)

// Experimental parameters, only change if you know what you're doing
//
// filterout_incomplete_answers
//  * default behaviour of LimeS regarding answer records with no submitdate
//  * can be overwritten by module parameters choose one of the following://
//		* filter: 		Show only complete answers
//		* show: 		Show both complete and incomplete answers
//		* incomplete: 	Show only incomplete answers
$config['filterout_incomplete_answers'] = 'show';

// strip_query_from_referer_url (default is false)
//  * default behaviour is to record the full referer url when requested
//  * set to true in order to remove the parameter part of the referer url
$config['strip_query_from_referer_url'] = false;

// defaulthtmleditormode
//  * sets the default mode for htmleditor: none, inline, popup
//    users without specific preference inherit this setup
//  * inline: inline replacement of fields by an HTML editor:
//     --> slow but convenient and user friendly
//  * popup: adds an icon that runs a popup with and html editor
//     --> faster, but html code is displayed on the form
//  * none: no html editor
$config['defaulthtmleditormode'] = 'inline';

// surveyPreview_require_Auth
// Enforce Authentication to the LS system before beeing able to preview a survey (testing a non active survey)
// Default is true
$config['surveyPreview_require_Auth'] = true;


// use_one_time_passwords
// Activate One time passwords
// The user can call the limesurvey login at /limesurvey/admin and pass username and
// a one time password which was previously written into the users table (column one_time_pw) by
// an external application.
// This setting has to be turned on to enable the usage of one time passwords (default = off).
$config['use_one_time_passwords'] = false;


// display_user_password_in_html
// Option to tell LS to display the automatically generated user password in the html GUI or not
$config['display_user_password_in_html'] = false;


// display_user_password_in_email
// Option to tell LS to display the automatically generated user password in the welcome email or not
$config['display_user_password_in_email'] = true;


// If no auth plugin is set as default, LS shows this auth method in login form
// Authdb is not set as default from Authdb plugin.
// If value of this variable is not a active plugin, 'Authdb' is used
$config['default_displayed_auth_method'] = 'Authdb';

// auth_webserver
// Enable delegation of authentication to the webserver.
// If you set this parameter to true and set your webserver to authenticate
// users accessing the /admin subdirectory, then the username returned by
// the webserver will be trusted by LimeSurvey and used for authentication
// unless a username mapping is used see auth_webserver_user_map below
//
// The user still needs to be defined in the limesurvey database in order to
// login and get his permissions (unless auth_webserver_autocreate_user is set to true)
$config['auth_webserver'] = false;

// auth_webserver_user_map
// Enable username mapping
// This parameter is an array mapping username from the webserver to username
// defined in LimeSurvey
// Can be usefull if you have no way to add an 'admin' user to the database
// used by the webserver, then you could map your true loginame to admin with
// $config['auth_webserver_user_map'] = array ('mylogin' => 'admin');
$config['auth_webserver_user_map'] = array();
//
// auth_webserver_autocreate_user
// Enable this if you want to automatically create users authenticated by the
// webserver in LS
// Default is false (commenting this options also means false)
$config['auth_webserver_autocreate_user'] = false;

// auth_webserver_autocreate_profile
// This is an array describing the default profile to use for auto-created users
// This profile will be the same for all users (unless you define the optionnal
// 'hook_get_auth_webserver_profile' function).
//
$config['auth_webserver_autocreate_profile'] = Array(
    'full_name' => 'autouser',
    'email' => 'autouser@test.test',
    'lang' => 'en',
    'htmleditormode' => $config['defaulthtmleditormode']
);

$config['auth_webserver_autocreate_permissions'] = Array(
    'surveys' => array('create'=>true, 'read'=>true, 'update'=>true, 'delete'=>true)
);

// hook_get_auth_webserver_profile
// The optionnal 'hook_get_auth_webserver_profile' function is for advanced user usage only.
// It is used to customize the profile of the imported user
// If set, the this function will overwrite the auth_webserver_autocreate_profile
// defined above by its return value
//
// You can use any external DB in order to fill the profile for the user_name passed as the first parameter
// A dummy example for the 'hook_get_auth_webserver_profile' function is given below:
//
//function hook_get_auth_webserver_profile($user_name)
//{
//	return Array(
//			'full_name' => '$user_name',
//			'email' => "$user_name@localdomain.org",
//			'lang' => 'en',
//			'htmleditormode' => 'inline');
//}


// filterxsshtml
// Enables filtering of suspicious html tags in survey, group, questions
// and answer texts in the administration interface
// Only set this to false if you absolutely trust the users
// you created for the administration of  LimeSurvey and if you want to
// allow these users to be able to use Javascript etc. .
$config['filterxsshtml'] = true;

// usercontrolSameGroupPolicy
// If this option is set to true, then limesurvey operators will only 'see'
// users that belong to at least one of their groups
// Otherwise they can see all operators defines in LimeSurvey
$config['usercontrolSameGroupPolicy'] = true;


// demoMode
// If this option is set to true, then LimeSurvey will go into demo mode.
// Demo mode disables the following things:
//
// * Disables changing of the admin user's details and password
// * Disables uploading files on the theme Editor
// * Disables sending email invitations and reminders
// * Disables doing a database dump
// * Disables the ability to save the following global settings: Site name, Default language, Default Htmleditor Mode, XSS filter

$config['demoMode'] = false;

/**
* Prefill the login mask using the parameters 'defaultuser' and  'default pass'. This works only if demo mode (demoMode) is activated.
* Also a notice will be shown that the user knows that he can just login by using the Login button.
*
* @var $config['demoModePrefill']  boolan  If set to true prefill the login mask
*/
$config['demoModePrefill'] = false;


/**
* column_style
* Because columns are tricky things, in terms of balancing visual
* layout against semantic markup. The choice has been left to the
* system administrator or designer. (Who ever cares most.)
*
* $column_style defines how columns are rendered for survey answers.
* There are four possible options:
*     'css'   using one of the various CSS only methods for creating
columns (see theme style sheet for details).
*     'ul'    using multiple floated unordered lists. (DEFAULT)
*     'table' using conventional tables based layout.
*     NULL    blocks the use of columns
*/
$config['column_style'] = 'ul';

/**
* hide_groupdescr_allinone.
* This parameter 'hide_groupdescr_allinone' can be set to control
* if the group description should be hidden if the group description of a group of questions
* with all questions hidden by conditions is displayed in all-in-one survey mode.
* hide_groupdescr_allinone can be set to true or false (default: true)
*/
$config['hide_groupdescr_allinone'] = true;


/**
* use_firebug_lite
* Use FireBug Lite for JavaScript and theme development and testing.
* This allows you to use all the features of Firebug in any browser.
* see http://getfirebug.com/lite.html for more info.
*/
$config['use_firebug_lite'] = false;

/*
* showaggregateddata
* When activated there are additional values like arithmetic mean and standard deviation at statistics.
* This only affects question types "A" (5 point array) and "5" (5 point choice).
* Furthermore data is aggregated to get a faster overview.
*/
$config['showaggregateddata'] = 1;


/**
* When this settings is true/1 (default) then the standard themes that are delivered with the
* LimeSurvey installation package are read-only. If you want to modify a theme just copy it first.
* This prevents upgrade problems later because if you modify your standard themes you could accidenitally
* overwrite these on a LimSurvey upgrade. Only set this to 0 if you know what you are doing.
*/
$config['standard_themes_readonly'] = true;


/**
* When this settings is true/1 (default = false/0) then the printable survey option will show a reference
* to the "lime_survey_12345" table which stores the survey answers.
* It will show a code like "12345X22X333name":
* 12345 = surveyID
* 22 = groupID
* 333 = questionID
* name = answer code (only shown for certain question types
*
* This code will be shown in front of each question and in front of each answer option at the printable survey.
* It can be used as a data analysis code book for querying data from the main response table.
*/
$config['showsgqacode'] = false;

/**
* When this settings is true/1 (default = false/0) then the printable survey option will show
* the raw relevance equation below the general fill-out instructions in case the question has conditions.
*/
$config['showrelevance'] = false;

/**
* To prevent brute force against forgotten password functionality, there is a random delay
* that prevent attacker from knowing whether username and email address are valid or not.
*/
$config['minforgottenpasswordemaildelay'] = 500000;
$config['maxforgottenpasswordemaildelay'] = 1500000;

/**
*  PDF Export Settings
*  This feature configures PDF export for Export Answers
*  PDF core fonts are not included in PDF: make ligther pdf
*  See http://www.tcpdf.org/fonts.php to have the list of PDF core fonts
*/

$config['pdfdefaultfont'] = 'auto'; //Default font for the pdf Export
/**
*  $alternatepdffontfile - array of the font file name used to created pdf in statistics in specific langage - this font are included in tcpdf core
*  Only used if $pdfdefaultfont is set to auto or set to a PDF core fonts
*  Some langage are not tested : need translation for Yes,No and Gender : ckb, swh
*/
$config['alternatepdffontfile'] = array(
    'ar'=>'dejavusans', // 'dejavusans' work but maybe more characters in aealarabiya or almohanad: but then need a dynamic font size too
    'be'=>'dejavusans',
    'bg'=>'dejavusans',
    'zh-Hans'=>'cid0cs',
    'zh-Hant-HK'=>'cid0ct',
    'zh-Hant-TW'=>'cid0ct',
    'cs'=>'dejavusans',
    'cs-informal'=>'dejavusans', // This one not really tested: no translation for Yes/No or Gender
    'el'=>'dejavusans',
    'he'=>'freesans',
    'hi'=>'dejavusans',
    'hr'=>'dejavusans',
    'hu'=>'dejavusans',
    'ja'=>'cid0jp',
    'ko'=>'cid0kr',
    'lv'=>'dejavusans',
    'lt'=>'dejavusans',
    'mk'=>'dejavusans',
    'mt'=>'dejavusans',
    'fa'=>'dejavusans',
    'pl'=>'dejavusans',
    'pa'=>'freesans',
    'ro'=>'dejavusans',
    'ru'=>'dejavusans',
    'sr'=>'dejavusans',
);
/**
*  $notsupportlanguages - array of language where no font was found for PDF
*  Seems not used actually
*/
$config['notsupportlanguages'] = array(
    'am', // Amharic
    'si', // Sinhala
    'th', // Thai
    );
$config['pdffontsize']    = 9; //Fontsize for normal text; Surveytitle is +4; grouptitle is +2
$config['pdforientation'] = 'P'; // Set L for Landscape or P for portrait format
$config['pdfshowheader'] = 'N'; // Show header in pdf answer export
$config['pdflogofile'] = 'logo_pdf.png'; // File name of logo for single answer export. Path is theme path, i.e. theme/default/logo_pdf.png.
                                            // If not found, resulting pdf doesn't have header. A large image implies slower pdf generation.
$config['pdflogowidth'] = '50'; // Logo width
$config['pdfheadertitle'] = ''; // Header title (bold font). If this config param is empty and header is enabled, site name is used
$config['pdfheaderstring'] = ''; // Header string (under title). If this config param is empty and header is enabled, survey name is used
$config['bPdfQuestionFill'] = '1'; // Background in questions should be painted (1) or transparent (0)
$config['bPdfQuestionBold'] = '0'; // Questions in bold (1) or normal (0)
$config['bPdfQuestionBorder'] = '1'; // Border in questions. Accepts 0:no border, 1:border
$config['bPdfResponseBorder'] = '1'; // Border in responses. Accepts 0:no border, 1:border

// QueXML-PDF: If set to true, the printable_help attribute will be visible on the exported PDF survey
// If used, the appearance (font size, justification, etc.) may be adjusted by editing td.questionHelpBefore and $helpBeforeBorderBottom of quexml.
$config['quexmlshowprintablehelp'] = false;

$config['minlengthshortimplode'] = 20; // Min length required to use short_implode instead of standard implode
$config['maxstringlengthshortimplode'] = 100; // short_implode: Max length of returned string

/**
*  Statistics chart settings
*  Different languages need different fonts to properly create charts - this is what the following settings are for
*/

/**
*  $chartfontfile - set the font file name used to created the charts in statistics - this font must reside in <limesurvey root folder>/fonts
*  Set this to specific font-file (for example 'DejaVuSans.ttf') or set it to 'auto' and LimeSurvey tried to pick the best font depending on your survey base language
*/
$config['chartfontfile'] = 'auto';
/**
*  $alternatechartfontfile - array of the font file name used to created the charts in statistics in specific langage - this font must reside in <limesurvey root folder>/fonts
*  Only used if $chartfontfile is set to auto. If font file doesn't exist in <limesurvey root folder>/fonts, an alert is sent to admin
*/
$config['alternatechartfontfile'] = array(
    'hi'=>'FreeSans.ttf',
    'ja'=> 'migmix-1p-regular.ttf',
    'ko'=>'UnBatang.ttf',
    'si'=>'FreeSans.ttf',
    'th'=>'TlwgTypist.ttf',
    'zh-Hans'=>'fireflysung.ttf',
    'zh-Hant-HK'=>'fireflysung.ttf',
    'zh-Hant-TW'=>'fireflysung.ttf',
);

/**
*  $chartfontsize - set the size of the font to created the charts in statistics
*/
$config['chartfontsize'] = 10;


/**
* $updatecheckperiod - sets how often LimeSurvey checks for updates - the number sets the number of days between updates.
* Set to 0 to disable any update checks
* Recommended: 7
*/
$config['updatecheckperiod'] = 7;


/**
* @var $showxquestions string allows you to control whether or not
* {THEREAREXQUESTIONS} is displayed (if it is included in a theme)
*	hide = always hide {THEREAREXQUESTIONS}
*	show = always show {THEREAREXQUESTIONS}
*	choose = allow survey admins to choose
*/
$config['showxquestions'] = 'choose';


/**
* @var $showgroupinfo string allows you to control whether or not
* {GROUPNAME} and/or {GROUPDESCRIPTION} are displayed (if they are
* included in a theme)
*	none = always hide both title and description
*	name = always {GROUPNAME} only
*	description = always show {GROUPDESCRIPTION} only
*	both = always show both {GROUPNAME} and {GROUPDESCRIPTION}
*	choose = allow survey admins to choose
*/
$config['showgroupinfo'] = 'choose';


/**
* @var $showqnumcode string allows you to control whether or not
* {QUESTION_NUMBER} and/or {QUESTION_CODE} are displayed (if they
* are included in a theme)
*	none = always hide both {QUESTION_NUMBER} and {QUESTION_CODE}
*	code = always show {QUESTION_CODE} only
*	number = always show {QUESTION_NUMBER} only
*	both = always show both {QUESTION_NUMBER} and {QUESTION_CODE}
*	choose = allow survey admins to choose
*/
$config['showqnumcode'] = 'choose';


/**
* @var $force_ssl string - forces LimeSurvey to run through HTTPS or to block HTTPS
* 	'on' =	force SSL/HTTPS to be on (This will cause LimeSurvey
*		to fail in SSL is turned off)
*	'off' =	block SSL/HTTPS (this prevents LimeSurvey from
*		running through SSL)
*	'' =	do nothing (default)
*
* DO NOT turn on secure unless you are sure SSL/HTTPS is working and
* that you have a current, working, valid certificate. If you are
* unsure whether your server has a valid certificate, just add 's'
* to the http part of your normal LimeSurvey URL.
*	e.g. https://your.domain.org/limesurvey/admin/admin.php
* If LimeSurvey comes up as normal, then everything is fine. If you
* get a page not found error or permission denied error then
*/
$config['force_ssl'] = 'neither'; // DO not turn on unless you are sure your server supports SSL/HTTPS


/**
* @var $ssl_emergency_override boolean forces SSL off
* if You've turned HTTPS/SSL on in the global settings but your
* server doesn't have HTTPS enabled, the only way to turn it off is
* by changing a value in the database directly. This allows you to
* force HTTPS off while you change the global settings for Force Secure.
*
*     false = do nothing;
*     true = override $force_ssl=on;
*
* This should always be false except in emergencies where you change
* it to true until you fix the problem.
*/
$config['ssl_emergency_override'] = false;

/**
* Sets if any part of LimeSUrvey may be embedded in an iframe
* Valid values are allow, sameorigin
* Default: allow
* Recommended: sameorigin
* Using 'deny' is currently not supported as it will disable the theme editor preview and probably file upload.
*/
$config['x_frame_options'] = 'allow';


// Get your IP Info DB key from http://ipinfodb.com/
// If you have the API key, you can use it to get the approximate location of the user initially.

$config['ipInfoDbAPIKey'] = '';

// Google Maps API key. http://code.google.com/apis/maps/signup.html
// To have questions that require google Maps!

$config['googleMapsAPIKey'] = '';

/**
* GeoNames username for API. http://www.geonames.org/export/web-services.html
* default limesurvey username is limited to 2000 credits/hour and 30 000 crdits/day see : http://www.geonames.org/export/ Terms and conditions
*/
$config['GeoNamesUsername'] = 'limesurvey';


// Google Translate API key:  https://code.google.com/apis/language/translate/v2/getting_started.html
$googletranslateapikey = '';

/**
 * characterset (string)
 * Default character set for file import/export
 */
$config['characterset'] = 'auto';

/**
* This variable defines the total space available to the file upload question across all surveys. If set to 0 then no limit applies.
*
* @var $config['iFileUploadTotalSpaceMB']  Integer number to determine the available space in MB - Default: 0
*
*/
$config['iFileUploadTotalSpaceMB'] = 0;


// defines if the CKeditor toolbar should be opened by default
$config['ckeditexpandtoolbar'] = true;

/**
* This variable defines the languages available in LimeSurvey (front- and backend)
* and should contain a space-separated list of language codes. If empty then no restrictions
* are set and all languages are available
*
* @var string
*/
$config['restrictToLanguages'] = '';

/**
* This parameter enables/disables the RPC interface
* Set to 'json' (for JSON-RPC) )or 'xml' (for XML-RPC) to enable and 'off' to disable
* @var string
*/
$config['RPCInterface'] = 'off';

/**
* This parameter sets the default session expiration time in seconds
* Default is 2 hours
* @var integer
*/
$config['iSessionExpirationTime'] = 7200;

/**
* This parameter can be used to set some question not selectable in LimeReplacementFiels
* Default is an empty array, leave it for new question modules system
* @var array
*/
$config['InsertansUnsupportedtypes'] = array();

// Proxy settings for ComfortUpdate
/**
* Set these if you are behind a proxy and want to update LS using ComfortUpdate
*
* $proxy_host_name Your proxy server name (string)
* $proxy_host_port Your proxy server port (int)
*/
$config['proxy_host_name'] = '';
$config['proxy_host_port'] = 80;

/** Forced superadmin rights, users in this array can not have superadmin total right disable.
 * Default use the user created at the installation.
 * @var integer[]
 */
$config['forcedsuperadmin'] = array(1);

// === Advanced Setup
//The following url and dir locations do not need to be modified unless you have a non-standard
//LimeSurvey installation. Do not change unless you know what you are doing.

if (!isset($argv[0]) && Yii::app() != null) {
    $config['publicurl'] = Yii::app()->baseUrl.'/'; // The public website location (url) of the public survey script
} else {
    $config['publicurl'] = '/';
}

$config['assets'] = 'assets/';

// URL defintions
$config['homeurl']                = $config['publicurl'].'admin'; // The website location (url) of the admin scripts
$config['tempurl']                = $config['publicurl'].'tmp';
$config['imageurl']               = $config['publicurl'].'assets/images'; // Location of button bar files for admin script
$config['uploadurl']              = $config['publicurl'].'upload';
$config['standardthemerooturl']   = $config['publicurl'].'themes/survey'; // Location of the standard themes
$config['adminscripts']           = $config['publicurl'].'assets/scripts/admin/';
$config['generalscripts']         = $config['publicurl'].'assets/scripts/';
$config['third_party']            = $config['publicurl'].'third_party/';
$config['styleurl']               = $config['publicurl'].'themes/admin/';
$config['publicstyle']            = $config['publicurl'].$config['assets'].'styles-public/';
$config['publicstyleurl']         = $config['publicstyle'];
$config['sCKEditorURL']           = $config['third_party'].'ckeditor';
$config['userthemerooturl']       = $config['uploadurl'].'/themes/survey'; // Location of the user themes
$config['adminimageurl']          = $config['styleurl'].$config['admintheme'].'/images/'; // Location of button bar files for admin script
$config['applicationurl']         = $config['publicurl'].'application/';
$config['extensionsurl']          = $config['applicationurl'].'extensions/';
$config['adminstyleurl']          = $config['styleurl'].$config['admintheme'].'/'; // Location of button bar files for admin script

// Dir
$config['publicdir']                = $config['rootdir']; // The directory path of the public scripts
$config['homedir']                  = $config['rootdir']; // The directory path of the admin scripts
$config['tempdir']                  = $config['rootdir'].DIRECTORY_SEPARATOR."tmp"; // The directory path where LimeSurvey can store temporary files
$config['imagedir']                 = $config['rootdir'].DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."images"; // The directory path of the image directory
$config['uploaddir']                = $config['rootdir'].DIRECTORY_SEPARATOR."upload";
$config['standardthemerootdir']     = $config['rootdir'].DIRECTORY_SEPARATOR."themes".DIRECTORY_SEPARATOR."survey"; // The directory path of the standard themes
$config['publicstylepath']          = $config['rootdir'].DIRECTORY_SEPARATOR.$config['publicstyle'];
$config['corequestionthemedir']     = "themes".DIRECTORY_SEPARATOR."question";
$config['corequestionthemerootdir'] = $config['rootdir'].DIRECTORY_SEPARATOR.$config['corequestionthemedir']; // The directory containing the core's question themes.
$config['styledir']                 = $config['rootdir'].DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.'admin';
$config['questiontypedir']          = $config['rootdir'].DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR.'extensions'.DIRECTORY_SEPARATOR.'questionTypes';
$config['userthemerootdir']         = $config['uploaddir'].DIRECTORY_SEPARATOR."themes".DIRECTORY_SEPARATOR."survey"; // The directory path of the user themes
$config['userquestionthemedir']     = "themes".DIRECTORY_SEPARATOR."question"; // The directory containing the user's question themes.
$config['userquestionthemerootdir'] = $config['uploaddir'].DIRECTORY_SEPARATOR.$config['userquestionthemedir']; // The directory containing the user's question themes.


// Use alias notation, we should move to this format everywhere.
$config['plugindir']               = 'webroot.plugins';

// (javascript) Fix automatically the value entered in numeric question type : 1: remove all non numeric caracters; 0 : leave all caracters
$config['bFixNumAuto']             = 1;
// (javascript) Send real value entered when using Numeric question type in Expression Manager : 0 : {NUMERIC} with bad caracters send '', 1 : {NUMERIC} send all caracters entered
$config['bNumRealValue'] = 0;

// Home page default Settings
$config['show_logo'] = 'show';
$config['show_last_survey_and_question'] = 'show';
$config['show_survey_list_search'] = 'show';
$config['boxes_by_row'] = '3';
$config['boxes_offset'] = '3';
$config['boxes_in_container'] = 'yes';

// Bounce settings
$config['bounceaccounthost'] = '';
$config['bounceaccounttype'] = 'off';
$config['bounceencryption'] = 'off';
$config['bounceaccountuser'] = '';

// Question selector
$config['defaultquestionselectormode'] = 'default';

// theme editor mode
$config['defaultthemeteeditormode'] = 'default';

// Side Menu behaviout
$config['sideMenuBehaviour'] = 'adaptive';

// Hide update key
$config['hide_update_key'] = false;



// When this parameter is true, the configuration of the XML file will be used instead of the database to display the themes (default behavior in 2.50+).
// This is useful when developing a theme, so changes to XML files are immediately applied without the need to uninstall and reinstall the theme.
$config['force_xmlsettings_for_survey_rendering'] = false;

return $config;
//settings deleted
