<?
	include_once 'model/User.php';

	class C_User extends C_Base {
		
		public function action_info() {
			
			$get_user = new User();
			$user_info = $get_user->getUser($_SESSION['id_user']);
			$this->title .= ' | ' . $user_info['name'];
			$this->description = $this->Template('view/v_info.php', ['username' => $user_info['name'], 'userlogin' => $user_info['login']]);
		}
		
		public function action_reg() {
			
			$this->title .= ' | Регистрация';
			$this->description = $this->Template('view/v_reg.php', []);

			if($this->isPost()) {
				$new_user = new User();
				$result = $new_user->newUser($_POST['name'], $_POST['login'], $_POST['phone'], $_POST['email'], $_POST['password']);
				$this->description = $this->Template('view/v_reg.php', ['text' => $result]);
			}
		}

		public function action_login() {
			$this->title .= ' | Вход';
			$this->description = $this->Template('view/v_login.php', []);

			if($this->isPost()) {
				$login = new User();
				$result = $login->login($_POST['login'], $_POST['password']);
				$this->description = $this->Template('view/v_login.php', ['text' => $result]);
			}
		}

		public function action_logout() {
			$logout = new User();
			$result = $logout->logout();
		}
	}