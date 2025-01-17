<?php
namespace Capgemini\WishListViewList\Helper;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku; 

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
     * @var Magento\CatalogInventory\Api\StockStateInterface
     */
    protected $stockState;

    private $productRepository; 

    /**
     * Output constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\CatalogInventory\Api\StockStateInterface $stockState
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\CatalogInventory\Api\StockStateInterface $stockState,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
    ) {
        $this->stockState = $stockState;
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }

    /**
     * Retrieve stock qty whether product
     *
     * @param int $productId
     * @param int $websiteId
     * @return float
     */
    public function getStockQty($productId, $websiteId = null)
    {
        return $this->stockState->getStockQty($productId, $websiteId);
    }

    public function loadMyProduct($sku)
    {
        return $this->productRepository->get($sku);
    }
}