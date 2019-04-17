<?php

namespace PE\Component\SMPP;

/**
 * Primitive class for encapsulating smpp addresses
 * @author hd@onlinecity.dk
 */
class Address
{
    // SMPP v3.4 - 5.2.5
    const TON_UNKNOWN           = 0x00;
    const TON_INTERNATIONAL     = 0x01;
    const TON_NATIONAL          = 0x02;
    const TON_NETWORK_SPECIFIC  = 0x03;
    const TON_SUBSCRIBER_NUMBER = 0x04;
    const TON_ALPHANUMERIC      = 0x05;
    const TON_ABBREVIATED       = 0x06;

    // SMPP v3.4 - 5.2.6
    const NPI_UNKNOWN    = 0x00;
    const NPI_E164       = 0x01;
    const NPI_DATA       = 0x03;
    const NPI_TELEX      = 0x04;
    const NPI_E212       = 0x06;
    const NPI_NATIONAL   = 0x08;
    const NPI_PRIVATE    = 0x09;
    const NPI_ERMES      = 0x0a;
    const NPI_INTERNET   = 0x0e;
    const NPI_WAP_CLIENT = 0x12;

    private static $allowedTON = [
        self::TON_UNKNOWN,
        self::TON_INTERNATIONAL,
        self::TON_NATIONAL,
        self::TON_NETWORK_SPECIFIC,
        self::TON_SUBSCRIBER_NUMBER,
        self::TON_ALPHANUMERIC,
        self::TON_ABBREVIATED,
    ];

    private static $allowedNPI = [
        self::NPI_UNKNOWN,
        self::NPI_E164,
        self::NPI_DATA,
        self::NPI_TELEX,
        self::NPI_E212,
        self::NPI_NATIONAL,
        self::NPI_PRIVATE,
        self::NPI_ERMES,
        self::NPI_INTERNET,
        self::NPI_WAP_CLIENT,
    ];

    /**
     * @var string
     */
    private $value;

    /**
     * @var int
     */
    private $ton;

    /**
     * @var int
     */
    private $npi;

    /**
     * @param string  $value Address
     * @param integer $ton   Type-of-number
     * @param integer $npi   Numbering-plan-indicator
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $value, int $ton = self::TON_UNKNOWN, int $npi = self::NPI_UNKNOWN)
    {
        if (!in_array($ton, self::$allowedTON)) {
            throw new \InvalidArgumentException('Invalid type-of-number, must be one of %s::TON_* constant');
        }

        if (!in_array($npi, self::$allowedNPI)) {
            throw new \InvalidArgumentException('Invalid numbering-plan-indicator, must be one of %s::TON_* constant');
        }

        // Address-Value field may contain 10 octets (12-length-type), see 3GPP TS 23.040 v 9.3.0 - section 9.1.2.5 page 46.
        if ($ton == self::TON_ALPHANUMERIC && strlen($value) > 11) {
            throw new \InvalidArgumentException('Alphanumeric address may only contain 11 chars');
        }

        if ($ton == self::TON_INTERNATIONAL && $npi == self::NPI_E164 && strlen($value) > 15) {
            throw new \InvalidArgumentException('E164 address may only contain 15 digits');
        }

        $this->value = $value;
        $this->ton   = $ton;
        $this->npi   = $npi;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getTON(): int
    {
        return $this->ton;
    }

    /**
     * @return int
     */
    public function getNPI(): int
    {
        return $this->npi;
    }
}
