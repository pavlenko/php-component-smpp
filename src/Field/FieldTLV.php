<?php

namespace PE\Component\SMPP\Field;

class FieldTLV extends Field
{
    /**
     * @var FieldInteger
     */
    private $id;

    /**
     * @var FieldInteger
     */
    private $length;

    /**
     * @param FieldInteger $id
     * @param FieldInteger $length
     */
    public function __construct(FieldInteger $id, FieldInteger $length)
    {
        $this->id     = $id;
        $this->length = $length;
    }
}
