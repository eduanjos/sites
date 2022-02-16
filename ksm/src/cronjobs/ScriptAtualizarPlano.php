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
	protected function update(){
		$cnx=$this->conecta();
		$sql=$cnx->prepare("SELECT fk_login FROM MEU_PLANO WHERE dt_prazo = date(NOW())");
		$sql->execute();
		if($sql->rowCount()>0){
			$ids=$sql->fetchAll(\PDO::FETCH_ASSOC);
			$sql=$cnx->prepare("UPDATE LOGIN SET bloqueio='S' WHERE id_login=:id");
			foreach($ids as $id){
				$sql->bindParam(":id",$id['fk_login']);
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
		parent::update();
		echo "Plano Atualizado!";
	}
}
$x = new ControllerScript();
?>