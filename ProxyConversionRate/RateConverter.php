<?php

namespace ProxyConversionRate;

class RateConverter
{
    protected $rates = [
        'SEK' => 9.93493,
        'NOK' => 9.84177,
        'DKK' => 7.44337,
    ];

    /**
     * @param $country
     * @return float
     * @throws \Exception
     */
    public function conversionRate($country)
    {
        if (! isset($this->rates[$country])) {
            throw new \Exception('Country currency was not found');
        }
        return $this->rates[$country];
    }
}
