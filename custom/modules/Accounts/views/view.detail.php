<?php
/**
 * Created by PhpStorm.
 * User: Sai
 * Date: 2019-03-22
 * Time: 13:27
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');
class AccountsViewDetail extends ViewDetail{
    function display()
    {
        $this->dv->defs['templateMeta']['form']['buttons'][99] = array (
        'customCode' => '<input 
                                id="view_relationship_tree" 
                                title="View Relationship Tree" 
                                type="submit"  
                                class="button"
                                name="view_relationship_tree" 
                                value="View Relationship Tree">'
        );

        parent::display();
    }
}