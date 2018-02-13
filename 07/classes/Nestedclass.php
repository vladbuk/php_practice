<?php

namespace Classes;

require_once "Parentclass.php";

class Nestedclass extends Parentclass
{
	function getString() {
		return "Строка дочернего класса: " . $this->datastring;
	}
}