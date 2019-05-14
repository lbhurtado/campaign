<?php

namespace LBHurtado\Campaign;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LBHurtado\Campaign\Skeleton\SkeletonClass
 */
class CampaignFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'campaign';
    }
}
