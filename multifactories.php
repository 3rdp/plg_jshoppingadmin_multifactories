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
        ?> <div id="hello" class="tab-pane "><table><?php
        $this->getHtmlFactories();
        ?></table></div> <?php
    }
    private function getHtmlFactories() {
        $db = JFactory::getDbo();
        $dbname = $db->quoteName('#__multifactories_crudfactories');
        $query = "SELECT * FROM $dbname";
        $db->setQuery($query);
        $result = $db->loadObjectList();
        // var_dump($result);
        // var_dump($dbname);
        foreach ($result as $factory) {
?>
<tr>
        <input class="inputbox wide" type="text" placeholder="<?=$factory->alias?>" />
</tr>
<?php
        }
    }
}
