<?php
class Home extends Controllers {
    protected $views;

    public function __construct() {
        parent::__construct();
        $this->views = new Views();
    }

    public function index() {
        $this->home();
    }

    public function home() {
        $data = [
            'page_id' => 1,
            'page_tag' => 'Home',
            'page_title' => 'Página principal',
            'page_name' => 'home',
            'page_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.'
        ];
        $this->views->getView('Home', 'home', $data);
    }
}



