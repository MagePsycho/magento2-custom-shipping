<?php
namespace MagePsycho\Customshipping\Model;

/**
 * @category   MagePsycho
 * @package    MagePsycho_Customshipping
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Observer
{

	/**
	 * @var \MagePsycho\Customshipping\Helper\Data $helper
	 */
	protected $_helper;

	/**
	 * @var \Magento\Framework\App\Config\MutableScopeConfigInterface
	 */
	protected $_mutableConfig;

	/**
	 * @param \MagePsycho\Customshipping\Helper\Data $helper
	 * @param \Magento\Framework\App\Config\MutableScopeConfigInterface $mutableConfig
	 */
	public function __construct(
		\MagePsycho\Customshipping\Helper\Data $helper,
		\Magento\Framework\App\Config\MutableScopeConfigInterface $mutableConfig
	) {
		$this->_helper          = $helper;
		$this->_mutableConfig   = $mutableConfig;
	}

}