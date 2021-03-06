<?php

namespace craftnet;

use craft\commerce\adjusters\Discount;
use craft\commerce\base\AdjusterInterface;
use craft\commerce\elements\Order;
use craft\commerce\models\OrderAdjustment;
use craftnet\cms\CmsEdition;
use craftnet\cms\CmsLicenseManager;

class EditionUpgradeDiscount implements AdjusterInterface
{
    // Constants
    // =========================================================================

    /**
     * The discount adjustment type.
     */
    const ADJUSTMENT_TYPE = 'discount';

    // Properties
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function adjust(Order $order): array
    {
        $adjustments = [];

        // todo: add plugin upgrade adjustments

        return $adjustments;
    }
}
