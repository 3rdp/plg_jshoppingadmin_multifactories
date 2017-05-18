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
    function onBeforeDisplaySaveProduct($post, $product) {
        $product_id = $post['product_id'];
        $multifactories = $post['multifactories'];
        foreach ($multifactories as $factory_id => $price) {
            $this->saveFactories($product_id, $factory_id, $price);
        }
    }
    function onDisplayProductEditTabsEndTab() {
        ?> <li><a href="#multifactories" data-toggle="tab">Заводы</a></li> <?php
    }
    function onDisplayProductEditTabsEnd() {
        $factories = $this->getFactories();
        include "fields/form.tpl";
    }
    private function getFactories() {
        $db = JFactory::getDbo();
        $crudfactories  = $db->quoteName('#__multifactories_crudfactories');
        $pricesTable         = $db->quoteName('#__multifactories_prices');
        $product_id = 20;
        $query = "SELECT * FROM $crudfactories crud 
            LEFT JOIN $pricesTable prices  
            ON prices.factory_id = crud.id AND prices.product_id = $product_id";
        $db->setQuery($query);
        $result = $db->loadObjectList();
        return $result;
    }
    private function saveFactories($product_id, $factory_id, $price) {
        $db = JFactory::getDbo();
        $pricesTable = $db->quoteName('#__multifactories_prices');
        if (!$price) return false;
        $query = "INSERT INTO $pricesTable
            VALUES ($product_id, $factory_id, $price)
            ON DUPLICATE KEY UPDATE `price` = $price"; 
        $db->setQuery($query);
        $db->execute();
    }
}
