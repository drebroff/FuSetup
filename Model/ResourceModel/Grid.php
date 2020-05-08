<?php
/**
 *
 * Copyright © 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
// Funami/FuSetup/Model/ResourceModel/Grid.php
namespace Funami\FuSetup\Model\ResourceModel;

class Grid extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * init
     */
    protected function _construct()
    {
        $this->_init('funami_table', 'grid_id');
    }
}
