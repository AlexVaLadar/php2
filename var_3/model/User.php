<?
	include_once 'PDO.php';

	class User extends SQL {
		
		public $user_id, $user_login, $user_name, $user_password;

		public function getUser ($id) {
			
			return parent::select('user', 'id', $id);
		}

		public function newUser ($name, $login, $phone, $email, $password) {
			
			$object = [
				'name' => strip_tags($name),
				'login' => strip_tags($login),
				'phone' => strip_tags($phone),
				'email' => strip_tags($email),
				'password' => parent::password(strip_tags($name), strip_tags($password))
			];
			
			$user = parent::select('user', 'login', strip_tags($login));

			if (!$user) {
				parent::insert('user', $object);
				return 'Вы успешно зарегистрировались!';
			} else {
				return 'Пользователь с таким логином уже зарегистрирован!';
			}
		}

		public function login ($login, $password) {
			
			$user = parent::select('user', 'login', strip_tags($login));

			if ($user) {
				if ($user['password'] == parent::password($user['name'], strip_tags($password))) {
    				$_SESSION["id_user"] = $user['id'];
    				return 'Добро пожаловать в систему, ' . $user['name'] . '!';
				} else {
					return 'Пароль не верный!';
				}
			} else {
				return 'Пользователь с таким логином не зарегистрирован!';
			}
		}

		public function logout () {
			
			if (isset($_SESSION["id_user"])) {
				unset($_SESSION["id_user"]);
				session_register_shutdown();
				return true;
			} else {
				return false;
			}
		}
	}
