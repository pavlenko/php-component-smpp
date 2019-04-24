<?php

namespace PE\Component\SMPP\Type;

interface TypeInterface
{
    /**
     * @param mixed $data
     *
     * @return string
     */
    public function encode($data);

    /**
     * @param string $data
     *
     * @return mixed
     */
    public function decode($data);
}