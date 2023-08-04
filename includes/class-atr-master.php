<?php

class ATR_Master{

    protected $cargador;
    protected $theme_name;
    protected $version;

    public function __construct(){
        $this->theme_name = 'ATR_Pruebas';
        $this->version = '1.0.0';


    }

    private function cargar_dependencias(){

        /**
         * La Clase responsable de iterar las acciones y filtros del núcleo del tema
         */
        require_once ATR_DIR_PATH . 'includes/class-atr-cargador.php';

        /**
        * La clase responsable de definir la funcionalidad de la internacionalización del theme
        */
        require_once ATR_DIR_PATH . 'includes/class-atr-i18n.php';

        /**
        * La clase responsable de registrar menús y submenús en el área de administración.
        */
        require_once ATR_DIR_PATH . 'includes/class-atr-build-menupage.php';

        /**
        * La clase responsable de definir todas las acciones en el área de administración.
        */
        require_once ATR_DIR_PATH . 'admin/class-atr-admin.php';

        /**
        * La clase responsable de definir todas las acciones en el área del lado cliente/público.
        */
        require_once ATR_DIR_PATH . 'public/class-atr-public.php';
    }
}