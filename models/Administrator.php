<?php

class Administrator extends db{
	
	private function view_users(){
		try {
			$SQL = "SELECT * FROM users";
			$result = $this->open()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Erro na requisição (view_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_users(){
		return $this->view_users();
	}

	private function register_users($data){
		try {
			$SQL = 'INSERT INTO users (nome,sobrenome,email,telefone) VALUES (?,?,?,?)';
			$result = $this->open()->prepare($SQL);
			$result->execute(array(
									$data['nome'],
									$data['sobrenome'],
									$data['email'],
									$data['telefone']
									)
							);			
		} catch (Exception $e) {
			die('Erro na requisição (register_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_user($data){
		$this->register_users($data);
	}

	private function update_user($data){
		try {
			$SQL = 'UPDATE users SET nome = ?, sobrenome = ?, email = ?, telefone = ? WHERE id = ?';
			$result = $this->open()->prepare($SQL);
			$result->execute(array(
									$data['nome'],
									$data['sobrenome'],
									$data['email'],
									$data['telefone'],
									$data['id']
									)
							);			
		} catch (Exception $e) {
			die('Erro na requisição (update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_user($data){
		$this->update_user($data);
	}

	private function delete_user($id){
		try {
			$SQL = 'DELETE FROM users WHERE id = ?';
			$result = $this->open()->prepare($SQL);
			$result->execute(array($id));			
		} catch (Exception $e) {
			die('Erro na requisição (delete_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_user($id){
		$this->delete_user($id);
	}	
}
?>