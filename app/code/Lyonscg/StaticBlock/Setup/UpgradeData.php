<?php

namespace Lyonscg\StaticBlock\Setup;

use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class UpgradeData implements UpgradeDataInterface
{
    private $blockFactory;

    public function __construct(BlockFactory $blockFactory)
    {
        $this->blockFactory = $blockFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $cmsBlock = $this->blockFactory->create()->load('copyright_links_block', 'identifier');

        if (!$cmsBlock->getId()) {
            $cmsBlockData = [
                'title' => 'Copyright Links Block',
                'identifier' => 'copyright_links_block',
                'content' => '',
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 0
            ];

            $this->blockFactory->create()->setData($cmsBlockData)->save();
        }
    }
}