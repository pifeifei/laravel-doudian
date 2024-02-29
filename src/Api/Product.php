<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Product extends BaseRequest
{
    /**
     * 商品发布新接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function productAddV2(array $params): array
    {
        return $this->httpPost('product/addV2', $params);
    }

    /**
     * 删除商品
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function productDel(array $params): array
    {
        return $this->httpPost('product/del', $params);
    }

    /**
     * 获取商品详情.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function productDetail(array $params): array
    {
        return $this->httpPost('product/detail', $params);
    }

    /**
     * 设置商品限购.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function editBuyerLimit(array $params): array
    {
        return $this->httpPost('product/editBuyerLimit', $params);
    }

    /**
     * 商品编辑新接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function productEditV2(array $params): array
    {
        return $this->httpPost('product/editV2', $params);
    }

    /**
     * 商品下架.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function setOffline(array $params): array
    {
        return $this->httpPost('product/setOffline', $params);
    }

    /**
     * 商品上架.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function setOnline(array $params): array
    {
        return $this->httpPost('product/setOnline', $params);
    }

    /**
     * 获取商品sku详情.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function skuDetail(array $params): array
    {
        return $this->httpPost('sku/detail', $params);
    }

    /**
     * 修改sku编码。
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function editCode(array $params): array
    {
        return $this->httpPost('sku/editCode', $params);
    }

    /**
     * 编辑sku价格。
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function editPrice(array $params): array
    {
        return $this->httpPost('sku/editPrice', $params);
    }

    /**
     * 获取商品sku列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function skuList(array $params): array
    {
        return $this->httpPost('sku/list', $params);
    }

    /**
     * 修改sku库存。
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function syncStock(array $params): array
    {
        return $this->httpPost('sku/syncStock', $params);
    }

    /**
     * 批量同步库存接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function syncStockBatch(array $params): array
    {
        return $this->httpPost('sku/syncStockBatch', $params);
    }

    /**
     * 获取商品列表新版.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function listV2(array $params): array
    {
        return $this->httpPost('product/listV2', $params);
    }

    /**
     * 获取商品列表新版.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function opptyProductApply(array $params): array
    {
        return $this->httpPost('opptyProduct/apply', $params);
    }

    /**
     * 机会品线索触达.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function opptyProductClue(array $params): array
    {
        return $this->httpPost('opptyProduct/clue', $params);
    }

    /**
     * 机会品提报进度查询.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function opptyProductGetApplyProgress(array $params): array
    {
        return $this->httpPost('opptyProduct/getApplyProgress', $params);
    }

    /**
     * 商品每日诊断任务查询API.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function qualityTask(array $params): array
    {
        return $this->httpPost('product/qualityTask', $params);
    }

    /**
     * 店铺商品质量查询API.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function qualityList(array $params): array
    {
        return $this->httpPost('product/qualityList', $params);
    }

    /**
     * 商品信息质量分查询API.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function qualityDetail(array $params): array
    {
        return $this->httpPost('product/qualityDetail', $params);
    }

    /**
     * 根据商品分类获取对应的属性列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getCatePropertyV2(array $params): array
    {
        return $this->httpPost('product/getCatePropertyV2', $params);
    }

    /**
     * 获取类目下需要填写的资质列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function qualificationConfig(array $params): array
    {
        return $this->httpPost('product/qualificationConfig', $params);
    }

    /**
     * 查询商品发布规则.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getProductUpdateRule(array $params): array
    {
        return $this->httpPost('product/getProductUpdateRule', $params);
    }

    /**
     * 新增跨境/海南商品.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function addCbProduct(array $params): array
    {
        return $this->httpPost('product/addCbProduct', $params);
    }

    /**
     * 编辑一个跨境/海南商品.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function editCbProduct(array $params): array
    {
        return $this->httpPost('product/editCbProduct', $params);
    }

    /**
     * 审核记录列表.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function auditList(array $params): array
    {
        return $this->httpPost('product/auditList', $params);
    }
}
