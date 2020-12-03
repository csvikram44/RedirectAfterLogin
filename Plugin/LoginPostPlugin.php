<?php
/**
 * Copyright © CsVikram. All rights reserved.
 */

namespace CsVikram\RedirectAfterLogin\Plugin;

/**
 * 
 */
class LoginPostPlugin
{
	protected $_storemanager;
	protected $_resultRedirect;

	public function __construct(\Magento\Store\Model\StoreManagerInterface $storemanager, \Magento\Framework\Controller\Result\Redirect $resultRedirect)
	{
		$this->_storemanager=$storemanager;
		$this->_resultRedirect=$resultRedirect;
	}
	
	public function afterExecute(\Magento\Customer\Controller\Account\LoginPost $subject, $result)
	{
		$redirectUrl= $this->_storemanager->getStore()->getBaseUrl();
		$this->_resultRedirect->setPath($redirectUrl);
		return $this->_resultRedirect;
	}
}