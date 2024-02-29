<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;

class Storage extends BaseRequest
{
    /**
     * 回告销退单状态.
     *
     * @return array<string, mixed>
     *
     * @throws RequestException
     */
    public function getOrderList(): array
    {
        return $this->httpPost('storage/notifySaleReturnStatus');
    }
}
