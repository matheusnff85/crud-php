<?php
Class administratorController Extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function table_users(){
		?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php
		foreach (parent::get_view_users() as $data) {
		?>
        <tr>
            <td><?php echo $data->id; ?> </td>
            <td><?php echo $data->nome; ?> </td>
            <td><?php echo $data->sobrenome; ?> </td>
            <td><?php echo $data->email; ?> </td>
            <td><?php echo $data->telefone; ?> </td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Selecionar <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"
                                onclick="ModalUpdate('<?php echo $data->id; ?>','<?php echo $data->nome; ?>','<?php echo $data->sobrenome; ?>','<?php echo $data->email; ?> ','<?php echo $data->telefone; ?>');">Atualizar</a>
                        </li>
                        <li><a href="#" onclick="deleteUser('<?php echo $data->id; ?>');">Excluir</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <?php
		}
		?>
    </tbody>
</table>
<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }

	function registeruser(){
		$data = array(
					'nome' 		=> $_REQUEST['nome'],
					'sobrenome' => $_REQUEST['sobrenome'],
					'email'		=> $_REQUEST['email'],
					'telefone'	=> $_REQUEST['telefone']
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'nome' 		=> $_REQUEST['nome'],
					'sobrenome' => $_REQUEST['sobrenome'],
					'email'		=> $_REQUEST['email'],
					'telefone'	=> $_REQUEST['telefone']
					);		
			parent::set_update_user($data);		
	}    
    
}