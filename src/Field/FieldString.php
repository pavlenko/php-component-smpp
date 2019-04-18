<?php

namespace PE\Component\SMPP\Field;

class FieldString extends Field
{
    /**
     * @var int
     */
    private $size;

    /**
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }
}
