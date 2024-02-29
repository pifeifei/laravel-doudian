<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Token extends BaseRequest
{
    /**
     * 生成token API.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function create(array $params): array
    {
        return $this->httpPost('token/create', $params);
    }

    /**
     * 刷新 token API.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function refresh(array $params): array
    {
        return $this->httpPost('token/refresh', $params);
    }
}
