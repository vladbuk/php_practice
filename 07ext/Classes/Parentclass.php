<?php

namespace Classes;

/**
* 
*/
class Parentclass
{
	protected $data = [];

	public function __construct($extdata = [])
	{
		$this->data = $extdata;
	}

	public function get() {
		return $this->data;
	}

	public function set($extdata) {
		if (is_array($extdata)) {
			$this->data = $extdata;
		}
	}

	public function del($key) {
		unset($this->data[$key]);
	}

	public function clear() {
		$this->data = [];
	}

	public function add($key, $value) {
		$this->data[$key] = $value;
	}
}