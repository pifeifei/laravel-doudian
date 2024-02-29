<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Member extends BaseRequest
{
    /**
     * 会员等级更新.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function batchUpdate(array $params): array
    {
        return $this->httpPost('member/batchUpdate', $params);
    }

    /**
     * 获取商家推广链接接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getShopShortLink(array $params): array
    {
        return $this->httpPost('member/getShopShortLink', $params);
    }
}
