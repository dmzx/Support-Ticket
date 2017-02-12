<?php
/**
*
* @package phpBB Extension - Support Ticket
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\supportticket\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\user;
use phpbb\request\request_interface;
use phpbb\template\template;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var user */
	protected $user;

	/** @var request_interface */
	protected $request;

	/** @var template */
	protected $template;

	/**
	* Constructor
	*
	* @param user				$user
	* @param request			$request
	* @param template			$template
	*
	*/
	public function __construct(
		user $user,
		request_interface $request,
		template $template
	)
	{
		$this->user			= $user;
		$this->request		= $request;
		$this->template 	= $template;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'							=> 'load_language_on_setup',
			'core.posting_modify_message_text'			=> 'posting_modify_message_text',
			'core.posting_modify_template_vars'			=> 'posting_modify_template_vars',
			'core.acp_manage_forums_request_data'		=> 'acp_manage_forums_request_data',
			'core.acp_manage_forums_initialise_data'	=> 'acp_manage_forums_initialise_data',
			'core.acp_manage_forums_display_form'		=> 'acp_manage_forums_display_form',
			'core.viewforum_get_topic_data'				=> 'viewforum_get_topic_data',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/supportticket',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function posting_modify_message_text($event)
	{
		//Get data
		$post_data = $event['post_data'];
		$mode = $event['mode'];
		$message_parser = $event['message_parser'];

		if ($post_data['enable_sts'] == true && ($mode == 'post'))
		{
			$phpbbversion 			= $this->request->variable('phpbbversion', '', true );
			$phpbbtype 				= $this->request->variable('phpbbtype', 0);
			$phpbbmods 				= $this->request->variable('phpbbmods', 0);
			$phpbbdescvf 			= $this->request->variable('phpbbdescvf', '', true );
			$phpbbknowledge			= $this->request->variable('phpbbknowledge', 0);
			$boardlink1 			= $this->request->variable('boardlink', '', true );
			$phpversion 			= $this->request->variable('phpversion', '', true );
			$mysqlversion 			= $this->request->variable('mysqlversion', '', true );
			$errselfsolution 		= $this->request->variable('errselfsolution', '', true );
			$message				= $this->request->variable('message', '', true);
			$anti_support_message 	= $this->request->variable('message', '', true);

			$sts_colour = $post_data['sts_colour'];
			$sts_size 	= $post_data['sts_size'];

			$message_parser->message = '';

			// phpBB Type
			if ($phpbbtype == '1')
			{
				$phpbbtype = $this->user->lang['STS_STANDARD'];
			}
			else if ($phpbbtype == '2')
			{
				$phpbbtype = $this->user->lang['STS_PREMOD'];
			}
			else
			{
				$phpbbtype = $this->user->lang['STS_ANDDIST'];
			}

			// EXT Options
			if ($phpbbmods == '0')
			{
				$phpbbmods = $this->user->lang['STS_NO'];
			}
			else
			{
				$phpbbmods = $this->user->lang['STS_YES'];
			}

			// Knowledge
			if ($phpbbknowledge == '1')
			{
				$phpbbknowledge = $this->user->lang['STS_BEGINNER'];
			}
			else if ($phpbbknowledge == '2')
			{
				$phpbbknowledge = $this->user->lang['STS_BASICKNOW'];
			}
			else if ($phpbbknowledge == '3')
			{
				$phpbbknowledge = $this->user->lang['STS_EXTENDED'];
			}
			else
			{
				$phpbbknowledge = $this->user->lang['STS_PROFI'];
			}

			$u1 = $this->user->lang['STS_PHPBBVERSION'];
			$u2 = $this->user->lang['STS_PHPBBTYPE'];
			$u3 = $this->user->lang['STS_MODS_SHORT'];
			$u4 = $this->user->lang['STS_KNOWLEDGE'];
			$u5 = $this->user->lang['STS_BOARDLINK'];
			$u6 = $this->user->lang['STS_PHPVER'];
			$u7 = $this->user->lang['STS_SQLVER'];
			$u8 = $this->user->lang['STS_BEFOREERR'];
			$u9 = $this->user->lang['STS_SELFSOLUTION'];
			$u0 = $this->user->lang['STS_HEAD_MSG'];

			$message_parser->message .= "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u1 . "[/b][/color][/size] " . $phpbbversion . "\n";
			$message_parser->message .= "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u2 . "[/b][/color][/size] " . $phpbbtype . "\n";
			$message_parser->message .= "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u3 . "[/b][/color][/size] " . $phpbbmods . "\n";
			$message_parser->message .= "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u4 . "[/b][/color][/size] " . $phpbbknowledge . "\n";
			$message_parser->message .= ($boardlink1 && ($boardlink1 != 'http://')) ? "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u5 . "[/b][/color][/size] [url]" . $boardlink1 . "[/url]\n" : '';
			$message_parser->message .= "\n";
			$message_parser->message .= ($phpversion) ? "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u6 . "[/b][/color][/size] " . $phpversion . "\n" : '';
			$message_parser->message .= ($mysqlversion) ? "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u7 . "[/b][/color][/size] " . $mysqlversion . "\n" : '';
			$message_parser->message .= ($mysqlversion || $phpversion) ? "\n" : '';
			$message_parser->message .= "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u8 . "[/b][/color][/size]\n[i]" . $phpbbdescvf . "[/i]\n\n";
			$message_parser->message .= "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u9 . "[/b][/color][/size]\n[i]" . $errselfsolution . "[/i]\n\n";
			$message_parser->message .= "[size=" . $sts_size . "][color=#" . $sts_colour . "][b]" . $u0 . "[/b][/color][/size]\n[i]" . $message . "[/i]";

			$post_data['post_text'] = $message_parser->message;
		}
	}

	// modify posting and add our template stuff
	public function posting_modify_template_vars($event)
	{
		$post_data = $event['post_data'];
		$page_data = $event['page_data'];

		$page_data['MESSAGE'] 			= isset($anti_support_message) ? $anti_support_message : $post_data['post_text'];
		$page_data['SUPPORT_STS']		= ($post_data['enable_sts'] == true && ($event['mode'] == 'post')) ? true : false;
		$page_data['STS_PHPBBVERSION']	= $this->request->variable('phpbbversion', '', true);
		$page_data['STS_PHPBBTYPE']		= $this->request->variable('phpbbtype', 0);
		$page_data['STS_MODS']			= $this->request->variable('phpbbknowledge', 0);
		$page_data['STS_BEFOREERR']		= $this->request->variable('phpbbdescvf', '', true);
		$page_data['STS_SELFSOLUTION']	= $this->request->variable('errselfsolution', '', true);
		$page_data['STS_BOARDLINK']		= $this->request->variable('boardlink', '');
		$page_data['STS_SQLVER']		= $this->request->variable('mysqlversion', '');
		$page_data['STS_PHPVER']		= $this->request->variable('phpversion', '');

		$event['page_data'] = $page_data;
	}

	// Submit form (add/update)
	public function acp_manage_forums_request_data($event)
	{
		$forum_data = $event['forum_data'];

		$forum_data = array_merge($forum_data, array(
			'enable_sts' 		=> $this->request->variable('enable_sts', false),
			'sts_colour'	 	=> $this->request->variable('sts_colour', ''),
			'sts_size'			=> $this->request->variable('sts_size', 0),
		));

		$event['forum_data'] = $forum_data;
	}

	// Default settings for new forums
	public function acp_manage_forums_initialise_data($event)
	{
		$forum_data = $event['forum_data'];
		if ($event['action'] == 'add')
		{
			$forum_data['sts_yes'] = true;
			$forum_data['sts_no'] =	false;
			$forum_data['enable_sts'] =	false;
			$forum_data['sts_colour'] = '';
			$forum_data['sts_size']	= 120;
		}
		$event['forum_data'] = $forum_data;
	}

	// ACP forums template output
	public function acp_manage_forums_display_form($event)
	{
		$template_data = $event['template_data'];
		$forum_data = $event['forum_data'];

		$template_data = array_merge($template_data, array(
			'S_STS_ENABLE' 			=> $forum_data['enable_sts'] ? true : false,
			'STS_TEMPLATE_COLOUR' 	=> $forum_data['sts_colour'],
			'STS_FONT_SIZE'			=> $forum_data['sts_size'],
		));

		$event['template_data'] = $template_data;
	}

	/**
	* Add the forum template
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function viewforum_get_topic_data($event)
	{
		if ($event['forum_data']['enable_sts'] ? true : false)
		{
			$this->template->assign_var('L_BUTTON_NEW_TOPIC', $this->user->lang['STS_NEW_SUPPORT_TICKET']);
		}
	}
}
