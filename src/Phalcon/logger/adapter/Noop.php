<?php

namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Item;

/**
 * Phalcon\Logger\Adapter\Noop
 *
 * Adapter to store logs in plain text files
 *
 *<code>
 * $logger = new \Phalcon\Logger\Adapter\Noop();
 *
 * $logger->log(\Phalcon\Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *
 * $logger->close();
 *</code>
 */
class Noop extends AbstractAdapter
{
	/**
	 * Closes the stream
	 */
	public function close() : bool
	{
	}

	/**
	 * Processes the message i.e. writes it to the file
	 */
	public function process(Item $item) : void
	{
	}
}
