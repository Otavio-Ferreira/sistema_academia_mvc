<?php

class PerfilController extends Controller{

    private $data = array();

    public function __construct()
    {
        $users = new Users();

        if(!$users->isLogged()){
            header("Location: ". BASE_URL. "Login");
            exit;
        }else{
			$users->setLoggedUser();
			$this->data["name"] = $users->getName();
			$this->data["id"] = $users->getId();
			$this->data["id_group"] = $users->getIdGroup();
		}

		if ($users->getIdGroup() == 4){
			header('Location: '.BASE_URL.'HomeAluno');
			exit;
		}
    }

    public function index(){
        $this->data['nivel-1'] = "Perfil";
        $this->data['nivel-2'] = 'Perfil'; 

        $id = $this->data['id'];
        
        $this->data['CSS'] = customCSS('stylePerfil');
        $this->data['JS'] = '<script src="' . BASE_URL . 'Assets/js/eye.js" type="text/javascript"></script>';

        $perfil = new Perfil();

        $this->data['list_items'] = $perfil->getPerfil($id);

        $this->loadTemplateAdmin('Admin/Perfil/index', $this->data);
    }

    public function updateAdmin($id){
        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Perfil');
            exit;
        }

        if (
            isset($_POST['nome']) && !empty($_POST['nome']) &&
            isset($_POST['email']) && !empty($_POST['email'])
        ) {
           
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            
            $perfil = new Perfil();
            $perfil->upAdmin($id, $nome, $email);
            header('Location: ' . BASE_URL . 'Perfil');
            exit;
        }
    }

    public function updateAdminSenha($id){
        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Perfil');
            exit;
        }

        if (
            isset($_POST['newPassword']) && !empty($_POST['newPassword']) &&
            isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword'])
        ) {

            $newPassword = addslashes($_POST['newPassword']);
            $confirmPassword = addslashes($_POST['confirmPassword']);

            if($newPassword === $confirmPassword){

                $perfil = new Perfil();
                $perfil->upSenhaAdmin($id, $newPassword);
                header('Location: ' . BASE_URL . 'Perfil');
                exit;
            }
            else{
                header('Location: '.BASE_URL.'/Perfil');
                exit;
            }
        }
    }
}