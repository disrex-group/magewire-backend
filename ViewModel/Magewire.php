<?php
/**
 * Disrex V.O.F.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Disrex.nl license that is
 * available through the world-wide-web at this URL:
 * https://www.disrex.nl/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @author Disrex V.O.F
 * @category Modules
 * @copyright Copyright (c) Disrex V.O.F. (https://www.disrex.nl, support@disrex.nl)
 * @year 2025
 */

declare(strict_types=1);

namespace Disrex\MagewireBackend\ViewModel;

use Magento\Framework\App\AreaList;
use Magento\Framework\App\ProductMetadataInterface;
use Magento\Framework\App\State as ApplicationState;
use Magento\Framework\Data\Form\FormKey;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;
use Magewirephp\Magewire\Model\LayoutRenderLifecycle;
use Magewirephp\Magewire\Model\Magento\System\ConfigMagewire as MagewireSystemConfig;

class Magewire extends \Magewirephp\Magewire\ViewModel\Magewire
{
    public function __construct(
        FormKey                   $formKey,
        ApplicationState          $applicationState,
        ProductMetadataInterface  $productMetadata,
        StoreManagerInterface     $storeManager,
        LayoutRenderLifecycle     $layoutRenderLifecycle,
        MagewireSystemConfig      $magewireSystemConfig,
        private readonly AreaList $areaList
    ) {
        parent::__construct(
            $formKey,
            $applicationState,
            $productMetadata,
            $storeManager,
            $layoutRenderLifecycle,
            $magewireSystemConfig
        );
    }

    public function getApplicationUrl(): string
    {
        $frontName = $this->areaList->getFrontName('adminhtml') . '/';

        try {
            return $this->storeManager->getStore()->getBaseUrl() . $frontName . trim($this->getPostRoute(), '/');
        } catch (NoSuchEntityException) {
            return $this->getPostRoute();
        }
    }
}
