<?php
class HomeAlunoController extends Controller
{
  private $data = array();

  public function __construct()
  {
    $user = new Users();

    if (!$user->isLogged()) {
      header('Location: ' . BASE_URL . 'Login');
      exit;
    }
    else{
			$user->setLoggedUser();
			$this->data["name"] = $user->getName();
			$this->data["id_group"] = $user->getIdGroup();
		}

		if ($user->getIdGroup() == 1){
			header('Location: '.BASE_URL.'Perfil');
			exit;
		}
  }

  public function index()
  {
    $id = $_SESSION['sistema_academia'];
    $this->data['nivel-1'] = 'PerfilAluno';
    $this->data['CSS'] = customCSS('styleAluno');

    $alunos = new Alunos();

    $this->data['list_items'] = $alunos->getAluno($id);

    $this->loadTemplateAdmin('Aluno/blank', $this->data);
  }

  public function getAvaliacao($data)
  {
    $data = addslashes($data);
    $id = $_SESSION['sistema_academia'];
    $this->data['nivel-1'] = 'Avaliacao';
    $this->data['nivel-av'] = $data;

    $alunos = new Aluno();
    
    $this->data['list_items'] = $alunos->getAvaliacaoAluno($id);
    $this->data['list_avaliacao'] = $alunos->getAvaliacaoAlunoByData($id, $data);
    
    $this->data['CSS'] = customCSS('styleAluno');
    $this->loadTemplateAdmin('Aluno/showAvaliacao', $this->data);
  }

  public function getInfoTreino($idTreino)
  {
    $idTreino = addslashes($idTreino);
    $id = $_SESSION['sistema_academia'];
    $this->data['nivel-1'] = 'Treino';
    $this->data['nivel-t'] = $idTreino;


    $treino = new Treino();
    $aluno = new Alunos();

    $this->data['list_items'] = $aluno->getAluno($id);
    $this->data['list_info_treino'] = $treino->getInfoTreino($id);
    $this->data['list_treino'] = $treino->getTreino($idTreino);

    // foreach ($this->data['list_treino'] as &$treino) {

    //   $treino['nomeTreino'] = explode(',', $treino['nomeTreino']);
    //   $treino['serieTreino'] = explode(',', $treino['serieTreino']);
    //   $treino['repeticao'] = explode(',', $treino['repeticao']);
    // }
    
    $this->data['CSS'] = customCSS('styleAluno');
    $this->data['CSS'] = customCSS('styleShowTreinos');


    $this->loadTemplateAdmin('Aluno/showTreino', $this->data);
  }
}
