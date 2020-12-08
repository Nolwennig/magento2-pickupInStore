<?php

namespace Nolwennig\PickupInStore\Block\System\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

/**
 * Class ReductionAmounts Backend system config array field renderer
 */
class ReductionAmounts extends AbstractFieldArray
{
    /**
     * Initialise columns for 'Reduction Amounts'
     * Label is name of field
     * Class is storefront validation action for field
     *
     * @return void
     */
    protected function _construct()
    {
        $this->addColumn(
            'min_price',
            [
                'label' => __('Minimum Price'),
                'class' => 'validate-no-empty'
            ]
        );
        $this->addColumn(
            'reduction_amount',
            [
                'label' => __('Reduction Amount'),
                'class' => 'validate-no-empty'
            ]
        );
        $this->_addAfter = false;
        parent::_construct();
    }
}
