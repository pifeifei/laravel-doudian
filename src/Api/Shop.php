<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Shop extends BaseRequest
{
    /**
     * 获取店铺的已授权品牌列表.
     *
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function brandList(): array
    {
        return $this->httpPost('shop/brandList');
    }

    /**
     * 获取店铺后台供商家发布商品的类目.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getShopCategory(array $params): array
    {
        return $this->httpPost('shop/getShopCategory', $params);
    }

    /**
     * 售后地址列表接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function addressList(array $params): array
    {
        return $this->httpPost('address/list', $params);
    }

    /**
     * 店铺创建售后地址接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function addressCreate(array $params): array
    {
        return $this->httpPost('address/create', $params);
    }

    /**
     * 店铺创建售后地址接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function addressUpdate(array $params): array
    {
        return $this->httpPost('address/update', $params);
    }

    /**
     * 设置尾款信息.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function setFinalPayment(array $params): array
    {
        return $this->httpPost('shop/setFinalPayment', $params);
    }

    /**
     * 查询店铺的应用权益.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function rightsInfo(array $params): array
    {
        return $this->httpPost('rights/info', $params);
    }
}
