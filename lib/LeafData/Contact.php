<?php
/**
 * A Contact
 * What they call a User, we call a Contact
 */

namespace OpenTHC\CRE\LeafData;

class Contact extends \OpenTHC\CRE\LeafData\Base
{
	protected $_path = '/users';

	function create($x)
	{
		$arg = array('user' => array());
		$arg['user'][] = $x;
		$res = $this->_client->call('POST', $this->_path, $arg);
		return $res;
	}

	function delete($x)
	{
		$res = $this->_client->call('DELETE', sprintf('%s/%s', $this->_path, $x));
		return $res;
	}

	function update($x)
	{
		$res = $this->_client->call('POST', sprintf('%s/update', $this->_path), $x);
		return $res;
	}

}
