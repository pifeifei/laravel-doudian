<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class OrderCode extends BaseRequest
{
    /**
     * 下载bic订单码.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function downloadOrderCodeByShop(array $params): array
    {
        return $this->httpPost('orderCode/downloadOrderCodeByShop', $params);
    }

    /**
     * bic流程订单物流发货接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function erpShopBindOrderCode(array $params): array
    {
        return $this->httpPost('orderCode/erpShopBindOrderCode', $params);
    }

    /**
     * 批量下载bic订单码.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function batchGetOrderCodeByShop(array $params): array
    {
        return $this->httpPost('orderCode/batchGetOrderCodeByShop', $params);
    }
}
