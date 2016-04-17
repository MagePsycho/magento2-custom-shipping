<?php
namespace MagePsycho\Customshipping\Block\System\Config\Form\Field;

use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * @category   MagePsycho
 * @package    MagePsycho_Customshipping
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Version extends \Magento\Config\Block\System\Config\Form\Field
{
	const EXTENSION_URL = 'http://www.magepsycho.com/extensions.html';

	/**
	 * @var \MagePsycho\Customshipping\Helper\Data $helper
	 */
	protected $_helper;

	/**
	 * @param \Magento\Backend\Block\Template\Context $context
	 * @param \MagePsycho\Customshipping\Helper\Data $helper
	 */
	public function __construct(
		\Magento\Backend\Block\Template\Context $context,
		\MagePsycho\Customshipping\Helper\Data $helper
	) {
		$this->_helper = $helper;
		parent::__construct($context);
	}


	/**
	 * @param AbstractElement $element
	 * @return string
	 */
	protected function _getElementHtml(AbstractElement $element)
	{
		$extensionVersion   = $this->_helper->getExtensionVersion();
		$versionLabel       = sprintf('<a href="%s" title="Custom Shipping" target="_blank">%s</a>', self::EXTENSION_URL, $extensionVersion);
		$element->setValue($versionLabel);

		return $element->getValue();
	}
}