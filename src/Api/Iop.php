<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Iop extends BaseRequest
{
    /**
     * 查询店铺身份.
     *
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function roleGet(): array
    {
        return $this->httpPost('iop/roleGet');
    }

    /**
     * 根据更新时间查询代打订单列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function orderList(array $params): array
    {
        return $this->httpPost('iop/orderList', $params);
    }

    /**
     * 电子面单取号.
     *
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function waybillGet(): array
    {
        return $this->httpPost('iop/waybillGet');
    }

    /**
     * 取消电子面单.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function waybillCancel(array $params): array
    {
        return $this->httpPost('iop/waybillCancel', $params);
    }

    /**
     * 电子面单回传并发货.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function waybillReturn(array $params): array
    {
        return $this->httpPost('iop/waybillReturn', $params);
    }

    /**
     * 更新电子面单.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function waybillUpdate(array $params): array
    {
        return $this->httpPost('iop/waybillUpdate', $params);
    }

    /**
     * 订单详情.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function orderInfo(array $params): array
    {
        return $this->httpPost('iop/orderInfo', $params);
    }

    /**
     * 【商家】分配代发订单.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function sellerDistribute(array $params): array
    {
        return $this->httpPost('iop/sellerDistribute', $params);
    }

    /**
     * 【商家】查看代发订单详情.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function sellerOrderInfo(array $params): array
    {
        return $this->httpPost('iop/sellerOrderInfo', $params);
    }

    /**
     * 【商家】查看代发订单列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function sellerOrderList(array $params): array
    {
        return $this->httpPost('iop/sellerOrderList', $params);
    }

    /**
     * 【商家】查询厂商管理列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function sellerSupplierList(array $params): array
    {
        return $this->httpPost('iop/sellerSupplierList', $params);
    }

    /**
     * 【商家】取消分配代发订单.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function sellerCancleDistribute(array $params): array
    {
        return $this->httpPost('iop/sellerCancleDistribute', $params);
    }

    /**
     * 【厂家】查询商家列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getSellerList(array $params): array
    {
        return $this->httpPost('iop/getSellerList', $params);
    }
}
