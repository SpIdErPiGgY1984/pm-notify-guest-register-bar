<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'PMREGBAR_CONFIG_SAVED'			=> 'PB Notificatie & Gasten registreer bar instellingen opgeslagen',
	'PMREGBAR_VERSION'				=> 'Versie',
	'PMREGBAR_ENABLEPM'				=> 'Schakel private berichten bar in',
	'PMREGBAR_ENABLEPM_EXPLAIN'		=> 'Schakel de private berichten bar in of uit',
	'PMREGBAR_ENABLEREG'			=> 'Schakel registratie bar in',
	'PMREGBAR_ENABLEREG_EXPLAIN'	=> 'Schakel de registratie bar in of uit',
	'PMREGBAR_ENABLE_TEXT'			=> 'Schakel alternatieve tekst in voor gasten registratie bar',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'	=> 'Indien ingesteld op ja vul je onderaan de alternatieve tekst in voor de gasten registreer bar',
	'PMREGBAR_TEXT_FIELD'			=> 'Alternatieve tekst veld voor gasten registreer bar',
	'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Vul de alternatieve tekst in',
	'PMREGBAR_MESSAGE'				=> 'Hallo %s, je hebt een priv&eacute; bericht',
	'PMREGBAR_WELCOME'				=> 'Welkom bij %s! Klik hier om te registreren',
));
