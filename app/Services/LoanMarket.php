<?php

namespace App\Services;

use App\Traits\CanHttpRequest;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class LoanMarket
{
    use CanHttpRequest;

    /**
     * Create loan class instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('services.loan_market.url'),
            'headers' => $this->getDefaultHeaders(),
        ]);
    }

    /**
     * Get default headers for Client.
     *
     * @return array
     */
    public function getDefaultHeaders()
    {
        return [
            'Content-Type' => 'application/json'
        ];
    }

    /**
     * Get all loan data.
     *
     * @param  string $endpoint
     * @param  array  $params
     * @return array
     */
    public function getAll($endpoint, $params = [])
    {
        return $this->get($endpoint, $params);
    }

    /**
     * Get loan data by ID.
     *
     * @param  string $endpoint
     * @param  int    $loanId
     * @param  array  $params
     * @return array
     */
    public function getByID($endpoint, $loanId, $params = [])
    {
        return $this->get($endpoint.'/'.$loanId, $params);
    }
}
