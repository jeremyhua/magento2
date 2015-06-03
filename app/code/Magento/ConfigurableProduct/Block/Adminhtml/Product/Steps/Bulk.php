<?php
/**
 * Adminhtml block for fieldset of configurable product
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\ConfigurableProduct\Block\Adminhtml\Product\Steps;

class Bulk extends \Magento\Ui\Block\Component\StepsWizard\StepAbstract
{
    /**
     * {@inheritdoc}
     */
    public function getCaption()
    {
        return __('Bulk Images &amp; Prising');
    }

    /**
     * Get json data
     * @return string json
     */
    public function getJsonData()
    {
        return 'test';
    }
}
