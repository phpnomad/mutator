<?php

namespace PHPNomad\Mutator\Interfaces;

interface Mutator
{
    /**
     * Mutates using the provided arguments.
     *
     * @return mixed
     */
    public function mutate(...$args);
}