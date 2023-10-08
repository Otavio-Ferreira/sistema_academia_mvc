<?php 

class SiteController extends Controller{

    private $data = array();

	public function __construct(){
		// construct of class
	}

    public function index(){
		$this->data['level-1'] = 'WebSite';
        $this->data['information'] = 'Hello, my name is otavio';
        $this->data['about_me'] = 'asdcasdcdccqacadcadc';
        $this->data['CSS'] = customCSS('styleHome');


        $this->loadTemplateSite('Home/index', $this->data);
    }
}