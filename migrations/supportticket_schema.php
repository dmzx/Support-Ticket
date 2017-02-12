<?php
/**
*
* @package phpBB Extension - Support Ticket
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\supportticket\migrations;

class supportticket_schema extends \phpbb\db\migration\migration
{
	public function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'forums'	=> array(
					'enable_sts'		=> array('UINT', 0),
					'sts_colour'	 	=> array('VCHAR:7', ''),
					'sts_size' 			=> array('VCHAR:4', '120'),
				),
			),
		);
	}

	public function revert_schema()
	{
		return 	array(
			'drop_columns' => array(
				$this->table_prefix . 'forums'	=> array(
					'enable_sts',
					'sts_colour',
					'sts_size',
				),
			),
		);
	}
}
