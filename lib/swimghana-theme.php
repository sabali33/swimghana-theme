<?php

    class Swimghana
    {
        public static function load_part($path, $name, $args){
            get_template_part('/template-parts/'. $path, $name );
        }
    }
    