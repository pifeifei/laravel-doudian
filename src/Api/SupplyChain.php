<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class SupplyChain extends BaseRequest
{
    /**
     * 根据供货单号查询详情.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getOrderByOrderNo(array $params): array
    {
        return $this->httpPost('supplyChain/getOrderByOrderNo', $params);
    }

    /**
     * 供货单更新发货物流.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function updateConsign(array $params): array
    {
        return $this->httpPost('supplyChain/updateConsign', $params);
    }

    /**
     * 供货单发货.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function supplyConsign(array $params): array
    {
        return $this->httpPost('supplyChain/supplyConsign', $params);
    }

    /**
     * 供货单列表查询.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getSupplyOrderList(array $params): array
    {
        return $this->httpPost('supplyChain/getSupplyOrderList', $params);
    }
}
