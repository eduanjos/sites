<?php 
#Acesso ao Banco de Dados
define("HOST", "localhost");
define("DB", "pontus90_bdsistema");
define("USER", "pontus90_sistema");
define("PASS", "**SistemaPontus**");
class ModelConexao{
	public function conecta() {
		try {
			$pdo = new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (Exception $e) {
			echo "Falha ao tentar conectar-se ao banco de dados. Erro: " . $e->getMessage();
			exit();
		}
	}
}
class ModelScript extends ModelConexao {
	protected function update($data){
		$cnx=$this->conecta();
		$sql=$cnx->prepare("SELECT id_ponto FROM PONTOS WHERE prazo = subdate(current_date, 1)");
		$sql->execute();
		if($sql->rowCount()>0){
			$ids=$sql->fetchAll(\PDO::FETCH_ASSOC);
			$sql=$cnx->prepare("UPDATE PONTOS SET prazo='0000-00-00' WHERE id_ponto=:id");
			foreach($ids as $id){
				$sql->bindParam(":id",$id['id_ponto']);
				$sql->execute();
			}
		}
	}
}
class ControllerScript extends ModelScript{
	public function __construct(){
		self::atualizar();
	}
	public function atualizar(){
		$data = date('Y-m-d', time());
		parent::update($data);
		echo "Cartão Atualizado!";
	}
}
$x = new ControllerScript();
?>