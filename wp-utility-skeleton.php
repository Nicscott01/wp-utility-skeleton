<?php

/**
 *  Plugin Name: WP Utility Skeleton
 *  Author: Nic Scott
 *  Version: 0.1
 *  Description: Skeleton for Any Utility
 */


class WP_Utility_Skeleton {

    public static $instance = null;
    public static $title = 'Utility';


    /**
     *  Magic Constructor
     */
    public function __construct() {

        add_action( 'admin_menu', [ $this, 'admin_menu' ] );

    }



    /**
     *  Admin Menu
     */

    public function admin_menu() {

        add_menu_page( self::$title, self::$title, 'edit_posts', 'wp-utility/wp-utility.php', [$this, 'utility_page'], 'dashicons-hammer', 200 );

    }



    public function utility_page() {

        echo '<div class="wrap">';
        echo '<h1>' . self::$title . '</h1>';

        include __DIR__ . '/templates/utility-page.php';

        echo '</div>';
    }



    /**
     *  Singleton get instance
     */
    public static function get_instance() {

        if ( self::$instance == null  ) {

            self::$instance = new self;

        }

        return self::$instance;


    }




}


WP_Utility_Skeleton::get_instance();

?>