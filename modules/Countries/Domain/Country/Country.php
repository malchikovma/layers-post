<?php

namespace Countries\Domain\Country;

class Country
{
	private $name;
	private $area;
	private $population;
	
	public function __construct($name, $area, $population)
	{
		$this->name = $name;
		$this->area = $area;
		$this->population = $population;
	}
	
	public function getName()
    {
		return $this->name;
	}
	
	public function getDensity()
	{
		$density = $this->population / $this->area;
		if ($density < 100) {
			return 'low';
		} else if ($density < 300) {
			return 'medium';
		} else {
			return 'high';
		}
	}
}
