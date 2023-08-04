<?php 
class ATR_Public{

    private $theme_name;
    private $version;


    public function __construct($theme_name, $version){


        $this->theme_name = $theme_name;
        $this->version = $version;
    }

    public function enqueue_styles($array){

        wp_enqueue_style(
            'normalize',
            get_template_directory_uri() . '/public/css/normalize.css', 
            array(),
            '8.0.1',
            'all'
        );
        
        wp_enqueue_style(
            'public-css',
            get_template_directory_uri() . '/public/css/atr-public.css', 
            array(),
            '1.0.0',
            'all'
        );
    
        wp_enqueue_style(
            'bootstrap-css',
            get_template_directory_uri() . '/helpers/bootstrap-5.3/css/bootstrap.min.css', 
            array(),
            '5.3.0',
            'all'
        );
            
    }
    
    
    
    function enqueue_scripts(){
        
        wp_enqueue_script(
            'public-js' ,
            get_template_directory_uri() . '/public/js/atr-public.js' ,
            ['jquery' , 'bootstrap-min'] ,
            '1.0.0' ,
            true
        );
    
        wp_enqueue_script(
            'bootstrap-min' ,
            get_template_directory_uri() . '/helpers/bootstrap-5.3/js/bootstrap.min.js' ,
            ['jquery'] ,
            '5.3.0' ,
            true
        );
    
    }
    
    
}