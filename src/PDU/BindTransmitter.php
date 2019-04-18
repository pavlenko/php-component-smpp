<?php

namespace PE\Component\SMPP\PDU;

class BindTransmitter extends PDU
{
    /**
     * @var string Max length 16
     */
    private $systemID;

    /**
     * @var string Max length 9
     */
    private $password;

    /**
     * @var string Max length 13
     */
    private $systemType;

    /**
     * @var int
     */
    private $interfaceVersion;

    /**
     * @var int
     */
    private $addrTON;

    /**
     * @var int
     */
    private $addrNPI;

    /**
     * @var string Max length 41
     */
    private $addressRange;
}
