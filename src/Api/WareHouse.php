<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class WareHouse extends BaseRequest
{
    /**
     * 查询库存.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function stockNum(array $params): array
    {
        return $this->httpPost('sku/stockNum', $params);
    }

    /**
     * 创建单个区域仓.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function create(array $params): array
    {
        return $this->httpPost('warehouse/create', $params);
    }

    /**
     * 批量创建区域仓.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function createBatch(array $params): array
    {
        return $this->httpPost('warehouse/createBatch', $params);
    }

    /**
     * 编辑区域仓.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function edit(array $params): array
    {
        return $this->httpPost('warehouse/edit', $params);
    }

    /**
     * 查询区域仓.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function info(array $params): array
    {
        return $this->httpPost('warehouse/info', $params);
    }

    /**
     * 批量查询区域仓.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function list(array $params): array
    {
        return $this->httpPost('warehouse/list', $params);
    }

    /**
     * 地址与区域仓解绑.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function removeAddr(array $params): array
    {
        return $this->httpPost('warehouse/removeAddr', $params);
    }

    /**
     * 绑定单个地址到区域仓.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function setAddr(array $params): array
    {
        return $this->httpPost('warehouse/setAddr', $params);
    }

    /**
     * 批量绑定地址与区域仓.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function setAddrBatch(array $params): array
    {
        return $this->httpPost('warehouse/setAddrBatch', $params);
    }

    /**
     * 设置指定地址下的仓的优先级.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function setPriority(array $params): array
    {
        return $this->httpPost('warehouse/setPriority', $params);
    }

    /**
     * 设置sku发货时效.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function setSkuShipTime(array $params): array
    {
        return $this->httpPost('promise/setSkuShipTime', $params);
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
        return $this->httpPost('warehouse/adjustInventory', $params);
    }

    /**
     * 商家发货时效配置推荐.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function deliveryList(array $params): array
    {
        return $this->httpPost('promise/deliveryList', $params);
    }
}
