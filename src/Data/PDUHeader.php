<?php

namespace PE\Component\SMPP\Data;

class PDUHeader
{
    /**
     * @var int
     */
    private $length;

    /**
     * @var int
     */
    private $command;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $sequence;

    /**
     * @param int $length
     * @param int $command
     * @param int $status
     * @param int $sequence
     */
    public function __construct(int $length, int $command, int $status, int $sequence)
    {
        $this->length   = $length;
        $this->command  = $command;
        $this->status   = $status;
        $this->sequence = $sequence;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getCommand(): int
    {
        return $this->command;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getSequence(): int
    {
        return $this->sequence;
    }
}
