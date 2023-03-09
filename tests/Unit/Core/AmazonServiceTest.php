<?php

/**
 * This file is part of OXID eSales AmazonPay module.
 *
 * OXID eSales AmazonPay module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales AmazonPay module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales AmazonPay module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2020
 */

declare(strict_types=1);

namespace OxidSolutionCatalysts\AmazonPay\Tests\Unit\Core;

use OxidEsales\Eshop\Core\Registry;
use OxidSolutionCatalysts\AmazonPay\Core\Constants;

class AmazonServiceTest extends AmazonTestCase
{
    public function testGetCheckoutSessionId()
    {
        Registry::getSession()->deleteVariable(Constants::SESSION_CHECKOUT_ID);
        $this->assertFalse($this->amazonService->isAmazonSessionActive());

        $checkoutSessionId = $this->createAmazonSession();

        $testCheckoutSessionId = $this->amazonService->getCheckoutSessionId();

        $this->assertSame($checkoutSessionId, $testCheckoutSessionId);
    }
}
