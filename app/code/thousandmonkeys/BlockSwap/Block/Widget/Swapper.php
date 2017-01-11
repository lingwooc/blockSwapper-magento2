<?php
namespace thousandmonkeys\BlockSwap\Block\Widget;

use Magento\Widget\Block\BlockInterface;

class Swapper extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    /**
    * @param \Magento\Catalog\Block\Product\Context $context
    * @param array $data
    */
    public function __construct(
    \Magento\Framework\View\Element\Template\Context $context
    )
    {
        parent::__construct($context);        
        $this->setTemplate('thousandmonkeys_BlockSwap::widget/swapper.phtml');
    }
    
    /**
    * Get visible id
    * @return String
    */
    public function getVisible() {
        return $this->getData('visible');
    }

    /**
    * Get hidden id
    * @return String
    */
    public function getHidden() {
        return $this->getData('hidden');
    }
}
?>