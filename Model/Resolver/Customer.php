<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\RewardPointsGraphQl\Model\Resolver;

use Lof\RewardPoints\Model\Transaction;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Lof\RewardPoints\Model\Customer as CustomerRewardPoints;
use Lof\RewardPoints\Model\ResourceModel\Transaction\CollectionFactory;
/**
 * Class Customer
 * @package Lof\RewardPointsGraphQl\Model\Resolver
 */
class Customer implements ResolverInterface
{


    /**
     * @var CustomerRewardPoints
     */
    private $customer;
    /**
     * @var CollectionFactory
     */
    private $transactionCollection;

    /**
     * EarningRules constructor.
     * @param CustomerRewardPoints $customer
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CustomerRewardPoints $customer,
        CollectionFactory $collectionFactory
    )
    {
        $this->customer = $customer;
        $this->transactionCollection = $collectionFactory;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        if (!$args['customer_id']) {
            throw new GraphQlInputException(__('Customer Id is required.'));
        }
        $customer = $this->customer->load($args['customer_id'],'customer_id');
        $transactions = $this->transactionCollection->create()
            ->addFieldToFilter('customer_id',$args['customer_id'])
            ->addFieldToFilter(['action', 'status'],[
                ['neq' => Transaction::ADMIN_ADD_TRANSACTION],
                ['neq' => Transaction::STATE_PROCESSING]
            ]);
        $data = $customer->getData();
        $data['transactions']['items'] = $transactions->getData();
        $data['transactions']['total_count'] = $transactions->getSize();
        return $data;
    }
}
