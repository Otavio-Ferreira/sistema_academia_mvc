<?php

class AvaliacaoController extends Controller
{

  private $data = array();

  public function __construct()
  {
    $users = new Users();

    if (!$users->isLogged()) {
      header("Location: " . BASE_URL . "Login");
      exit;
    }
    else{
			$users->setLoggedUser();
			$this->data["name"] = $users->getName();
			$this->data["id_group"] = $users->getIdGroup();
      $this->data['id'] = $users->getId();
		}

		if ($users->getIdGroup() == 4){
			header('Location: '.BASE_URL.'HomeAluno');
			exit;
		}
    
  }

  public function index($id)
  {
    $this->data['nivel-1'] = 'Alunos';
    $this->data['nivel-2'] = 'Avaliação Física';

    $id = addslashes($id);

    if (empty($id) && !is_int($id)) {
      header('Location: ' . BASE_URL . 'Avaliacao');
      exit;
    }

    $alunos = new Alunos();
    $avaliacao = new Avaliacao();

    $this->data['list_items'] = $alunos->getAluno($id);
    $this->data['list_items_av'] = $avaliacao->getAvaliacoes($id);
    $this->data['CSS'] = customCSS('styleAvaliacao');

    $this->loadTemplateAdmin('Admin/Avaliacao/index', $this->data);
  }

  public function store($id)
  {

    $id = addslashes($id);

    if (empty($id) && !is_int($id)) {
      header('Location: ' . BASE_URL . 'Avaliacao');
      exit;
    }

    if (
      isset($_POST['dataAvaliacaoAtual']) && !empty($_POST['dataAvaliacaoAtual']) &&
      isset($_POST['pesoAtual']) && !empty($_POST['pesoAtual']) &&
      isset($_POST['alturaAtual']) && !empty($_POST['alturaAtual']) &&
      isset($_POST['cinturaAtual']) && !empty($_POST['cinturaAtual']) &&
      isset($_POST['quadrilAtual']) && !empty($_POST['quadrilAtual']) &&
      isset($_POST['coxaAtual']) && !empty($_POST['coxaAtual']) &&
      isset($_POST['gorduraAtual']) && !empty($_POST['gorduraAtual']) &&
      isset($_POST['observacaoAtual']) && !empty($_POST['observacaoAtual'])
    ) {

      $data = addslashes($_POST['dataAvaliacaoAtual']);
      $peso = addslashes($_POST['pesoAtual']);
      $altura = addslashes($_POST['alturaAtual']);
      $cintura = addslashes($_POST['cinturaAtual']);
      $quadril = addslashes($_POST['quadrilAtual']);
      $coxa = addslashes($_POST['coxaAtual']);
      $gordura = addslashes($_POST['gorduraAtual']);
      $observacoes = addslashes($_POST['observacaoAtual']);

      $avaliacao = new Avaliacao();
      $avaliacao->setTreino($id, $data, $peso, $altura, $cintura, $quadril, $coxa, $gordura, $observacoes);
      header('Location: ' . BASE_URL . 'Avaliacao/index/' . $id);
      exit;
    }
  }

  public function delete($idAv, $idAluno)
  {

    $idAv = addslashes($idAv);
    $idAluno = addslashes($idAluno);

    if (empty($idAv) && !is_int($idAv) && empty($idAluno) && !is_int($idAluno)) {
      header('Location: ' . BASE_URL . 'Avaliacao');
      exit;
    }

    $avaliacao = new Avaliacao();
    $avaliacao->deleteAvaliacao($idAv);
    header('Location: ' . BASE_URL . 'Avaliacao/index/' . $idAluno);
    exit;
  }
}
