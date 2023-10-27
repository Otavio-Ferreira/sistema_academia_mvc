<?php

class TreinoController extends Controller
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
			$this->data["id_group"] = $users->getIdGroup();
			$this->data["name"] = $users->getName();
		}

		if ($users->getIdGroup() == 4){
			header('Location: '.BASE_URL.'HomeAluno');
			exit;
		}
    }

    public function index($id)
    {
        $this->data['nivel-1'] = 'Alunos';
        $this->data['nivel-2'] = 'Treino do aluno';

        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Aluno');
            exit;
        }

        $alunos = new Alunos();
        $treino = new Treino();

        $this->data['list_items'] = $alunos->getAluno($id);
        $this->data['list_treino'] = $treino->getInfoTreino($id);

        $this->data['CSS'] = customCSS('styleTreino');
        $this->data['JS'] = customJS('add');

        $this->loadTemplateAdmin('Admin/Treino/index', $this->data);
    }

    public function show($idAluno, $idTreino)
    {
        $this->data['nivel-1'] = 'Alunos';
        $this->data['nivel-2'] = 'Treino do aluno';
        
        $idAluno = addslashes($idAluno);
        $idTreino = addslashes($idTreino);
        
        $this->data['id_info_treino'] = $idTreino;

        if (empty($idAluno) && !is_int($idAluno) && empty($idTreino) && !is_int($idTreino)) {
            header('Location: ' . BASE_URL . 'Aluno');
            exit;
        }
        
        $alunos = new Alunos();
        $treino = new Treino();

        $this->data['list_items'] = $alunos->getAluno($idAluno);
        $this->data['list_Info_treino'] = $treino->getInfoTreinoByIdTreino($idTreino);
        $this->data['list_treino'] = $treino->getTreino($idTreino);

        $this->data['CSS'] = customCSS('styleTreino');
        $this->data['JS'] = customJS('add');

        $this->loadTemplateAdmin('Admin/Treino/create', $this->data);
    }

    public function showTreino($id)
    {
        $this->data['nivel-1'] = "Treino";

        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Treino/show');
            exit;
        }

        $treino = new Treino();

        $this->data['list_treino'] = $treino->getTreino($id);
        $this->data['CSS'] = customCSS('styleTreino');

        foreach ($this->data['list_treino'] as &$treino) {

            $treino['nomeTreino'] = explode(',', $treino['nomeTreino']);
            $treino['serieTreino'] = explode(',', $treino['serieTreino']);
            $treino['repeticao'] = explode(',', $treino['repeticao']);
        }

        $this->data['CSS'] = customCSS('styleShowTreinos');

        $this->loadTemplateAdmin('Admin/Treino/showTreino', $this->data);
    }

    public function updateInfoTreino($id)
    {
        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Aluno');
            exit;
        }

        if (
            isset($_POST['personal']) && !empty($_POST['personal']) &&
            isset($_POST['objetivo']) && !empty($_POST['objetivo']) &&
            isset($_POST['level']) && !empty($_POST['level'])
        ) {
            $personal = addslashes($_POST['personal']);
            $objetivo = addslashes($_POST['objetivo']);
            $level = addslashes($_POST['level']);

            $treino = new Treino();
            $treino->upAlunoInfoTreino($id, $personal, $objetivo, $level);

            header('Location: ' . BASE_URL . 'Treino/index/' . $id);
            exit;
        }
    }

    public function storeInfoTreino($id)
    {
        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Treino/index/' . $id);
            exit;
        }

        if (
            isset($_POST['diaSemana']) && !empty($_POST['diaSemana'])
        ) {

            $dia = addslashes($_POST['diaSemana']);

            $treino = new Treino();
            $treino->setInfoTreino($dia, $id);

            header('Location: ' . BASE_URL . 'Treino/index/' . $id);
            exit;
        } else {
            header('Location: ' . BASE_URL . 'Treino/index/' . $id);
            exit;
        }
    }

    public function store($idAluno, $idTreino)
    {

        $idAluno = addslashes($idAluno);
        $idTreino = addslashes($idTreino);

        if (empty($idAluno) && !is_int($idAluno) && empty($idTreino) && !is_int($idTreino)) {
            header('Location: ' . BASE_URL . 'Aluno');
            exit;
        }

        if (
            isset($_POST['treino']) && !empty($_POST['treino']) &&
            isset($_POST['serie']) && !empty($_POST['serie']) &&
            isset($_POST['repeticao']) && !empty($_POST['repeticao'])
        ) {

            $treinos = $_POST['treino'];
            $series = $_POST['serie'];
            $repeticoes = $_POST['repeticao'];

            $treino = new Treino();

            for ($i = 0; $i < count($treinos); $i++) {

                if (!empty($treinos[$i]) && !empty($series[$i]) && !empty($repeticoes[$i])) {

                    $treino->setTreino(addslashes($treinos[$i]), addslashes($series[$i]), addslashes($repeticoes[$i]), $idTreino);
                    // echo 'Treino: '.$_POST['treino'][$i].', Series: '.$_POST['serie'][$i].', Repetições: '.$_POST['repeticao'][$i].'<br>';
                }
            }

            header('Location: '.BASE_URL.'Treino/show/'.$idAluno.'/'.$idTreino);
            exit;
        } else {
            header('Location: '.BASE_URL.'Treino/show/'.$idAluno.'/'.$idTreino);
            exit;
        }
    }

    public function delete($idAluno, $idTreino)
    {
        $idAluno = addslashes($idAluno);
        $idTreino = addslashes($idTreino);

        if (empty($idAluno) && !is_int($idAluno) && empty($idTreino) && !is_int($idTreino)) {
            header('Location: ' . BASE_URL . 'Treino/index/' . $idAluno);
            exit;
        }

        $treino = new Treino();
        $treino->deleteAll($idTreino);

        header('Location: ' . BASE_URL . 'Treino/index/' . $idAluno);
    }

    public function deleteTreino($idAluno, $idTreino, $id){
        $idAluno = addslashes($idAluno);
        $idTreino = addslashes($idTreino);
        $id = addslashes($id);

        if (empty($idAluno) && !is_int($idAluno) && empty($idTreino) && !is_int($idTreino) && empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Treino/show/' . $idAluno. '/'. $idTreino .'/'. $id);
            exit;
        }

        $treino = new Treino();
        $treino->deleteTreino($id);
        header('Location: '.BASE_URL.'Treino/show/'.$idAluno.'/'.$idTreino);
        exit;
    }
}
