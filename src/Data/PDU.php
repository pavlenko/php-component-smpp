<?php

namespace PE\Component\SMPP\Data;

class PDU
{
    /**
     * @var PDUHeader
     */
    private $header;

    /**
     * @var PDUBody|null
     */
    private $body;

    /**
     * @param PDUHeader    $header
     * @param PDUBody|null $body
     */
    public function __construct(PDUHeader $header, ?PDUBody $body)
    {
        $this->header = $header;
        $this->body   = $body;
    }

    /**
     * @return PDUHeader
     */
    public function getHeader(): PDUHeader
    {
        return $this->header;
    }

    /**
     * @return PDUBody|null
     */
    public function getBody(): ?PDUBody
    {
        return $this->body;
    }
}
