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
  }

  public function index($email)
  {
    $email = addslashes($email);
    $this->data['nivel-1'] = 'Perfil';
    $this->data['email'] = $email;
    $this->data['CSS'] = customCSS('styleAluno');

    $alunos = new Aluno();

    $this->data['list_items'] = $alunos->getInfoAluno($email);

    $this->loadTemplateAluno('Aluno/blank', $this->data);
  }

  public function getAvaliacao($id, $email)
  {
    $id = addslashes($id);
    $email = addslashes($email);

    if (empty($id) && !is_int($id) && empty($email) && !is_int($email)) {
      header('Location: ' . BASE_URL . 'Aluno');
      exit;
    }

    $this->data['email'] = $email;

    $this->data['CSS'] = customCSS('styleAluno');

    $alunos = new Aluno();

    $this->data['list_items'] = $alunos->getAvaliacaoAluno($id);

    $this->loadTemplateAluno('Aluno/showAvaliacao', $this->data);
  }

  public function getTreino($id, $email)
  {
    $id = addslashes($id);
    $email = addslashes($email);

    if (empty($id) && !is_int($id) && empty($email) && !is_int($email)) {
      header('Location: ' . BASE_URL . 'Aluno');
      exit;
    }

    $treino = new Treino();

    $this->data['list_treino'] = $treino->getTreino($id);

    foreach ($this->data['list_treino'] as &$treino) {

      $treino['nomeTreino'] = explode(',', $treino['nomeTreino']);
      $treino['serieTreino'] = explode(',', $treino['serieTreino']);
      $treino['repeticao'] = explode(',', $treino['repeticao']);
    }
    
    $this->data['CSS'] = customCSS('styleAluno');
    $this->data['CSS'] = customCSS('styleShowTreinos');
    $this->data['email'] = $email;


    $this->loadTemplateAluno('Aluno/showTreino', $this->data);
  }
}
