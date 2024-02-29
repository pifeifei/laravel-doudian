<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Recycle extends BaseRequest
{
    /**
     * 上传估价.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function createPrice(array $params): array
    {
        return $this->httpPost('recycle/createPrice', $params);
    }

    /**
     * 回收商确认收货操作.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function confirmReceive(array $params): array
    {
        return $this->httpPost('recycle/confirmReceive', $params);
    }

    /**
     * 回传质检通过和价格.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function qualityTestingResult(array $params): array
    {
        return $this->httpPost('recycle/qualityTestingResult', $params);
    }

    /**
     * 回收商在用户确认前调整报价接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function changePrice(array $params): array
    {
        return $this->httpPost('recycle/changePrice', $params);
    }

    /**
     * 回收商退货发货.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function applyChangePrice(array $params): array
    {
        return $this->httpPost('recycle/applyChangePrice', $params);
    }

    /**
     * 寄售成功.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function sellSucceed(array $params): array
    {
        return $this->httpPost('recycle/sellSucceed', $params);
    }

    /**
     * 回收商退货发货.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function logisticsBack(array $params): array
    {
        return $this->httpPost('recycle/logisticsBack', $params);
    }

    /**
     * 拉取订单列表接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function buyerGetOrderList(array $params): array
    {
        return $this->httpPost('recycle/buyerGetOrderList', $params);
    }

    /**
     * 获得订单详情.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function buyerGetOrderDetail(array $params): array
    {
        return $this->httpPost('recycle/buyerGetOrderDetail', $params);
    }
}
