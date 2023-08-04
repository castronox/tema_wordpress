<?php


/**
 * Registrar todas las acciones y filtros para el tema
 */

class ATR_CARGADOR {
    protected $actions;
    protected $filters;
    protected $shortcodes;

    public function __construct(){

        $this->actions      = [];
        $this->filters      = [];
        $this->shortcodes   = [];

    }

    public function add_action($hook, $component, $callback, $priority = 10, $accepted_args = 1){

        $this->actions = $this->add($this->actions, $hook, $component, $callback, $priority, $accepted_args);
    }

    public function add_filter($hook, $component, $callback, $priority = 10, $accepted_args = 1){

        $this->filters = $this->add($this->filters, $hook, $component, $callback, $priority, $accepted_args);
    }

    private function add($hook, $component, $callback, $priority, $accepted_args){

        $hooks[] = [
            'hook'              => $hook,
            'component'         => $component,
            'callback'          => $callback,
            'priority'          =>$priority,
            'accepted_args'     => $accepted_args
        ];

        return $hooks;
    }

    public function add_shortcodes($tag, $component, $callback){
        $this-> shortcodes = $this->add_s($this->shortcodes, $tag, $component, $callback);
    }

    private function add_s($shortcodes, $tag, $component, $callback){
        $shortcodes[] = [

            'tag'           => $tag,
            'component'     => $component,
            'callback'      => $callback
        ];

        return $shortcodes;
    }
}