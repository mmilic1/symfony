<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Transport;

/**
 * @author Samuel Roze <samuel.roze@gmail.com>
 *
 * @experimental in 4.1
 */
interface ReceiverInterface
{
    /**
     * Receive some messages to the given handler.
     *
     * The handler will have, as argument, the received message. Note that this message
     * can be `null` if the timeout to receive something has expired.
     */
    public function receive(callable $handler) : void;

    /**
     * Stop receiving some messages.
     */
    public function stop(): void;
}
