<?php

namespace League\Event\EventBundle\Tests\Stub;

use League\Event\AbstractListener;
use League\Event\EventInterface;

class ValidListener extends AbstractListener
{
    /**
     * @inheritdoc
     */
    public function handle(EventInterface $event)
    {
        // NOOP
    }
}