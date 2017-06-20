<?php

class ShareOn_Facebook_Block_ButtonTest extends PHPUnit_Framework_TestCase
{
    use ProductDataProvider;

    protected $product;

    public function setUp()
    {
        Mage::init();
        Mage::app();

        $this->product = $this->createProduct();
        $this->product->save();

        Mage::register('product', $this->product);
    }

    /**
     * @test
     */
    public function mustDisplayButton()
    {
        $layout = Mage::app()->getLayout();

        $catalogBlock = $layout->createBlock('catalog/product_view')
            ->setProductId($this->product->getId())
            ->setTemplate('shareon/facebook/product/view.phtml');

        $buttonBlock = $layout->createBlock('shareon_facebook/button')
            ->setTemplate('shareon/facebook/button.phtml');

        $this->assertContains(
            $buttonBlock->toHtml(), 
            $catalogBlock->toHtml()
        );
    }

    public function tearDown()
    {
        $this->product->delete();
    }
}
