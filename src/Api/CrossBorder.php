<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class CrossBorder extends BaseRequest
{
    /**
     * 查询跨境订单列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function orderList(array $params): array
    {
        return $this->httpPost('crossBorder/orderList', $params);
    }

    /**
     * 入库和提货出库回告.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function warehouseInOutboundEvent(array $params): array
    {
        return $this->httpPost('crossborder/warehouseInOutboundEvent', $params);
    }

    /**
     * 库存盘点回告.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function stockTaking(array $params): array
    {
        return $this->httpPost('crossborder/stockTaking', $params);
    }

    /**
     * 库存类型变动回告.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function stockTransform(array $params): array
    {
        return $this->httpPost('crossborder/stockTransform', $params);
    }

    /**
     * 服务商锁单结果回告.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function OrderInterception(array $params): array
    {
        return $this->httpPost('crossborder/OrderInterception', $params);
    }

    /**
     * 运单信息回告.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function takingLogisticsInfo(array $params): array
    {
        return $this->httpPost('crossborder/takingLogisticsInfo', $params);
    }

    /**
     * 服务商回传仓储.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function orderOperate(array $params): array
    {
        return $this->httpPost('crossBorder/orderOperate', $params);
    }

    /**
     * 服务商回告清关状态.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function orderCustomClearance(array $params): array
    {
        return $this->httpPost('crossborder/orderCustomClearance', $params);
    }

    /**
     * 服务商回传国际干线作业节点.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function orderLogisticsTrace(array $params): array
    {
        return $this->httpPost('crossborder/orderLogisticsTrace', $params);
    }

    /**
     * 获取交易订单状态.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getTradeOrderStatus(array $params): array
    {
        return $this->httpPost('crossBorder/getTradeOrderStatus', $params);
    }

    /**
     * 服务商回告海关税费.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function customsTaxInfo(array $params): array
    {
        return $this->httpPost('crossBorder/customsTaxInfo', $params);
    }
}
