<?php

namespace PE\Component\SMPP\Type;

class IntegerType implements TypeInterface
{
    /**
     * @var string
     */
    private $format;

    /**
     * @param int $size
     */
    public function __construct(int $size)
    {
        switch ($size) {
            case 1:
                $this->format = 'C';
                break;
            case 2:
                $this->format = 'n';
                break;
            case 4:
                $this->format = 'N';
                break;
            default:
                throw new \InvalidArgumentException('Invalid integer size, must be 1 or 2 or 4, got ' . $size);
        }
    }

    public function encode($data)
    {
        return pack($this->format, $data);
    }

    public function decode($data)
    {
        return unpack($this->format, $data)[0] ?? null;
    }
}