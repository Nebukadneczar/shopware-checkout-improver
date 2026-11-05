<?php
declare(strict_types=1);

namespace ShopwareCheckoutImprover;

use Shopware\Core\Framework\Plugin;

class ShopwareCheckoutImprover extends Plugin
{
    public function getName(): string
    {
        return 'Shopware Checkout Improver';
    }
}
