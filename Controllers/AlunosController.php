<?php

class AlunosController extends Controller
{

    private $data = array();
    private $alunos;

    public function __construct()
    {
        $users = new Users();


        if (!$users->isLogged()) {
            header("Location: " . BASE_URL . "Login");
            exit;
        } else {
            $users->setLoggedUser();
            $this->data["name"] = $users->getName();
            $this->data["id_group"] = $users->getIdGroup();
            $this->alunos = new Alunos();
        }

        if ($users->getIdGroup() == 4) {
            header('Location: ' . BASE_URL . 'HomeAluno');
            exit;
        }
    }

    public function index()
    {

        $this->data['nivel-1'] = "Alunos";
        $this->data['nivel-2'] = "Alunos";

        if (isset($_POST['searchValue']) && !empty($_POST['searchValue'])) {
            $searchValue = addslashes($_POST['searchValue']);

            $this->data['list_items'] = $this->alunos->getAlunoFilter($searchValue);
        } else {
            $this->data['list_items'] = $this->alunos->getAlunos();
        }


        $this->data['CSS'] = customCSS('styleAluno');
        $this->data['JS'] = customJS('search');
        $this->data['JS'] .= customJS('datatables');

        $this->data['JS'] .= '
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Datatables Responsive
				$("#example2").DataTable({
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
				});
                
			});
		</script>';

        $this->loadTemplateAdmin('Admin/Aluno/index', $this->data);
    }

    public function create($id)
    {
        $this->data['nivel-1'] = "Alunos";
        $this->data['nivel-2'] = "Adicionar mais informações";

        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }
        
        if ($this->alunos->getVerify($id)) {
            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }

        $alunos = new Alunos();

        $this->data['list_items'] = $alunos->getAluno($id);

        $this->data['CSS'] = customCSS('styleCadAluno');

        $this->loadTemplateAdmin('Admin/Aluno/create', $this->data);
    }

    public function show($id)
    {
        $this->data['nivel-1'] = 'Alunos';
        $this->data['nivel-2'] = 'Editar aluno';
        
        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }

        $list_items = $this->alunos->getAluno($id);

        if (empty($list_items)) {
            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }

        $this->data['list_items'] = $list_items;

        $this->data['CSS'] = customCSS('styleCadAluno');
        $this->data['JS'] = customJS('eye');

        $this->loadTemplateAdmin('Admin/Aluno/show', $this->data);
    }


    public function store($id)
    {
        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }

        if (
            isset($_POST['nome']) && !empty($_POST['nome']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['idade']) && !empty($_POST['idade']) &&
            isset($_POST['endereco']) && !empty($_POST['endereco']) &&
            isset($_POST['situacao']) && !empty($_POST['situacao']) &&
            isset($_POST['telefone']) && !empty($_POST['telefone']) &&
            isset($_POST['mensalidade']) && !empty($_POST['mensalidade']) &&
            isset($_POST['inscricao']) && !empty($_POST['inscricao']) &&
            isset($_POST['genero']) && !empty($_POST['genero'])
        ) {

            $idade = addslashes($_POST['idade']);
            $endereco = addslashes($_POST['endereco']);
            $situacao = addslashes($_POST['situacao']);
            $telefone = addslashes($_POST['telefone']);
            $mensalidade = addslashes($_POST['mensalidade']);
            $inscricao = addslashes($_POST['inscricao']);
            $genero = addslashes($_POST['genero']);
            $senha = addslashes($_POST['senha']);

            $this->alunos->setAluno($id, $idade, $endereco, $situacao, $telefone, $mensalidade, $inscricao, $genero, $senha);
            $this->alunos->addMensalidade($inscricao, $mensalidade, 1, $id);
            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }

        header('Location: ' . BASE_URL . 'Alunos');
        exit;
    }

    public function update($id)
    {
        $id = addslashes($id);

        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }

        if (
            isset($_POST['nome']) && !empty($_POST['nome']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['idade']) && !empty($_POST['idade']) &&
            isset($_POST['endereco']) && !empty($_POST['endereco']) &&
            isset($_POST['situacao']) && !empty($_POST['situacao']) &&
            isset($_POST['telefone']) && !empty($_POST['telefone']) &&
            isset($_POST['mensalidade']) && !empty($_POST['mensalidade']) &&
            isset($_POST['inscricao']) && !empty($_POST['inscricao']) &&
            isset($_POST['genero']) && !empty($_POST['genero'])
        ) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $idade = addslashes($_POST['idade']);
            $endereco = addslashes($_POST['endereco']);
            $situacao = addslashes($_POST['situacao']);
            $telefone = addslashes($_POST['telefone']);
            $mensalidade = addslashes($_POST['mensalidade']);
            $inscricao = addslashes($_POST['inscricao']);
            $genero = addslashes($_POST['genero']);

            $this->alunos->upAluno($id, $nome, $email, $idade, $endereco, $situacao, $telefone, $mensalidade, $inscricao, $genero);

            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }

        else{
            header('Location: ' . BASE_URL . 'Alunos/show/'.$id);
            exit;
        }
    }

    public function delete($id)
    {
        $id = addslashes($id);
        if (empty($id) && !is_int($id)) {
            header('Location: ' . BASE_URL . 'Alunos');
            exit;
        }

        $this->alunos->deleteAluno($id);
        header('Location: ' . BASE_URL . 'Alunos');
        exit;
    }
}
