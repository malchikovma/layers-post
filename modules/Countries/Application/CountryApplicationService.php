<?php

namespace Countries\Application;

use Countries\Domain\Country\Country;
use Countries\Domain\Country\CountryRepositoryInterface;

class CountryApplicationService
{
	/** @var CountryRepositoryInterface */
	private $countries;
	
	/** 
	 * @param CountryRepositoryInterface $countries
	 */
	public function __construct(CountryRepositoryInterface $countries)
	{
		$this->countries = $countries;
	}
	
	public function getCountryDensity($countryName)
	{
		$country = $this->countries->findByName($countryName);
		return $country->getDensity();
	}
}
