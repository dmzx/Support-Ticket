<?php
/**
*
* @package phpBB Extension - Knuffel
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'KNUFFEL_EXT_VERSION'		=> 'Version',
	'KNUFFEL_DISABLE_MESSAGE'	=> 'Désolé, le jeu Yahtzee est désactivée actuellement!',
	'KNUFFEL_NO_HIGHSCORES'		=> 'Il n’y a actuellement aucun score',
	'KNUFFEL_PLAYING'			=> 'Jouer au Yahtzee',
	'KNUFFEL_PLAYERS'			=> 'Joueur sur le Yahtzee %1$s',
	'KNUFFEL_CHEAT'				=> '<strong>Erreur!</strong> Vous pouvez envoyer votre record qu’une seule fois',
	'KNUFFEL_PLAY'				=> 'Jouer au Yahtzee',
	'KNUFFEL_LINKS'				=> 'Lien du Yahtzee',
	'KNUFFEL_BACK_INDEX'		=> 'Retourner a l’index',
	'KNUFFEL_HIGHSCORETIME'		=> 'Score atteint',
	'KNUFFEL_NO_HIGHSCORETIME'	=> 'Aucun temps de score',
	'KNUFFEL_HIGHSCORE'			=> 'Voir les scores',
	'KNUFFEL_RANK'				=> 'Plus haut score',
	'KNUFFEL_USERGUIDE'			=> 'Guide du jeu',
	'KNUFFEL'					=> 'Yahtzee',
	'KNUFFEL_SCOREBOARD'		=> 'Points',
	'KNUFFEL_ACTUAL_RESULT'		=> 'Points atteints:',
	'KNUFFEL_PLAY_AGAIN'		=> 'Rejouer une autre partie.',
	'KNUFFEL_POSITION'			=> 'Rank',
	'KNUFFEL_PLAYED'			=> 'Joués',
	'KNUFFEL_AVERAGE'			=> 'Moyenne',
	'KNUFFEL_HIGHSCORE_NAME'	=> 'Pseudo',
	'KNUFFEL_ALLTIME'			=> 'Scores',
	'KNUFFEL_SCORE'				=> 'Yahtzee Score',

	// Dice
	'DICE'						=> 'Lancés de dés',
	'TOP_3'						=> 'TOP 3',
	'ONE'						=> 'Un',
	'TWO'						=> 'Deux',
	'THREE'						=> 'Trois',
	'FOUR'						=> 'Quatre',
	'FIVE'						=> 'Cinq',
	'SIX'				 		=> 'Six',
	'TOAK'						=> 'Brelan',
	'FOAK'						=> 'Carré',
	'FH'							=> 'Full',
	'SMALL'						=> 'Petite Suite',
	'LARGE'						=> 'Grande Suite',
	'CHANCE'						=> 'Chance',
	'SUM1'						=> 'Score 1',
	'BONUS'						=> '<b>Bonus</b> (A partir de 63 ou plus)<b>:</b>',
	'SUMTOP'						=> 'Total score:',
	'SUM2'						=> 'Score 2:',
	'UPPERSUM'					=> 'Total score:',
	'SUM'				 		=> 'Total:',
	'COLUMNSUM'					=> 'Score par Colonne:',
	'FINALSUM'					=> 'Score final:',
	'RESULT'						=> 'Resultat',

	// Buttons
	'KNU_BUTTON_ROLL'			=> 'Premier Lancé',
	'KNU_BUTTON_RESET_GAME'		=> 'Redémarrez',
	'KNU_BUTTON_UNDO'			=> 'Annuler la dernière entrée',
	'KNU_BUTTON_HIGHSCORE'		=> 'Enregistrer le score',
	'KNU_TEXTAREA'				=> 'Bienvenue au Yahtzee! C’est votre premier lancer.',

	// Sort options
	'SORT_ALLTIME'				=> 'Scores',
	'SORT_ASC'					=> 'Montant',
	'SORT_AVARAGE'				=> 'Moyenne',
	'SORT_DATE'					=> 'Date',
	'SORT_DESC'					=> 'Descendant',
	'SORT_DIRECTION'			=> 'Direction de trie',
	'SORT_KEYS'					=> 'Joué par ',
	'SORT_NAME'					=> 'Pseudo',
	'SORT_POINTS'				=> 'Points',
	'SORT_PLAYED'				=> 'Joués',

	// UPS
	'KNUFFEL_UPS_PLAY'			=> 'Joue au Yahtzee avec %1$s',
	'KNUFFEL_UPS_JACKPOT_SCORE'	=> 'Yahtzee Jackpot',
	'KNUFFEL_UPS_NO_POINTS'		=> 'Vous n’avez pas assez %1$s pour jouer au Yahtzee!',
	'KNUFFEL_UPS_INFO'			=> '<strong>Informations sur les couts Yahtzee et ce que vous gagnez:</strong>',
	'KNUFFEL_UPS_COST'			=> 'Coût du jeu:',
	'KNUFFEL_UPS_JACKPOT'		=> 'Jackpot actuel: %1$s %2$s',
	'KNUFFEL_UPS_BASE_JACKPOT'	=> 'Jackpot basic: %1$s %2$s',
	'KNUFFEL_UPS_GIVE_JACKPOT'	=> 'Paiement du jackpot, Si vous atteignez au moins: %1$s de points Yahtzee',
	'KNUFFEL_UPS_USERGUIDE'		=> 'Detail des informations, Vous trouverez dans le ',
	'KNUFFEL_UPS_NO_PAYOUT'		=> 'Désolé, les points atteints ne sont pas suffisants pour ramasser le jackpot.',
	'KNUFFEL_UPS_PAYOUT'		=> 'Félicitations! Vous avez gagné le jackpot de %1$s %2$s.<br/>Le jackpot sera transféré sur votre compte.',

	// Knuffel Userguide
	'KNU_USERGUIDE'				=> 'Guide du membre',
	'KNU_USERGUIDE_UPS_1'		=> 'Yahtzee et %1$s',
	'KNU_USERGUIDE_UPS_2'		=> 'L’administrateur définie les couts pour jouer au Yahtzee.<br/><br/>
									<ul>
									<li><strong>Couts par jeu</strong> - Cette valeur sera soustraite de votre %1$s.
									Si vous n’avez pas assez %1$s, vous pouvez jouer au Yahtzee.</li>
									<li><strong>Jackpot actuel</strong> - Ceci est le jackpot, vous pouvez gagner, si vous avez atteint assez de points.
									Votre %1$s couts pour jouer au Yahtzee ira dans le Jackpot et le jackpot augmentera jusqu’a ce que quelqu’un atteigne le nombre minimum de points pour l’obtenir.</li>
									<li><strong>Jackpot basic</strong> - Cette valeur sera fixée, après un paiement du jackpot.</li>
									<li><strong>Gain du Jackpot</strong> -
									Le Jackpot ne sera payé que , si un utilisateur augmente cette valeur.
									L’administrateur définit cette valeur. Si vous pensez que c’est trop élevée, demandez lui.
									L’idée principale est a l’origine pour empécher les gens de jouer juste sans aucun sens et gain %1$s pour ça.
									En outre, le plus haut score est presque incassable, si il est vraiment élevé.
									Par conséquent, vous devez encore gagner quelques %1$s sans avoir les meilleurs scores a l’esprit.</li>
									</ul>',

	'KNU_USERGUIDE_GENERAL_1'	=> 'Introduction',
	'KNU_USERGUIDE_GENERAL_2'	=> 'Yahtzee (Yahtzee-Clone, également connu sous le nom de Yam’s ou dicepoker),<br/># Le but est, pour chaque joueur, de remplir une grille en totalisant un maximum de points. Pour remplir la grille il faut lancer des dés et réaliser des figures.<br/># a chaque tour le joueur dispose de trois lancés de cinq dés. a l’issu des deux premiers lancés il peut:<br/># garder ses 5 dés et remplir une case de sa grille,<br/># écarter une partie des dés et relancer les autres.<br/># a l’issu du troisième lancé il doit remplir une case de sa grille. Si le joueur choisit une case alors qu’il n’a pas fait la figure demandé il ne marque pas de points et ne pourra pas retenter la figure plus tard.',

	'KNU_USERGUIDE_POINTS_1'	=> 'Points',
	'KNU_USERGUIDE_POINTS_2'	=> '<ul>
									<li><strong>Un - Six</strong> - On retire simplement la somme de tous les dés qui portent le nombre approprié.</li>
									<li><strong>Trois / Quatre d’un même genre</strong> - Détruisez la somme de tous les dés - Valide si vous faite rouler un nombre au moins 3 ou 4 fois.</li>
									<li><strong>Full</strong> - Toujours 25 points - Valide si vous lancez trois dés avec un nombre et deux dés avec un autre nombre.</li>
									<li><strong>Grande Suite / Suite</strong> - 30 / 40 points - Valable si vous avez au moins 4/5 numéros successifs sur vos dés.
									D’ailleurs, l’ordre des dés joués, n’a aucun rôle.</li>
									<li><strong>Yahtzee</strong> - Toujours 50 points - Valide si tous les dés montrent les mêmes numéros.</li>
									<li><strong>Chance</strong> - Vous pouvez résumer tous les nombres de tous les dés. - Il suffit de prendre cette somme.
									Ce champ est là, avant tout, en plus d’écrire des lancers qui ne s’adaptent nulle part ailleurs.</li>
									<li><strong>Bonus</strong> - Dans les champs supérieurs de la table (Un - Six)
									Vous obtenez un bonus supplémentaire de 35 points si vous pouvez résumer 63 points ou plus dans une colonne.
									Cela correspond exactement à la somme si vous avez tiré trois dés de tout type.</li></ul>',

	'KNU_USERGUIDE_COLUMNS_1'	=> 'Trois colonnes',
	'KNU_USERGUIDE_COLUMNS_2'	=> 'Le tableau se compose de trois colonnes. La somme de chaque colonne est multipliée par différents facteurs pour déterminer le résultat final:<br/><br/>
									Colonne 1: Somme X1 <br/>
									Colonne 2: Somme X2<br/>
									Colonne 3: Somme X3<br/><br/>
									Lorsque vous choisissez une case vous ne pouvez plus lancé les dés.',

));
