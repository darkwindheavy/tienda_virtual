<?php
class Dashboard extends Controllers {
    protected $views;

    public function __construct() {
        parent::__construct();
        $this->views = new Views();
    }

    public function index() {
        $this->dashboard();
    }

    public function dashboard() {
        $data = [
            'page_id' => 2,
            'page_tag' => 'Dashboard - Tienda Virtual',
            'page_title' => 'Dashboard - Tienda Virtual',
            'page_name' => 'dashboard',
        ];
        $this->views->getView('Dashboard', 'dashboard', $data); // Renderiza la vista 'dashboard' del dashboard
    }
}

