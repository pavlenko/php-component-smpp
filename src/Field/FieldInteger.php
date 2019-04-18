<?php

namespace PE\Component\SMPP\Field;

class FieldInteger extends Field
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
