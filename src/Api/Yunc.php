<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Yunc extends BaseRequest
{
    /**
     * toB场景取消出库单.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function cancelOutboundOrderToB(array $params): array
    {
        return $this->httpPost('yunc/cancelOutboundOrderToB', $params);
    }

    /**
     * 商家入驻仓关系查询.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function shopWarehouseRefQuery(array $params): array
    {
        return $this->httpPost('yunc/shopWarehouseRefQuery', $params);
    }

    /**
     * wms入库单回告.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function wmsInboundCallback(array $params): array
    {
        return $this->httpPost('yunc/wmsInboundCallback', $params);
    }

    /**
     * 云仓出库接单.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function cloudCreateOutboundOrder(array $params): array
    {
        return $this->httpPost('yunc/cloudCreateOutboundOrder', $params);
    }

    /**
     * 销退入库取消.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function cloudCancelInboundOrder(array $params): array
    {
        return $this->httpPost('yunc/cloudCancelInboundOrder', $params);
    }

    /**
     * 销退单入库.
     *
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function cloudCreateInboundOrder(array $params): array
    {
        return $this->httpPost('yunc/cloudCreateInboundOrder', $params);
    }

    /**
     * 云仓出库取消.
     *
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function cloudCancelOutboundOrder(array $params): array
    {
        return $this->httpPost('yunc/cloudCancelOutboundOrder', $params);
    }

    /**
     * 给外部WMS调用的推送出库信息回传.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function pushOutboundFeedback(array $params): array
    {
        return $this->httpPost('yunc/pushOutboundFeedback', $params);
    }

    /**
     * 货品推送接口-ERP(单个).
     *
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function erpCargoSinglePush(array $params): array
    {
        return $this->httpPost('yunc/erpCargoSinglePush', $params);
    }

    /**
     * erp创建入库单.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function erpInboundCreate(array $params): array
    {
        return $this->httpPost('yunc/erpInboundCreate', $params);
    }

    /**
     * 设置指定地址下的仓的优先级.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function erpInboundCancel(array $params): array
    {
        return $this->httpPost('yunc/erpInboundCancel', $params);
    }

    /**
     * 库存调整(盘点和转移).
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function adjustInventory(array $params): array
    {
        return $this->httpPost('yunc/adjustInventory', $params);
    }

    /**
     * toB出库单.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function createOutboundOrderToB(array $params): array
    {
        return $this->httpPost('yunc/createOutboundOrderToB', $params);
    }

    /**
     * 仓储系统回传发货信息.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function deliveryInfoNotify(array $params): array
    {
        return $this->httpPost('wms/deliveryInfoNotify', $params);
    }

    /**
     * WMS出库明细回传.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function outboundDetailNotify(array $params): array
    {
        return $this->httpPost('wms/outboundDetailNotify', $params);
    }

    /**
     * 入库明细回传，WMS回传入库数据时，使用该接口回传.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function inboundDetailNotify(array $params): array
    {
        return $this->httpPost('wms/inboundDetailNotify', $params);
    }

    /**
     * 创建普通入库单。
     *
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     * @throws RequestException
     */
    public function wmsInboundCreate(array $params): array
    {
        return $this->httpPost('yunc/wms/inbound/create', $params);
    }

    /**
     * 货品数据采集接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function syncCollectInfo(array $params): array
    {
        return $this->httpPost('wms/syncCollectInfo', $params);
    }

    /**
     * 实时库存同步接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function realTimeInventoryCallback(array $params): array
    {
        return $this->httpPost('wms/realTimeInventoryCallback', $params);
    }
}
