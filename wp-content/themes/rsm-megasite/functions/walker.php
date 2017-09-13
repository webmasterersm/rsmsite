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
    
    function start_lvl( &$output, $depth = 0 ) { // <ul>
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "<ul id=\"dropdown1\" class=\"dropdown-content  depth_$depth\">\n";
        
    }
    
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) { // <li> <a> <span>
        
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        
        $li_attributes = 'data-activates="dropdown1"';
        
        $class_names = $value = '';
        
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        $classes[] = ($args->walker->has_children) ? 'dropdown1' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'menu-item-' . $item->ID;
        
        if ( $depth && $args->walker->has_children ) {
            $classes [] = 'dropdown1';
        }
        
        $class_names = join( ' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu_item_' . $item->ID, $item, $args);
        
        $id = strlen( $id ) ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= $indent . '<li' . $id . $class_names . '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $attributes .= ( $args->walker->has_children ) ? ' class="dropdown-button" data-activates="dropdown1"' : '';
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= ( $depth == 0 && $args->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        
    }
    
   /* function end_el() { // Closing </li> </a> </span>
     
    }
    
    function end_lvl() { // Closing </ul>
      
    }*/
    
}
