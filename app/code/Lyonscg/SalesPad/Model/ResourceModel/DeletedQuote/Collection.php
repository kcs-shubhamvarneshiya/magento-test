<?php

namespace Lyonscg\SalesPad\Model\ResourceModel\DeletedQuote;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Lyonscg\SalesPad\Model\DeletedQuote::class,
            \Lyonscg\SalesPad\Model\ResourceModel\DeletedQuote::class
        );
    }
}
