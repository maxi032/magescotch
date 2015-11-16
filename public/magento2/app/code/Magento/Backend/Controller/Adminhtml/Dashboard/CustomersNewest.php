<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Backend\Controller\Adminhtml\Dashboard;

class CustomersNewest extends AjaxBlock
{
    /**
     * Gets latest customers list
     *
     * @return \Magento\Framework\Controller\Result\Raw
     */
    public function executeInternal()
    {
        $output = $this->layoutFactory->create()
            ->createBlock('Magento\Backend\Block\Dashboard\Tab\Customers\Newest')
            ->toHtml();
        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents($output);
    }
}