<?php
/**
 * This file is part of the Money library
 *
 * Copyright (c) 2011 Mathias Verraes
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Money;

class Currency
{
    /** @var string */
    private $name;

    const AED = 'AED';
	const AUD = 'AUD';
    const CHF = 'CHF';
    const CNY = 'CNY';
    const DKK = 'DKK';
    const EUR = 'EUR';
    const GBP = 'GBP';
    const JPY = 'JPY';
    const KWD = 'KWD';
    const MXN = 'MXN';
    const MYR = 'MYR';
    const NOK = 'NOK';
    const ROL = 'ROL';
    const RON = 'RON';
    const SEK = 'SEK';
    const SGD = 'SGD';
    const THB = 'THB';
    const USD = 'USD';
    const WON = 'WON';
    const ZAR = 'ZAR';

    public function __construct($name)
    {
        if (!defined("self::$name")) {
            throw new UnknownCurrencyException($name);
        }
        $this->name = $name;
    }

    /**
     * @return string
     */
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function equals(Currency $other)
    {
        return $this->name === $other->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}
