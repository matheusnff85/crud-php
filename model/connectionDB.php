<?php 

Class connectionDB{
    private $server = "mysql:host=localhost;dbname=cruddb";
    private $username = "root";
    private $password = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $connection = "";

    public function open() {
        try {
            $this->connection = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->connection;
        } catch (PDOException $e) {
            echo "Falha na conexão com o banco de dados: " . $e->getMessage();
        }
    }

    public function close() {
        $this->connection = null;
    }
}
?>