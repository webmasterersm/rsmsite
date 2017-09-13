<?php

/* Collections of walker classes */

    /*

        wp_nav_menu()

        <dic class="menu-container">
            <ul> // Start_lvl()
                <li>
                    <a>
                        <span></span> // Start_el()
                    </a>
                    <ul>
                </li> // Start_el() //End_el()
                <li><a>link</a></li>
                <li><a>link</a></li>
                <li><a>link</a></li>
            </ul> // End_lvl
        </div>

    */

class Walker_Nav_Primary extends Walker_Nav_menu {
    
    function start_lvl( &$output, $depth ) { // <ul>
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0 ) ' sub-menu' : '';
        $output .= "\n$indent<ul id=\"dropdown1\" class=\"dropdown-content  depth_$depth\">\n";
    }
    
    function start_el() { // <li> <a> <span>
        
    }
    
//    function end_el() { // Closing </li> </a> </span>
//        
//    }
//    
//    function end_lvl() { // Closing </ul>
//        
//    }
    
}
