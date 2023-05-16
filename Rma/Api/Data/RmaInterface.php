<?php

namespace Codilar\Rma\Api\Data;

/**
 * Interface ConditionInterface
 * @package Codilar\Rma\Api\Data
 */
interface RmaInterface
{
    const ID = 'rma_id';
    const ORDER_ID = 'order_id';
    const QTY_RETURN = 'qty_return';
    const REASON = 'reason';
    const CONDITION = 'condition';
    const ITEM_ID = 'item_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Get Condition ID.
     *
     * @return int|null
     */
    public function getRmaId();

    /**
     * Set Condition ID.
     *
     * @param int $id
     * @return $this
     */
    public function setRmaId($id);

    /**
     * Get Condition name.
     *
     * @return string|null
     */
    public function getOrderId();

    /**
     * Set Condition name.
     *
     * @param string $name
     * @return $this
     */
    public function setOrderId($order_id);

    /**
     * Get additional data associated with the Condition.
     *
     * @return string|null
     */
    public function getAdditionalData();

    /**
     * Set additional data associated with the Condition.
     *
     * @param string $additionalData
     * @return $this
     */
    public function setAdditionalData($additionalData);
}
