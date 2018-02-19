<?php

namespace Classes;

class Parentclass
{

	protected $datastring = "";

	public function __construct($string = "") {
		$this->datastring = $string;
	}

	public function getString() {
		return $this->datastring;
	}
}