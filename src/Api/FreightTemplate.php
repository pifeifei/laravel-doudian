<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class FreightTemplate extends BaseRequest
{
    /**
     * 更新运费模板.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function update(array $params): array
    {
        return $this->httpPost('freightTemplate/update', $params);
    }

    /**
     * 创建运费模板.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function create(array $params): array
    {
        return $this->httpPost('freightTemplate/create', $params);
    }

    /**
     * 运费模板查询.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function list(array $params = []): array
    {
        return $this->httpPost('freightTemplate/list', $params);
    }
}
