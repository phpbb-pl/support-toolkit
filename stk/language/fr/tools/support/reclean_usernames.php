<?php
/**
*
* @package Support Toolkit - Reclean Usernames
* @version 1.0.1
* @author Maël Soucaze (Maël Soucaze) <maelsoucaze@phpbb.com> http://mael.soucaze.com/
* @copyright (c) 2009 phpBB Group, 2009 Maël Soucaze
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'RECLEAN_USERNAMES'					=> 'Renettoyer les noms d’utilisateurs',
	'RECLEAN_USERNAMES_COMPLETE'		=> 'Tous les noms d’utilisateurs ont été renettoyés avec succès.',
	'RECLEAN_USERNAMES_CONFIRM'			=> 'Êtes-vous sûr de vouloir renettoyer tous les noms d’utilisateurs ?',
	'RECLEAN_USERNAMES_NOT_COMPLETE'	=> 'L’outil de renettoyage des noms d’utilisateurs est en cours d’exécution… Merci de ne pas interrompre ce processus.',
));