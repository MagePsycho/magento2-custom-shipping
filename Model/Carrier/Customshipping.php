<?php

namespace MagePsycho\Customshipping\Model\Carrier;

use Magento\Quote\Model\Quote\Address\RateRequest;

/**
 * @category   MagePsycho
 * @package    MagePsycho_Customshipping
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Customshipping extends \Magento\Shipping\Model\Carrier\AbstractCarrier implements
	\Magento\Shipping\Model\Carrier\CarrierInterface
{
	/**
	 * @var string
	 */
	protected $_code = 'magepsycho_customshipping';

	/**
	 * @var bool
	 */
	protected $_isFixed = true;

	/**
	 * @var \Magento\Shipping\Model\Rate\ResultFactory
	 */
	protected $_rateResultFactory;

	/**
	 * @var \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory
	 */
	protected $_rateMethodFactory;

	/**
	 * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
	 * @param \Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory $rateErrorFactory
	 * @param \Psr\Log\LoggerInterface $logger
	 * @param \Magento\Shipping\Model\Rate\ResultFactory $rateResultFactory
	 * @param \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory $rateMethodFactory
	 * @param array $data
	 */
	public function __construct(
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
		\Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory $rateErrorFactory,
		\Psr\Log\LoggerInterface $logger,
		\Magento\Shipping\Model\Rate\ResultFactory $rateResultFactory,
		\Magento\Quote\Model\Quote\Address\RateResult\MethodFactory $rateMethodFactory,
		array $data = []
	) {
		$this->_rateResultFactory = $rateResultFactory;
		$this->_rateMethodFactory = $rateMethodFactory;
		parent::__construct($scopeConfig, $rateErrorFactory, $logger, $data);
	}

	/**
	 * @param RateRequest $request
	 * @return \Magento\Shipping\Model\Rate\Result
	 * @SuppressWarnings(PHPMD.UnusedLocalVariable)
	 */
	public function collectRates(RateRequest $request)
	{
		if (!$this->getConfigFlag('active')) {
			return false;
		}

		/** @var \Magento\Shipping\Model\Rate\Result $result */
		$result = $this->_rateResultFactory->create();

		$shippingPrice = $this->getConfigData('price');

		$method = $this->_rateMethodFactory->create();

		$method->setCarrier($this->_code);
		$method->setCarrierTitle($this->getConfigData('title'));

		$method->setMethod($this->_code);
		$method->setMethodTitle($this->getConfigData('name'));

		$method->setPrice($shippingPrice);
		$method->setCost($shippingPrice);

		$result->append($method);

		return $result;
	}

	/**
	 * Get allowed shipping methods
	 *
	 * @return array
	 */
	public function getAllowedMethods()
	{
		return [$this->_code => $this->getConfigData('name')];
	}
}