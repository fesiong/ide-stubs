<?php

namespace Phalcon\Session;

use InvalidArgumentException;
use RuntimeException;
use SessionHandlerInterface;

/**
 * Phalcon\Session
 *
 * Interface for the Phalcon\Session\Manager
 */
interface ManagerInterface
{
	const SESSION_ACTIVE   = 2;
	const SESSION_DISABLED = 0;
	const SESSION_NONE     = 1;

	/**
	 * Alias: Gets a session variable from an application context
	 */
	public function __get(string $key);

	/**
	 * Alias: Check whether a session variable is set in an application context
	 */
	public function __isset(string $key) : bool;

	/**
	 * Alias: Sets a session variable in an application context
	 */
	public function __set(string $key, $value) : void;

	/**
	 * Alias: Removes a session variable from an application context
	 */
	public function __unset(string $key);

	/**
	 * Check whether the session has been started
	 */
	public function exists() : bool;

	/**
	 * Destroy/end a session
	 */
	public function destroy() : void;

	/**
	 * Gets a session variable from an application context
	 */
	public function get(string $key, $defaultValue = null, bool $remove = false);

	/**
	 * Returns the session id
	 */
	public function getId() : string;

	/**
	 * Returns the stored session handler
	 */
	public function getHandler() : SessionHandlerInterface;

	/**
	 * Returns the name of the session
	 */
	public function getName() : string;

	/**
	 * Get internal options
	 */
	public function getOptions() : array;

	/**
	 * Check whether a session variable is set in an application context
	 */
	public function has(string $key) : bool;

	/**
	 * Removes a session variable from an application context
	 */
	public function remove(string $key);

	/**
	 * Sets a session variable in an application context
	 */
	public function set(string $key, $value) : void;

	/**
	 * Set the handler for the session
	 */
	public function setHandler(SessionHandlerInterface $handler) : ManagerInterface;

	/**
	 * Set session Id
	 */
	public function setId(string $id) : ManagerInterface;

	/**
	 * Set the session name. Throw exception if the session has started
	 * and do not allow poop names
	 *
	 * @param  string name
	 *
	 * @throws InvalidArgumentException
	 *
	 * @return Manager
	 */
	public function setName(string $name) : ManagerInterface;

	/**
	 * Sets session's options
	 *
	 * @param array options
	 */
	public function setOptions(array $options) : void;

	/**
	 * Returns the status of the current session.
	 */
	public function status() : int;

	/**
	 * Starts the session (if headers are already sent the session will not be
	 * started)
	 */
	public function start() : bool;

	/**
	 * Regenerates the session id using the handler.
	 */
	public function regenerateId($deleteOldSession = true) : ManagerInterface;

	/**
	 * Registers a handler with the session
	 */
	public function registerHandler(SessionHandlerInterface $handler) : bool;
}
