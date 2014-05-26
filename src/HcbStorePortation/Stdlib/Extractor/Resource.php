<?php
namespace HcbStorePortation\Stdlib\Extractor;

use HcbStorePortation\Entity\Order\Product as OrderProductEntity;
use Zf2Libs\Stdlib\Extractor\ExtractorInterface;
use Zf2Libs\Stdlib\Extractor\Exception\InvalidArgumentException;

use HcbStorePortation\Entity\Order as OrderEntity;

class Resource implements ExtractorInterface
{
    /**
     * Extract values from an object
     *
     * @param  OrderEntity $order
     * @throws \Zf2Libs\Stdlib\Extractor\Exception\InvalidArgumentException
     * @return array
     */
    public function extract($order)
    {
        if (!$order instanceof OrderEntity) {
            throw new InvalidArgumentException("Expected HcbStorePortation\\Entity\\Order object, invalid object given");
        }

        $updatedTimestamp = $order->getCreatedTimestamp()->format('Y-m-d H:i:s');

        $products = array();
        /* @var $orderProductEntity OrderProductEntity */
        foreach ($order->getProduct() as $orderProductEntity) {
            $title = $orderProductEntity->getProduct()->getLocalized()->first()->getTitle();
            $count = $orderProductEntity->getCount();
            $products[] = $title.' x '.$count;
        }

        return array('id'=>$order->getId(),
                     'status' => $order->getStatus(),
                     'products' => join("\n", $products),
                     'timestamp'=>$updatedTimestamp);
    }
}
