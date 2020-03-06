<?php

namespace CodeGreenCreative\SamlIdp\Contracts;

interface SpProviderContract
{
    public function getAllServiceProviders(): array;

    public function getAllSloRedirects(): array;
}
