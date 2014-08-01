<?php

    /**
     * Funções que criam as opções de administração do plugin
     */
        //Create Custom Post-Type menu
        function post_type_menu() {
            
            //Create a menu
            add_menu_page('Custom Post-Types', 'Portal Customization', 'manage_options', 'post-type', 'post_type_config');
        
            //Create submenu items
            add_submenu_page('post_type_main_menu', 'Gerenciar Post-Type', 'Gerenciar Post-Type', 'manage_options', 'gerenciar_post_type', 'gerenciar_post_type');
            
        }
        
    /*
     * General configurations
     */
        function post_type_config(){
            
            //Imports main function file
            importFile('pages/post-type', 'index.php');
        }
        
        function gerenciar_post_type(){
        
            //Imports main function file
            importFile('pages/post-type', 'gerenciar-post-type.php');
        
        }
        
     /*
      * Registers all actions used
      */
        //Activate the Post-Type Menu
        add_action( 'admin_menu', 'post_type_menu' );
?>