<?php
class Roles extends Controllers {
    protected $views;

    public function __construct() {
        parent::__construct();
        $this->views = new Views();
    }

    public function index() {
        $this->roles();
    }

    public function roles() {
        $data = [
            'page_id' => 3,
            'page_tag' => 'Roles Usuario',
            'page_title' => 'Rol Usuario',
            'page_name' => 'Roles Usuario <small> Tienda Virtual</small>',
        ];
        $this->views->getView('Roles', 'roles', $data); // Renderiza la vista 'dashboard' del dashboard
    }
}