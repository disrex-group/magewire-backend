<?php declare(strict_types=1);
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

namespace Disrex\MagewireBackend\Plugin;

use Closure;
use Magewirephp\Magewire\Component;
use Magewirephp\Magewire\Model\Hydrator\FormKey;
use Magewirephp\Magewire\Model\RequestInterface;

class DisableFormKeyHydratorPlugin
{
    public function aroundHydrate(FormKey $formKey, Closure $callable, Component $component, RequestInterface $request)
    {
    }
}
