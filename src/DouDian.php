<?php

namespace Abbotton\DouDian;

use Abbotton\DouDian\Api\AfterSale;
use Abbotton\DouDian\Api\Comment;
use Abbotton\DouDian\Api\Logistics;
use Abbotton\DouDian\Api\Order;
use Abbotton\DouDian\Api\Product;
use Abbotton\DouDian\Api\Shop;
use Abbotton\DouDian\Api\WareHouse;
use Exception;
use Illuminate\Support\Str;
use InvalidArgumentException;

/**
 * Class DouDian
 * @package Abbotton\DouDian
 * @property Shop $shop
 * @property AfterSale $afterSale
 * @property Comment $comment
 * @property Logistics $logistics
 * @property Order $order
 * @property Product $product
 * @property WareHouse $wareHouse
 */
class DouDian
{
    private $config;

    public function __construct(array $config = [])
    {
        if (!isset($config['app_key']) || !$config['app_key']) {
            throw new InvalidArgumentException('配置有误, 请填写app_key');
        }

        if (!isset($config['app_secret']) || !$config['app_secret']) {
            throw new InvalidArgumentException('配置有误, 请填写app_secret');
        }

        $this->config = $config;
    }

    public function __get($class)
    {
        $class = "\\Abbotton\\DouDian\\Api\\" . Str::ucfirst($class);
        if (!class_exists($class)) {
            throw new Exception($class . ', Not found', 404);
        }

        return new $class($this->config);
    }
}
