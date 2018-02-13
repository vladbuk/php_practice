<?php

namespace Classes;

require_once "Parentclass.php";

class Subclass extends Parentclass
{
	public function setString($string) {
		if (is_string($string)) {
			$this->datastring = (string)$string;
		} else {
			throw new \Exception("Error: not string type", 1);
			
		}
	}
}