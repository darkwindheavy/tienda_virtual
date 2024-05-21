<?php 
	
	class Controllers
	{
		// Definir las propiedades views y model
		protected $views;
		protected $model;

		public function __construct()
		{
			$this->views = new Views(); // Inicializar la propiedad views
			$this->loadModel(); // Cargar el modelo
		}

		public function loadModel()
		{
			//HomeModel.php
			$model = get_class($this)."Model";
			$routClass = "Models/".$model.".php";
			if(file_exists($routClass)){
				require_once($routClass);
				$this->model = new $model(); // Inicializar la propiedad model
			}
		}
	}


