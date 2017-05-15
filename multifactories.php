<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Authentication.multifactories
 *
 * @copyright
 * @license     MIT
 */

defined('_JEXEC') or die;

/**
 * Multifactories plugin class.
 *
 * @since  2.5
 */
class plgJshoppingAdminMultifactories extends JPlugin{
	/**
	 * This method should handle any authentication and report back to the subject
	 *
	 * @param   array   $credentials  Array holding the user credentials
	 * @param   array   $options      Array of extra options
	 * @param   object  &$response    Authentication response object
	 *
	 * @return  void
	 *
	 * @since   1.5
	 * @link https://docs.joomla.org/Plugin/Events/User#onUserAuthenticate
	 */
	public function onBeforeDisplayEditProduct($credentials, $options, &$response){

        var_dump($credentials);
	}
}
