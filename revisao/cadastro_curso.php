<?php include "conexao.php" ?>
<!doctype html>
<head>
<meta charset = "utf-8" lang = "pt-Br">
</head>
<body>
<form methdo="get" action="">
<p>
<label>Digite o código: </label>

<input type= "text" name = "codigo" id="codigo"><br/>
<label>
Digite o curso: 
</label>
<input type = "text" name = "curso" id="curso"><br/>
<label>Insira a carga horária: </label>
<input type= "text" name="carga_horaria" id="carga_horaria"><br/>
<label>Coloque o id da escola: </label>
<input type="text" name="id_escola" id="id_escola">
</p>
<p><input type="submit" value="Enviar">
<input type = "reset" value="Limpar"></p>
</form>

<?php 
if(isset($_GET["codigo"])){
    $codigo = $_GET["codigo"];
    $nome  = $_GET["curso"];
    $carga_horaria = $_GET["carga_horaria"];
    $id_escola = $_GET["id_escola"];
    
    $con = conecta_mysql();
    if($con){
        $sql = "INSERT INTO curso (id, nome, carga_horaria, id_escola)
        values('$codigo', '$nome', '$carga_horaria', '$id_escola')";
        mysqli_query($con, $sql);
    }
}

?>
<a href="index.php">Clique p/ voltar</a>
</body>
</html>