<?php

namespace Jackalope\Query\QOM;

use PHPCR\Query\QOM\NodeLocalNameInterface;

/**
 * {@inheritDoc}
 *
 * @api
 */
class NodeLocalName implements NodeLocalNameInterface
{
    /**
     * @var string
     */
    protected $selectorName;

    /**
     * Constructor
     *
     * @param string $selectorName
     */
    public function __construct($selectorName)
    {
        if (null === $selectorName) {
            throw new \InvalidArgumentException('Required argument selectorName may not be null.');
        }
        $this->selectorName = $selectorName;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getSelectorName()
    {
        return $this->selectorName;
    }
}
