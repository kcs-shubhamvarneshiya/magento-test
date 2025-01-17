<?php
namespace Capgemini\CustomHeight\Block\Adminhtml\System\Config\Form\Field;

class RoomConfiguration extends \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray
{
    /**
     * @var \Magento\Framework\Data\Form\Element\Factory
     */
    protected $_elementFactory;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Data\Form\Element\Factory $elementFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Data\Form\Element\Factory $elementFactory,
        array $data = []
    )
    {
        $this->_elementFactory  = $elementFactory;
        parent::__construct($context,$data);
    }
    protected function _construct()
    {
        $this->addColumn('room_name', ['label' => __('Room Title')]);
        $this->addColumn('measure_1', ['label' => __('Label For Measure 1')]);
        $this->addColumn('measure_2', ['label' => __('Label For Measure 2')]);
        $this->addColumn('measure_3', ['label' => __('Label For Measure 3')]);
        $this->addColumn('tip', ['label' => __('Tip'),]);
        $this->addColumn('tip_image', ['label' => __('Tip Image Path'),]);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
        parent::_construct();
    }

}
