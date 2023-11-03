<?php

namespace PHPNomad\Mutator\Traits;

use PHPNomad\Mutator\Interfaces\MutationAdapter;

trait CanMutateFromAdapter{

    protected MutationAdapter $mutationAdapter;

    public function mutate(...$args)
    {
        $skuMutation = $this->mutationAdapter->convertFromSource(...$args);
        $skuMutation->mutate();

        return $this->mutationAdapter->convertToSource($skuMutation);
    }
}