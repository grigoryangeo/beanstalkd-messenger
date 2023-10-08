<?php

namespace Symfony\Component\Messenger\Bridge\Beanstalkd\Transport;

use Symfony\Component\Messenger\Stamp\StampInterface;

/**
 * @author George Grigoryan <grigoryangeo@gmail.com>
 *
 * @internal
 *
 * @final
 */
final class PriorityStamp implements StampInterface
{
    private int $priority;

    /**
     * @param int $priority The priority
     */
    public function __construct(int $priority)
    {
        $this->priority = $priority;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }
}
