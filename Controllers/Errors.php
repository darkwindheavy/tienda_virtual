<?php

class Errors extends Controllers {
    public function __construct() {
        parent::__construct();
        $this->views = new Views();
    }

    public function notFound() {
        $data = [
            'page_tag' => 'Error',
            'page_title' => 'Página no encontrada',
            'page_name' => 'error',
        ];
        $this->views->getView($this, "error", $data);
    }
}

