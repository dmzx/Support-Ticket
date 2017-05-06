<?php
/**
*
* @package phpBB Extension - Support Ticket
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\supportticket\migrations;

class supportticket_v103 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\dmzx\supportticket\migrations\supportticket_v102',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('supportticket_version', '1.0.3')),
		);
	}
}
