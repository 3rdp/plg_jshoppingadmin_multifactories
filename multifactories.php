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
    function onDisplayProductEditTabsEndTab() {
        ?> <li><a href="#hello" data-toggle="tab">Lol</a></li> <?php
    }
    function onDisplayProductEditTabsEnd() {
        $factories = $this->getFactories();
        include "fields/form.tpl";
    }
    private function getFactories() {
        $db = JFactory::getDbo();
        $dbname = $db->quoteName('#__multifactories_crudfactories');
        $product_id = 20;
        $query = "SELECT * FROM " . $db->quoteName('#__multifactories_crudfactories') . " crud " .
            "LEFT JOIN " . $db->quoteName('#__multifactories_prices') . " prices " . 
            "ON prices.factory_id = crud.id AND prices.product_id = $product_id";
        $db->setQuery($query);
        $result = $db->loadObjectList();
        return $result;
    }
}
