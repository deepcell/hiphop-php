<?hh

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

class Point2
{
	public $x;		// Cartesian x-coordinate
	public $y;		// Cartesian y-coordinate

	public function __construct($x = 0, $y = 0)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function __toString()
	{

		return '(' . $this->x . ',' . $this->y . ')';
	}
}
