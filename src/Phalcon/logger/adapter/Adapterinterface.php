<?php

namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Formatter\FormatterInterface;
use Phalcon\Logger\Item;

/**
 * Phalcon\Logger\AdapterInterface
 *
 * Interface for Phalcon\Logger adapters
 */
interface AdapterInterface
{
	/**
 	 * Adds a message in the queue
 	 */
	public function add(Item $item) : void;

	/**
 	 * Starts a transaction
 	 */
	public function begin() : AdapterInterface;

	/**
 	 * Closes the logger
 	 */
	public function close() : bool;

	/**
 	 * Commits the internal transaction
 	 */
	public function commit() : AdapterInterface;

	/**
	 * Returns the internal formatter
	 */
	public function getFormatter() : FormatterInterface;

	/**
 	 * Processes the message in the adapter
 	 */
	public function process(Item $item) : void;

	/**
 	 * Rollbacks the internal transaction
 	 */
	public function rollback() : AdapterInterface;

	/**
	 * Sets the message formatter
	 */
	public function setFormatter(FormatterInterface $formatter) : AdapterInterface;
}
