<?php

class ProductsController extends Controller{

    private $data = array();

    public function __construct()
    {
        $users = new Users();

        if(!$users->isLogged()){
            header("Location: ". BASE_URL. "Login");
            exit;
        }else{
            $users->setLoggedUser();
            $this->data['name'] = $users->getName();
        }
    }

    public function index(){
        

        $this->data['nivel-1'] = "Products";


        $products = new Products();

        $this->data['list_items'] = $products->getProducts();

        $this->loadTemplateAdmin('Admin/Products/index', $this->data);
    }
}