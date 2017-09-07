<?php
/*
 * Turiknox_Hotjar

 * @category   Turiknox
 * @package    Turiknox_Hotjar
 * @copyright  Copyright (c) 2017 Turiknox
 * @license    https://github.com/Turiknox/magento2-hotjar/blob/master/LICENSE.md
 * @version    1.0.0
 */
namespace Turiknox\Hotjar\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;

class Hotjar extends Template
{
    /*
     * Hotjar enable config path
     */
    const XML_PATH_HJ_ENABLE = 'hotjar/general/enable';

    /**
     * Hotjar Site ID path
     */
    const XML_PATH_HJ_SITEID = 'hotjar/general/site_id';

    /**
     * Hotjar constructor.
     *
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Check if the Hotjar module is enabled in admin
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_scopeConfig->getValue(self::XML_PATH_HJ_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get Hotjar Site ID
     *
     * @return int
     */
    public function getHjSiteId()
    {
        return $this->_scopeConfig->getValue(self::XML_PATH_HJ_SITEID, ScopeInterface::SCOPE_STORE);
    }
}
