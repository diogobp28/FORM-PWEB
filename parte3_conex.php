<!DOCTYPE html><html><head><title>Usuários</title><head></html>
<?php
	
    include ('parte4user.php');
	

	if($_REQUEST["nome"]=='' or $_REQUEST["usuario"]== '' or $_REQUEST["email"]== '' or $_REQUEST["senha"]==''){
		echo 'INFORMAÇÕES INVÁLIDAS! TENTE NOVAMENTE.';
	}else{
		$senhaCrip = md5($_REQUEST["senha"]);
		$usuario = New parte4user( $_REQUEST["nome"],$_REQUEST["usuario"], $_REQUEST["telefone"], $senhaCrip);

		$username = "root";
		$password = "";

		try {
			
            $conn = new PDO('mysql:host=localhost;dbname=exercicio', $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
            $nome = $pessoa->getNome();
			$user = $pessoa->getUser();
			$email = $pessoa->getTelefone();
			$senha = $pessoa->getSenha();
			
            $stmt = $conn->prepare('INSERT INTO USUARIOS VALUES(?,?,?,?)');
			
            $stmt->bindParam(1,$nome, PDO::PARAM_INT);
			$stmt->bindParam(2,$user, PDO::PARAM_INT);
			$stmt->bindParam(3,$telefone, PDO::PARAM_INT);
			$stmt->bindParam(4,$senha, PDO::PARAM_INT);
			
            $stmt->execute();
			
            $users = $conn->prepare('SELECT nome, usuario, telefone FROM USUARIOS');
			$users->execute();
			
            $c=0;
			
            while($row = $usus->fetch(PDO::FETCH_OBJ)){
			  echo'USUARIO '. $c;
			  echo 'NOME: '.$row->nome; echo "<br>";
			  echo 'USUARIO: '.$row->usuario; echo "<br>";
			  echo 'TELEFONE: '.$row->email; echo "<br>";
			  $c++;
			
            }

		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
?>