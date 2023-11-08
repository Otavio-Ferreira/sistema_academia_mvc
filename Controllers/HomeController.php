<?php 

class HomeController extends Controller{


  private $data = array();

	public function __construct(){
		$user = new Users();
		if (!$user->isLogged()) {
			header('Location: '.BASE_URL.'Login');
			exit;
		}
		else{
			$user->setLoggedUser();
			$this->data["name"] = $user->getName();
			$this->data["id_group"] = $user->getIdGroup();
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
			$dataSistema = date('d-m-Y');
			$mesAnoSistema = date('m-Y');
			// $dataVerificacao;
			foreach ($this->data['list_items'] as $item) {
				if($item['inscricao']){
					$diaInscricao = date('d', strtotime($item['inscricao']));
					$dataVerificacao = $diaInscricao.'-'.$mesAnoSistema;

					// Se nao existir uma linha com a data de verificacao para cada id
					if(){
						if($dataSistema >= $dataVerificacao){
							echo 'Mensalidade vencida';
						}
						else{
							echo 'Mensalidade em dias';
						}
					}
					// echo "Data Sitema: ".$dataS-istema."/Data verificar: ".$dataVerificacao.'<hr>';
				}
					
			}
			// echo $dataSistema;
			exit;
			
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