<?php
declare(strict_types=1);

namespace Rysun\SpecificationAttribute\Controller\Adminhtml\SpecificationAttribute;

class Delete extends \Rysun\SpecificationAttribute\Controller\Adminhtml\SpecificationAttribute
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('specificationattribute_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\Rysun\SpecificationAttribute\Model\SpecificationAttribute::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Specificationattribute.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['specificationattribute_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Specificationattribute to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}

