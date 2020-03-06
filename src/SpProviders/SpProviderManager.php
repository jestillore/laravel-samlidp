<?php

namespace CodeGreenCreative\SamlIdp\SpProviders;

use Illuminate\Support\Manager;

class SpProviderManager extends Manager
{
    /**
     * @inheritDoc
     */
    public function getDefaultDriver()
    {
        return config('samlidp.sp_provider');
    }

    /**
     * @return ConfigProvider
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function createConfigDriver(): ConfigProvider
    {
        return $this->container->make(ConfigProvider::class);
    }
}
