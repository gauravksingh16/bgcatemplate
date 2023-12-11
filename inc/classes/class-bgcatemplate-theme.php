<?php
/**
 * Bootstraps the Theme
 * 
 * @package bgcatemplate
*/

namespace BGCA_TEMPLATE\Inc;
use BGCA_TEMPLATE\Inc\Traits\Singleton;

class BGCA_TEMPLATE {
    use Singleton;

    protected function __construct() {
        // load class
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();
        Sidebars::get_instance();
        Block_Patterns::get_instance();
        Block_Patterns::get_instance();
        Block_Patterns::get_instance
    }

    protected function set_hooks() {
        //actions and filters
    }
}