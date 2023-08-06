<?php

class ATR_i18n{
    public function load_theme_textadmin(){

        $textdomain = "pruebas";

        load_theme_textdomain($textdomain, ATR_DIR_PATH . 'lang');

        $locale = apply_filters('theme_locale', is_main() ? get_user_locale() : get_locale(), $textdomain);
        
        load_textdomain($textdomain, get_theme_file_path("lang/$textdomain-$locale.mo"));
    }
}  