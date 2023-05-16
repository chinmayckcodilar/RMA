<?php

namespace Codilar\Rma\Api\Data;

/**
 * Interface StatusInterface
 * @package Codilar\Rma\Api\Data
 */
interface StatusInterface
{
    /**
     * Constants for keys of data array.
     */
    const STATUS_ID = 'status_id';
    const NAME = 'name';
    const CODE = 'code';

    /**
     * Get Status ID.
     *
     * @return int|null
     */
    public function getStatusId();

    /**
     * Set Status ID.
     *
     * @param int $statusId
     * @return $this
     */
    public function setStatusId($statusId);

    /**
     * Get Status Name.
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set Status Name.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get Status Code.
     *
     * @return string|null
     */
    public function getCode();

    /**
     * Set Status Code.
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code);
}
