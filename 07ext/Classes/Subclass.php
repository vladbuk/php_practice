<?php

namespace Classes;

class Subclass extends Parentclass
{
	private $string = "";

	public function toString() {
		foreach ($this->data as $key => $value) {
			$this->string .= $key . ": " . $value . "\n";
		}
		
		return $this->string;
		// return implode(", ", $this->data);
	}

	public function toHTML() {
		foreach ($this->data as $key => $value) {
			$this->string .= 
				$key . ": " . $value . "<br>";
		}
		
		return "<pre>" . $this->string . "</pre>";
		// return implode(", ", $this->data);
	}
}