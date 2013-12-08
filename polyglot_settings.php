<?php

$polyglot_settings['initialized'] = false;

// Default language version - used when proper language version of the text is not present or the visitor's prefered language is unknown
//$polyglot_settings['default_lang'] = 'en';
$polyglot_settings['default_lang'] = 'fr';

//You can define your own translations of language shortcuts 

$polyglot_settings['trans']['en'] = 'English';
$polyglot_settings['trans']['de'] = 'deutsch';
$polyglot_settings['trans']['nl'] = 'nederlands';
$polyglot_settings['trans']['fr'] = 'Français';

$polyglot_settings['trans']['cs'] = 'česky';
$polyglot_settings['trans']['it'] = 'italiano';
$polyglot_settings['trans']['sv'] = 'svenska';


//Which language versions you offer for the whole web - use the proper ISO codes!
//$polyglot_settings['knownlangs'] = array('en','cs','sv');
$polyglot_settings['knownlangs'] = array('fr','en','pt');

//set to 'true' if there should be shown flags instead of names of languages
$polyglot_settings['use_flags'] = true;

//list of ISO codes and their image represantations (flags).
//all flags can be found in 'polyglot_flags' directory

//$polyglot_settings['flags']['en'] = 'gb.png';
$polyglot_settings['flags']['en'] = 'us-uk.png';
$polyglot_settings['flags']['de'] = 'de.png';
$polyglot_settings['flags']['nl'] = 'nl.png';
//$polyglot_settings['flags']['fr'] = 'fr.png';
$polyglot_settings['flags']['fr'] = 'qc-fr.png';
$polyglot_settings['flags']['pt'] = 'br.png';

$polyglot_settings['flags']['cs'] = 'cz.png';
$polyglot_settings['flags']['it'] = 'it.png';
$polyglot_settings['flags']['sv'] = 'se.png';

//time format for each language
//if not set - default WP time format is used
$polyglot_settings['time_format']['en'] = 'g.i a';
$polyglot_settings['time_format']['de'] = 'G:i';
$polyglot_settings['time_format']['nl'] = 'G:i';
$polyglot_settings['time_format']['fr'] = 'G:i';
$polyglot_settings['time_format']['cs'] = 'G.i';

$polyglot_settings['date_format']['en'] = 'Y-m-d';
$polyglot_settings['date_format']['de'] = 'j. F Y';
$polyglot_settings['date_format']['nl'] = 'j F Y';
$polyglot_settings['date_format']['fr'] = 'j F Y';
$polyglot_settings['date_format']['cs'] = 'j. n. Y';


/*path to the plugin directory
don't forget trailing slash if you are changing this value
*/
//$polyglot_settings['path_to_flags'] = get_bloginfo('wpurl').'/wp-content/plugins/polyglot/polyglot_flags/';
$polyglot_settings['path_to_flags'] = plugins_url() . '/polyglot/polyglot_flags/';

//if you use WP older than 1.5 you must use this:
//$polyglot_settings['path_to_flags'] = get_bloginfo('url').'/wp-content/plugins/';


//default text that is shown when the proper language version of the post is missing and even the default language version is not there
// use $polyglot_settings['text_is_missing_message'] = '';  if you want to turn it off.
$polyglot_settings['text_is_missing_message'] = '[lang_en]Sorry, but this post is not available in English[/lang_en][lang_cs]Tento příspěvek bohužel není dostupný v češtině.[/lang_cs]';

//----------------------advanced-----------------------------------------------------------------------

//Should be printed <meta http-equiv="Content-Language" content="xx" /> where xx stands for ISO code of current language?
$polyglot_settings['print_meta'] = false;

// Name of the cookie - default:'wordpress_lang_pref'.$cookiehash
$polyglot_settings['lang_pref_cookie'] = 'wordpress_lang_pref'.COOKIEHASH;

/*
Should Polyglot attempt to dynamically change the WP locale
setting based on user's prefered language? Note, for this to work
.mo files must be renamed to match the name specified in $polyglot_settings['wplang'] array
but you don't have to rename anything in most cases as there is already list of current WP versions present.
*/
$polyglot_settings['lang_change_locale'] = TRUE;

/* 
To use permalinks for other languages set this to "true".
You probably don't have to do anything else if you have "index.php" in your permalink structure.
In some cases it doesn't work smoothly with re-writing rules specified in .htaccess file - then you have to add some rules to that file manually.
For more info check: http://www.google.com/search?hl=en&q=mod_rewrite
*/
$polyglot_settings['lang_rewrite'] = true;

/**
This should stay turned off unless you had problems with rules in your .htaccess file and you have edited them manually.
*/
$polyglot_settings['i_have_manually_edited_my_htaccess_file'] = false; //change this only if you know what you are doing!

/**
There are some helpers added (/lang/, /lang-pref/) by default to the url to help Polyglot distinguish between language code and short post slug.
These can be turned off. But don't turn them off unless you have a good reason to do that.
*/
$polyglot_settings['use_helpers_in_uri'] = true;

/**
If you want to use these helpers but you want to change them - do that here:
*/
$polyglot_settings['uri_helpers']['lang_view'] = 'lang';
$polyglot_settings['uri_helpers']['lang_pref'] = 'lang-pref';


/*
The xx from [lang_xx] will be translated according to this table to the $locale/WPLANG variable in WP. It also suggests the name of the .mo file.
Add your language or change it as you need.
*/
$polyglot_settings['wplang']['ar'] = 'ar';
$polyglot_settings['wplang']['bg'] = 'bg_BG';
$polyglot_settings['wplang']['cs'] = 'cs_CZ';
$polyglot_settings['wplang']['cy'] = 'cy';
$polyglot_settings['wplang']['da'] = 'da_DK';
$polyglot_settings['wplang']['de'] = 'de_DE';
$polyglot_settings['wplang']['el'] = 'el';
$polyglot_settings['wplang']['eo'] = 'eo';
$polyglot_settings['wplang']['es'] = 'es_ES';
$polyglot_settings['wplang']['fa'] = 'fa';
$polyglot_settings['wplang']['fi'] = 'fi_FI';
$polyglot_settings['wplang']['fr'] = 'fr_FR';//fr_BE
$polyglot_settings['wplang']['hu'] = 'hu_HU';
$polyglot_settings['wplang']['it'] = 'it_IT';
$polyglot_settings['wplang']['ja'] = 'ja_JP';
$polyglot_settings['wplang']['ko'] = 'ko';
$polyglot_settings['wplang']['nb'] = 'nb_NO';//nn_NO
$polyglot_settings['wplang']['pl'] = 'pl_PL';
$polyglot_settings['wplang']['pt'] = 'pt_BR';
$polyglot_settings['wplang']['ru'] = 'ru_RU';
$polyglot_settings['wplang']['sk'] = 'sk';
$polyglot_settings['wplang']['sq'] = 'sq';
$polyglot_settings['wplang']['sr'] = 'sr_CS';
$polyglot_settings['wplang']['sv'] = 'sv_SE';
$polyglot_settings['wplang']['zh'] = 'zh_CN';

//============================================STOP EDITING HERE! (unless you know what you are doing)=====================================

?>
