<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class AntiSpam extends BaseRequest
{
    /**
     * 商户登陆风险检查.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function userLogin(array $params): array
    {
        return $this->httpPost('antispam/userLogin', $params);
    }

    /**
     * 用户在ISV查看订单、下载订单时, 上报事件到风控系统.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function orderQuery(array $params): array
    {
        return $this->httpPost('antispam/orderQuery', $params);
    }

    /**
     * 支持使用在ISV系统商户发送（外部系统或模块，如快递平台）场景.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function orderSend(array $params): array
    {
        return $this->httpPost('antispam/orderSend', $params);
    }
}
