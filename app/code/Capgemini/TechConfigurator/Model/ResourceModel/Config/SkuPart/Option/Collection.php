<?php
/**
 * Capgemini_TechConfigurator
 *
 * @author    Eugene Nazarov <eugene.nazarov@capgemini.com>
 * @copyright 2022 Capgemini, Inc (www.capgemini.com)
 */
namespace Capgemini\TechConfigurator\Model\ResourceModel\Config\SkuPart\Option;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Option collection
 */
class Collection extends AbstractCollection
{
    /**
     * {@inheritdoc}
     */
    protected function _construct() : void
    {
        $this->_init('Capgemini\TechConfigurator\Model\Data\Config\SkuPart\Option',
            'Capgemini\TechConfigurator\Model\ResourceModel\Config\SkuPart\Option');
    }
}
