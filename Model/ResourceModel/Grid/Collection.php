<?php
/**
 *
 * Copyright © 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
// Funami/FuSetup/Model/ResourceModel/Grid/Collection.php
namespace Funami\FuSetup\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * init
     */
    protected function _construct()
    {
        $this->_init(
            'Funami\FuSetup\Model\Grid',
            'Funami\FuSetup\Model\ResourceModel\Grid'
        );
    }
}
