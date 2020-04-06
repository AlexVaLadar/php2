<?

include_once 'link/db.php';

class SQL {
	
	static $instance;
	private $db;
	
	function __construct() {

		setlocale(LC_ALL, 'ru_RU.UTF8');
		$this->db = new PDO(DB_DRIVER.':host='.DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
		$this->db->exec('SET NAMES UTF8');
		$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		
	}
	
	public static function getInstance() {
				
		if (self::$instance === null) {
			self::$instance = new SQL();
		}

		return self::$instance;
	}

	public function select($table, $wh_key = false, $wh_value = false, $fetchAll = false) {
			
			if ($wh_key AND $wh_value) {
				$query = "SELECT * FROM ".$table." WHERE ".$wh_key." = '".$wh_value."'";
			} else {
				$query = "SELECT * FROM ".$table;
			}

			$q = $this->db->prepare($query);
			$q->execute();
			
			if ($q->errorCode() != PDO::ERR_NONE) {
				$info = $q->errorInfo();
				die($info[2]);
			}

			if ($fetchAll) {
				return $q->fetchAll();
			} else if ($wh_key AND $wh_value) {
				return $q->fetch();
			} else {
				return $q->fetchAll();
			}
		}
	
	public function insert($table, $object) {
			
			$columns = [];
			
			foreach ($object as $key => $value) {
			
				$columns[] = $key;
				$masks[] = ":$key";
				
				if ($value === null) {
					$object[$key] = 'NULL';
				}
			}
			
			$columns_s = implode(',', $columns);
			$masks_s = implode(',', $masks);
			
			$query = "INSERT INTO $table ($columns_s) VALUES ($masks_s)";
			
			$q = $this->db->prepare($query);
			$q->execute($object);
			
			if ($q->errorCode() != PDO::ERR_NONE) {
				$info = $q->errorInfo();
				die($info[2]);
			}
			
			return $this->db->lastInsertId();
		}
	
	public function update($table, $object, $where) {
			
			$sets = [];
			 
			foreach ($object as $key => $value) {
				
				$sets[] = "$key=:$key";
				
				if ($value === NULL) {
					$object[$key]='NULL';
				}
			 }
			 
			$sets_s = implode(',',$sets);
			$query = "UPDATE $table SET $sets_s WHERE $where";

			$q = $this->db->prepare($query);
			$q->execute($object);

			if ($q->errorCode() != PDO::ERR_NONE) {
				$info = $q->errorInfo();
				die($info[2]);
			}
			
			return $q->rowCount();
		}
	
	public function delete($table, $where) {
			
			$query = "DELETE FROM $table WHERE $where";
			$q = $this->db->prepare($query);
			$q->execute();
			
			if ($q->errorCode() != PDO::ERR_NONE) {
				$info = $q->errorInfo();
				die($info[2]);
			}
			
			return $q->rowCount();
		}

		public function password ($name, $password) {
			return strrev($name).md5($password);
		}
}	

	
	
	
	
	
	
	
	
	
	
	
	
	