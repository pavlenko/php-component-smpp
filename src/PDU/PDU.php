<?php

namespace PE\Component\SMPP\PDU;

class PDU
{
    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $commandID;

    /**
     * @var int
     */
    public $commandStatus;

    /**
     * @var int
     */
    public $sequenceNumber;
}
