<?php

namespace Magneto\Reindex\Controller\Adminhtml;

abstract class Indexer extends \Magento\Backend\App\Action
{
    /**
     * Check ACL permissions
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        switch ($this->_request->getActionName()) {
            case 'reindexOnTheFly':
                return $this->_authorization->isAllowed('Magento_Indexer::changeMode');
        }

        return false;
    }
}
