<?php 

class HomeController extends Controller{


  private $data = array();

	public function __construct(){
		$user = new Users();
		$home = new Home();
		if (!$user->isLogged()) {
			header('Location: '.BASE_URL.'Login');
			exit;
		}
		else{
			$user->setLoggedUser();
			$this->data["name"] = $user->getName();
			$this->data["id_group"] = $user->getIdGroup();
			$this->data['list_notificacoes'] = $home->getNotificacoes();
			$this->data['total_notificacoes'] = $home->getTotalNotificacoes();
		}

		if ($user->getIdGroup() == 4){
			header('Location: '.BASE_URL.'HomeAluno');
			exit;
		}
	}


    public function index(){
			$this->data['nivel-1'] = 'Dashboard';
			$this->data['nivel-2'] = 'Dashboard';

			$alunos = new Alunos();
			$home = new Home();

			if(isset($_POST['searchValue']) && !empty($_POST['searchValue'])){
				
				$searchValue = addslashes($_POST['searchValue']);

				$this->data['list_items'] = $alunos->getAlunoFilter($searchValue);

			}
			else{    
				
				$this->data['list_items'] = $alunos->getAlunos();
			
			}

			/* Gerar mensalidade e notificacoes*/ 
			$dataSistema = date('Y-m-d');
			$mesSistema = date('m');
			$anoSistema = date('Y');
			// $dataVerificacao;
			foreach ($this->data['list_items'] as $item) {
				if($item['inscricao']){
					$diaInscricao = date('d', strtotime($item['inscricao']));
					$dataVerificacao = $anoSistema.'-'.$mesSistema.'-'.$diaInscricao;

					// Se nao existir uma linha com a data de verificacao para cada id
					if(!$home->verifyMensalidade($dataVerificacao, $item['id'])){
						if($dataSistema >= $dataVerificacao){
							$alunos->addMensalidade(date($dataVerificacao), $item['mensalidade'], 0, $item['id']);
							$home->setNotificacao(1, $item['id']);
						}
					}
					// echo "Data Sitema: ".$dataS-istema."/Data verificar: ".$dataVerificacao.'<hr>';
				}
					
			}
			
			/* Fim */
			
			$this->data['total_registros'] = $home->getTotalRegistros();
			$this->data['total_pendencias'] = $home->getTotalPendencias();
			$this->data['total_pagos'] = $home->getTotalPagos();
			$this->data['balanco_estimado'] = $home->getBalancoEstimado();
			$this->data['balanco_atual'] = $home->getBalancoAtual();

      $this->loadTemplateAdmin('Admin/blank', $this->data);
    }

		public function getAlunoBySituation($situacao){
			$this->data['nivel-1'] = 'Dashboard';
			$this->data['nivel-2'] = 'Dashboard';


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