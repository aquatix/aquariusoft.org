<?php
/*
 * $Id$
 * Config for aquariusoft.org web site
 */

/*
 * set the language to be used by the framework
 * you can choose between `en' for English and `nl' for Dutch
 */
$skel['language'] = 'en';
$skel['multilanguage'] = false;

/* Enable or disable Qik's debug mode */
$skel['debugmode'] = false;

/* The title of the site, shown in the browser's titlebar */
$skel['sitetitle'] = 'aquariusoft.org';
$skel['siteuri'] = 'aquariusoft.org';
$skel['searchform'] = true;

/* Additional information to be shown when a user gets a 'page not found' */
/*
$skel['404_message'] = '<p>If you are looking for the overload feedreader, please <a href="https://overload.aquariusoft.org">look at overloads new address</a></p>';
$skel['404_message'] .= '<p><em>The gallery will be up soon again</em>; as fast as the old server arrives here and the files have been copied.</p>';
*/
//$skel['404_message'] .= '<p>Also, the bugtracker, gallery, forum and webmail and the weblog dammIT will be online again soon.</p>';
$skel['404_message'] = '<p>If you are looking for the overload feedreader, please note <a href="page/html/overload">it has been discontinued</a>. It might come back -- rewritten in Python/Django for example -- but not soon.</p>';
$skel['404_message'] .= '<p>The Windows section is gone, as the applications were unmaintained and quite antique.</p>';
$skel['404_message'] .= '<p>Also, the forum has been discontinued because of disuse.</p>';
$skel['404_message'] .= '<p>If you notice something missing, don\'t hesitate to <a href="page/main/contact/">contact me</a>.</p>';

/* Set max thumbnail size [optional, defaults to 80px] */
$skel['thumbsize'] = 100;

/* Set usedb to false for using flat files [only supported mechanism at the moment] */
$skel['usedb'] = false;
$skel['dbhost'] = '';
$skel['dbname'] = '';
$skel['dbuser'] = '';
$skel['dbpass'] = '';

$skel['logfile'] = '/var/log/qik/aquariusoftorg.log';
$skel['logpass'] = 'hallo666';

/* the text to be displayed in the footer */
$skel['copyright'] = '&copy; 1999-2012 webmaster (at) aquariusoft.org';

?>
