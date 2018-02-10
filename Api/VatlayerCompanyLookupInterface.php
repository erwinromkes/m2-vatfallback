<?php
/**
 * Dutchento Vatfallback
 * Provides free VAT fallback mechanism
 * Copyright (C) 2018 Dutchento
 *
 * MIT license applies to this software
 */

namespace Dutchento\Vatfallback\Api;

interface VatlayerCompanyLookupInterface
{
    /**
     * Returns company data using the Vatlayer API
     *
     * @api
     * @param string $vatNumber vatnumber
     * @return array Company data
     */
    public function byVatnumber(string $vatNumber): array;
}