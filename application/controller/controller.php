<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageMethod = null)  //向 __constructor 添加了一个“ pageURI ”输入参数。
	//这将从“ mvc.php ”文件中接收控制器的名称。
	{
		// echo $pageURI;
		$this->load = new Load();
		$this->model = new Model();
		// Determine what page you are on
		$this->home();
	}
	// Load the home page mmethod — this method is loaded by default — http://localhost:8888/3D_Apps_2019/lab9/index.php/
	// The view here is my Coca Cola Virtual Museum, which s simply a repository of all the things we have done from lab 1 to Lab 8
    function home()
	{

		$this->load->view('viewHome');

	}
	
}
?>    