<?php

class LoginController extends Controller
{

	public function index()
	{

		//verifico se o usuário já está logado
		$user = new Users();
		if ($user->isLogged() == true) {
			header("Location: " . BASE_URL . "Admin");
		} else {
			//caso não esteja tentamos fazer o login
			$data = array();

			//pegamos os dados enviados via post e usamos o sanitize
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
			if ($post) {
				$data["email"] = $post["email"];
				//verificamos se o valor informado é realmente um email
				if (!is_email($post["email"])) {
					$data["alert"] = message()->warning("Por favor, informe um email válido.");
				} else {

					// //Verificar se o usuario e aluno ou admin
					// if (isset($_POST["check"])) {
					// 	if (!$user->verifyEmailAluno($post["email"])) {
					// 		$data["alert"] = message()->warning("Email não encontrado em nossa base.");
					// 	} else {
					// 		if ($user->doLoginAluno($post["email"], $post["passwd"])) {

					// 			$_SESSION['TYPE'] = 'aluno';

					// 			header("Location: " . BASE_URL . "HomeAluno/index");
					// 			exit;
					// 		} else {
					// 			$data["alert"] = message()->error("Senha inválida.");
					// 		}
					// 	}
					// 	$this->loadView("Login/index", $data);
					// 	exit;
					// }

					//se for um email verifico se o mesmo está salvo em nossa base de dados
					if (!$user->verifyEmail($post["email"])) {
						$data["alert"] = message()->warning("Email não encontrado em nossa base.");
					} else {
						//então tentamos fazer o login com a senha
						if ($user->doLogin($post["email"], $post["passwd"])) {

							$_SESSION['TYPE'] = 'admin';

							header("Location: " . BASE_URL . "Home");
							exit;
						} else {
							$data["alert"] = message()->error("Senha inválida.");
						}
					}
				}
			}

			$this->loadView("Login/index", $data);
		}
	}

	public function logout()
	{
		$user = new Users();
		$user->logout();
		header("Location: " . BASE_URL . "Login");
	}

	public function forgoutPassword()
	{
		$data = array();

		$email_send = new Email();
		$user = new Users();

		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$data["email"] = $_POST["email"];
			//verificamos se o valor informado é realmente um email
			if (!is_email($_POST["email"])) {
				$data["alert"] = message()->warning("Por favor, informe um email válido.");
			} else {
				//se for um email verifico se o mesmo está salvo em nossa base de dados
				if (!$user->verifyEmail($_POST["email"])) {
					$data["alert"] = message()->warning("Email não encontrado em nossa base.");
				} else {
					$data["alert"] = message()->success("Enviamos um email para redefinir senha.");

					$user_info = $user->getIdByEmail($_POST['email']);
					// var_dump($user_info);
					// exit;

					$hash_email = md5($_POST['email']);

					$hash_users = new HashUsers();
					$hash_users->addHashUser($user_info['id'], $hash_email);

					$subject = "Redefinição de senha";
					$info = array();
					$info['email'] = $user_info['email'];
					$info['hash'] = $hash_email;
					$info['title'] = 'Redefinição de senha';
					$info['url'] = 'Login/updatePass';

					ob_start();
					$this->loadView('Email/invite', $info);
					$message = ob_get_clean();

					$email_send->bootstrap($subject, $message, $user_info['email'], $user_info['name']);

				}
			}
		}

		$this->loadView("Login/forgoutPassword", $data);
	}

	public function createPass($hash_user)
	{
		$data = array();

		$hash_user = addslashes($hash_user);

		if (isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['senhaConfirm']) && !empty($_POST['senhaConfirm'])) {
			if ($_POST['senha'] === $_POST['senhaConfirm']) {

				$pass = addslashes($_POST['senha']);

				$user = new Users();
				$hash = new HashUsers();

				$user_info = $user->getInfoByHash($hash_user);

				$id_user = $user_info['id_user'];
				$user->createPass($pass, $id_user);

				$hash->InactiveHash($id_user, $hash_user);
				header('Location: ' . BASE_URL . 'Login');
				exit;
			} else {
				$data["alert"] = message()->warning("Por favor, informe a mesma senha nos dois campos.");
			}
		}
		$this->loadView("Login/createPass", $data);
	}

	public function updatePass($hash_user)
	{
		$data = array();

		$hash_user = addslashes($hash_user);

		if (isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['senhaConfirm']) && !empty($_POST['senhaConfirm'])) {
			if ($_POST['senha'] === $_POST['senhaConfirm']) {

				$pass = addslashes($_POST['senha']);

				$user = new Users();
				$hash = new HashUsers();

				$user_info = $user->getInfoByHash($hash_user);

				$id_user = $user_info['id_user'];
				$user->createPass($pass, $id_user);

				$hash->InactiveHash($id_user, $hash_user);
				header('Location: ' . BASE_URL . 'Login/index');
				exit;
			} else {
				$data["alert"] = message()->warning("Por favor, informe a mesma senha nos dois campos.");
			}
		}
		
		$this->loadView("Login/updatePass", $data);
	}
}
