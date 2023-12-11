<?php

namespace BGCA_TEMPLATE\Inc\Helpers;

triat Singleton {
    public function __construct() {

    }

    public function __clone() {

    }

    final public static function get_instance() {
        static $instance = [];

        $called_class = get_called_class();

        if (!isset($instance [$called_class])) {
            $instance[ $called class] = new $called_class();

            do_action(sprintf('bgca_template_singleton_init%s', $called_class));
        }
        return $instance[ $called_class ];
    }
}