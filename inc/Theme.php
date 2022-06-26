<?php

namespace Includes;

class Theme
{

    static public function loadNav(){
        $nav_items = get_post(array(
            'post_type' => 'nav_menu_item'
        ));

        return $nav_items;
    }
}