<?php

namespace Countries\Domain\Country;

interface CountryRepositoryInterface
{
    public function findByName($name);
}
