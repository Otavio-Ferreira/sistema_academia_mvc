<?php 

class HomeController extends Controller{


  private $data = array();

	public function __construct(){
		$user = new Users();
		if (!$user->isLogged()) {
			header('Location: '.BASE_URL.'Login');
			exit;
		}else{
			if($_SESSION['TYPE'] == 'aluno') {
				header('Location: '.BASE_URL.'HomeAluno');
				exit;
			}
			$user->setLoggedUser();
			$this->data["name"] = $user->getName();
		}
	}


    public function index(){
			$this->data['nivel-1'] = 'Dashboard';

			$alunos = new Alunos();
			$home = new Home();

			if(isset($_POST['searchValue']) && !empty($_POST['searchValue'])){
				
				$searchValue = addslashes($_POST['searchValue']);

				$this->data['list_items'] = $alunos->getAlunoFilter($searchValue);

			}
			else{    
				
				$this->data['list_items'] = $alunos->getAlunos();
			
			}

			$this->data['total_registros'] = $home->getTotalRegistros();
			$this->data['total_pendencias'] = $home->getTotalPendencias();
			$this->data['total_pagos'] = $home->getTotalPagos();
			$this->data['balanco_estimado'] = $home->getBalancoEstimado();
			$this->data['balanco_atual'] = $home->getBalancoAtual();

      $this->loadTemplateAdmin('Admin/blank', $this->data);
    }

		public function getAlunoBySituation($situacao){
			$this->data['nivel-1'] = 'Dashboard';

			$home = new Home();
			$alunos = new Alunos();
			
			$this->data['list_items'] = $alunos->getAlunosBySituation($situacao);
			$this->data['total_registros'] = $home->getTotalRegistros();
			$this->data['total_pendencias'] = $home->getTotalPendencias();
			$this->data['total_pagos'] = $home->getTotalPagos();
			$this->data['balanco_estimado'] = $home->getBalancoEstimado();
			$this->data['balanco_atual'] = $home->getBalancoAtual();
			
      $this->loadTemplateAdmin('Admin/blank', $this->data);
		}
}