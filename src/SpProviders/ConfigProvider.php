<?php

namespace CodeGreenCreative\SamlIdp\SpProviders;

use CodeGreenCreative\SamlIdp\Contracts\SpProviderContract;

class ConfigProvider implements SpProviderContract
{
    /**
     * Return all service providers
     *
     * @return array
     */
    public function getAllServiceProviders(): array
    {
        return config('samlidp.sp');
    }

    /**
     * Return all slo redirects
     *
     * @return array
     */
    public function getAllSloRedirects(): array
    {
        return config('samlidp.sp_slo_redirects', []);
    }
}
