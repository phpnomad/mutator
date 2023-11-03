<?php
namespace PHPNomad\Mutator\Interfaces;

interface MutationStrategy
{
    /**
     * @param callable():Mutator $mutatorGetter
     * @param callable $action
     * @return void
     */
    public function attach(callable $mutatorGetter, callable $action): void;
}