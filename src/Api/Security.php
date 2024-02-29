<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Security extends BaseRequest
{
    /**
     * 批量上报订单安全事件接口.
     *
     * @param  array<string, mixed>  $params
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function batchReportOrderSecurityEvent(array $params): array
    {
        return $this->httpPost('security/batchReportOrderSecurityEvent', $params);
    }
}
