<?php
/**
*
* @package phpBB Extension - Knuffel
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
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
	// Settings
	'KNUFFEL_TITLE'						=> 'Yahtzee',
	'KNUFFEL_ENABLE'					=> 'Activer le Yahtzee:',
	'KNUFFEL_ENABLE_EXPLAIN'			=> 'Ici vous pouvez activer/désactiver le Yahtzee',
	'KNUFFEL_PAGINATION'				=> 'Mise en page:',
	'KNUFFEL_PAGINATION_EXPLAIN'		=> 'Entrez ici, combien d’entrées vous aimeriez voir dans la liste des meilleurs scores par page',
	'KNUFFEL_PAGINATION_ERROR'			=> 'Vous ne pouvez pas entrer une valeur inférieure a 3 (max 999)!',
	'KNUFFEL_TITLE_EXPLAIN'				=> 'Ici, vous pouvez supprimer toutes les listes de scores ou seulement la liste actuelle et laisser les meilleurs scores tout le temps (recommandé)',
	'KNUFFEL_DELETE'					=> 'Supprimer la liste des meilleurs scores',
	'KNUFFEL_DELETE_ATTENTION'			=> 'Après ces actions ne peuvent être refaite!!',
	'KNUFFEL_DELETE_CONFIRM'			=> 'Etes vous sure, de vouloir supprimer tous les scores?',
	'KNUFFEL_DELETE_EXPLAIN'			=> 'Ici, vous pouvez supprimer les meilleurs scores actuels. Les valeurs dans le temps restent intacts.',
	'KNUFFEL_DELETE_ALL'					=> 'Supprimer la liste de tout les meilleurs scores y compris celle des records',
	'KNUFFEL_DELETE_ALL_CONFIRM'			=> 'Etes-vous sûr de vouloir réinitialiser toutes les listes de meilleurs scores? tout les meilleurs scores seront également détruits!',
	'KNUFFEL_DELETE_ALL_EXPLAIN'		=> 'Ici, vous pouvez supprimer toutes les listes de meilleurs scores ainsi que tout les meilleurs records',
	'KNUFFEL_DELETE_BUTTON'				=> 'Supprimer',
	'KNUFFEL_DELETE_SUCCESSFULL'			=> 'Les meilleurs scores ont été supprimé avec succès',
	'KNUFFEL_HIGHSCORE_DELETE'			=> 'Supprimer les meilleurs scores',
	'KNUFFEL_SETTINGS_EXPLAIN'			=> 'Ici vous pouvez configurer les parametres basic du Yahtzee',
	'KNUFFEL_CONFIG_SUCCESS'			=> 'Les parametres ont été mis a jour avec succès',
));
