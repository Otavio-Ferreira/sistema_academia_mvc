<?php

class TreinoController extends Controller{

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

    public function index($id){

        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Aluno');
            exit;
        }

        $alunos = new Alunos();
        $treino = new Treino();

        $this->data['list_items'] = $alunos->getAluno($id);
        $this->data['list_treino'] = $treino->getTreino($id);

        $this->data['CSS'] = customCSS('styleTreino');
        $this->data['JS'] = customJS('add');

        $this->loadTemplateAdmin('Admin/Treino/index', $this->data);
    }

    public function show(){
        $this->data['nivel-1'] = "Treino";

        $alunos = new Alunos();

        if(isset($_POST['searchValue']) && !empty($_POST['searchValue'])){
            $serchValue = addslashes($_POST['searchValue']);
            $this->data['list_items'] = $alunos->getAlunoFilter($serchValue);
        }
        else{
            $this->data['list_items'] = $alunos->getAlunos();
        }

        $this->data['CSS'] = customCSS('styleTreino');

        $this->loadTemplateAdmin('Admin/Treino/show', $this->data);
    }

    public function showTreino($id){
        $this->data['nivel-1'] = "Treino";

        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Treino/show');
            exit;
        }

        $treino = new Treino();

        $this->data['list_treino'] = $treino->getTreino($id);
        $this->data['CSS'] = customCSS('styleTreino');
        
        foreach($this->data['list_treino'] as &$treino){ 

            $treino['nomeTreino'] = explode(',', $treino['nomeTreino']);
            $treino['serieTreino'] = explode(',', $treino['serieTreino']);
            $treino['repeticao'] = explode(',', $treino['repeticao']);

        }

        $this->data['CSS'] = customCSS('styleShowTreinos');

        $this->loadTemplateAdmin('Admin/Treino/showTreino', $this->data);
    }

    public function updateInfoTreino($id){
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

            header('Location: ' . BASE_URL . 'Treino/index/'.$id);
            exit;
        }
    }

    public function store($id){

        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Treino/index/'.$id);
            exit;
        }

        if(isset($_POST['diaSemana']) && !empty($_POST['diaSemana'])&& 
        isset($_POST['treino']) && !empty($_POST['treino']) && 
        isset($_POST['serie']) && !empty($_POST['serie']) &&
        isset($_POST['repeticao']) && !empty($_POST['repeticao'])){

            $dia = addslashes($_POST['diaSemana']);
            $treinos = implode(',', $_POST['treino']);
            $series = implode(',', $_POST['serie']);
            $repeticoes = implode(',', $_POST['repeticao']);

    
            //Mostrar:  var_dump(explode(',', $aaa));
            $treino = new Treino();
            $treino->setTreino($dia, addslashes($treinos), addslashes($series), addslashes($repeticoes), $id);

            // for($i = 0; $i < count($treinos); $i++){

            //     if(!empty($treinos[$i]) && !empty($series[$i]) && !empty($repeticoes[$i])) {

            //         $treino = new Treino();
            //         $treino->setTreino($dia, addslashes($treinos[$i]), addslashes($series[$i]), addslashes($repeticoes[$i]), $id);
            //         // echo 'Treino: '.$_POST['treino'][$i].', Series: '.$_POST['serie'][$i].', Repetições: '.$_POST['repeticao'][$i].'<br>';
            //     }

            // }


            header('Location: '.BASE_URL.'Treino/index/'.$id);
            exit;
        }
        else{
            header('Location: '.BASE_URL.'Treino/index/'.$id);
            exit;
        }
    }

    public function delete($idAluno, $idTreino){
        $idAluno = addslashes($idAluno);
        $idTreino = addslashes($idTreino);

        if (empty($idAluno) && !is_int($idAluno) && empty($idTreino) && !is_int($idTreino)) {
            header('Location: ' . BASE_URL . 'Treino/index/'.$idAluno);
            exit;
        }

        $treino = new Treino();
        $treino->deleteTreino($idAluno, $idTreino);

        header('Location: '.BASE_URL.'Treino/index/'.$idAluno);
    }
}