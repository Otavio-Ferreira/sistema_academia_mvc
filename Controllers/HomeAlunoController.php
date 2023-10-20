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
    else {
      if($_SESSION['TYPE'] == 'admin') {
				header('Location: '.BASE_URL.'Home');
				exit;
			}
    }
  }

  public function index()
  {
    $id = $_SESSION['sistema_academia'];
    $this->data['nivel-1'] = 'Perfil';
    $this->data['CSS'] = customCSS('styleAluno');

    $alunos = new Aluno();

    $this->data['list_items'] = $alunos->getInfoAluno($id);

    $this->loadTemplateAluno('Aluno/blank', $this->data);
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
    $this->loadTemplateAluno('Aluno/showAvaliacao', $this->data);
  }

  public function getInfoTreino($idTreino)
  {
    $idTreino = addslashes($idTreino);
    $id = $_SESSION['sistema_academia'];
    $this->data['nivel-1'] = 'Treino';
    $this->data['nivel-t'] = $idTreino;


    $treino = new Treino();
    $aluno = new Aluno();

    $this->data['list_items'] = $aluno->getInfoAluno($id);
    $this->data['list_info_treino'] = $treino->getInfoTreino($id);
    $this->data['list_treino'] = $treino->getTreino($idTreino);

    // foreach ($this->data['list_treino'] as &$treino) {

    //   $treino['nomeTreino'] = explode(',', $treino['nomeTreino']);
    //   $treino['serieTreino'] = explode(',', $treino['serieTreino']);
    //   $treino['repeticao'] = explode(',', $treino['repeticao']);
    // }
    
    $this->data['CSS'] = customCSS('styleAluno');
    $this->data['CSS'] = customCSS('styleShowTreinos');


    $this->loadTemplateAluno('Aluno/showTreino', $this->data);
  }
}
