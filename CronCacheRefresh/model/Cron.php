<?php

namespace MageFineBox\CronCacheRefresh\Model;

use Magento\Framework\App\Cache\Manager as CacheManager;
use Magento\Framework\Model\Context;

class Cron
{

    protected $_cacheManager;

    public function __construct(
        Context $context,
        CacheManager $cacheManager
    ) {
        $this->_cacheManager = $cacheManager;
    }

    public function cronFunction()
    {
        $cacheTypes = $this->_cacheManager->getAvailableTypes();
        $this->_cacheManager->clean($cacheTypes);
    }
}
