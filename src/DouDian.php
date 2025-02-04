<?php

namespace Abbotton\DouDian;

use Abbotton\DouDian\Api\AfterSale;
use Abbotton\DouDian\Api\Alliance;
use Abbotton\DouDian\Api\AntiSpam;
use Abbotton\DouDian\Api\Bats;
use Abbotton\DouDian\Api\Brand;
use Abbotton\DouDian\Api\BuyIn;
use Abbotton\DouDian\Api\Coupons;
use Abbotton\DouDian\Api\CrossBorder;
use Abbotton\DouDian\Api\DutyFree;
use Abbotton\DouDian\Api\FreightTemplate;
use Abbotton\DouDian\Api\Iop;
use Abbotton\DouDian\Api\Logistics;
use Abbotton\DouDian\Api\Material;
use Abbotton\DouDian\Api\Member;
use Abbotton\DouDian\Api\OpenCloud;
use Abbotton\DouDian\Api\Order;
use Abbotton\DouDian\Api\OrderCode;
use Abbotton\DouDian\Api\Product;
use Abbotton\DouDian\Api\Recycle;
use Abbotton\DouDian\Api\Security;
use Abbotton\DouDian\Api\Shop;
use Abbotton\DouDian\Api\Sms;
use Abbotton\DouDian\Api\Spu;
use Abbotton\DouDian\Api\Storage;
use Abbotton\DouDian\Api\SupplyChain;
use Abbotton\DouDian\Api\Token;
use Abbotton\DouDian\Api\Topup;
use Abbotton\DouDian\Api\WareHouse;
use Abbotton\DouDian\Api\Yunc;
use Illuminate\Support\Str;

/**
 * Class DouDian.
 *
 * @property AfterSale $afterSale
 * @property Alliance $alliance
 * @property AntiSpam $antiSpam
 * @property Bats $bats
 * @property Brand $brand
 * @property BuyIn $buyIn
 * @property Coupons $coupons
 * @property CrossBorder $crossBorder
 * @property DutyFree $dutyFree
 * @property FreightTemplate $freightTemplate
 * @property Logistics $logistics
 * @property Iop $iop
 * @property Material $material
 * @property Member $member
 * @property OpenCloud $openCloud
 * @property Order $order
 * @property OrderCode $orderCode
 * @property Product $product
 * @property Recycle $recycle
 * @property Security $security
 * @property Shop $shop
 * @property Sms $sms
 * @property Storage $storage
 * @property SupplyChain $supplyChain
 * @property Spu $spu
 * @property Token $token
 * @property Topup $topup
 * @property WareHouse $wareHouse
 * @property Yunc $yunc
 */
class DouDian
{
    /** @var array<string, mixed> */
    private array $config;

    private ?int $shopId = null;

    /**
     * @param  array<string, mixed>  $config
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @throws DouDianException
     */
    public function __get($class)
    {
        $class = '\\Abbotton\\DouDian\\Api\\'.Str::ucfirst($class);
        if (! class_exists($class)) {
            throw new DouDianException($class.' Not found', 404);
        }

        return new $class($this->config, $this->shopId);
    }

    /**
     * 设定店铺ID.
     *
     * @return $this
     */
    public function setShopId(?int $shopId = null): self
    {
        $this->shopId = $shopId;

        return $this;
    }

    /**
     * 获取店铺ID.
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @throws DouDianException
     */
    public function config(?string $name = null)
    {
        if ($name) {
            if (isset($this->config[$name])) {
                return $this->config[$name];
            }

            throw new DouDianException(sprintf('Invalid configuration value %s', $name), 404);
        }

        return $this->config;
    }
}
