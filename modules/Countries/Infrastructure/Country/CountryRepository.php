<?php

namespace Countries\Infrastructure\Country;

use Countries\Domain\Country\Country;
use Countries\Domain\Country\CountryRepositoryInterface;

class CountryRepository implements CountryRepositoryInterface
{
	public function findByName($name)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$url = 'https://restcountries.com/v3.1/name/';
		curl_setopt($ch, CURLOPT_URL, $url . $name);
		$result=curl_exec($ch);
		curl_close($ch);
		$countryArr = json_decode($result, true);
		return new Country(
			$countryArr[0]['name']['common'],
			$countryArr[0]['area'],
			$countryArr[0]['population']
		);
	}
}
