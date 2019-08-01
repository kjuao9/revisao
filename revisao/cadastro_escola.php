<?php include "conexao.php" ?>
<!doctype html>
<head>
<meta charset = "utf-8" lang = "pt-Br">
</head>
<body>
<form methdo="get" action="">
<p>
<label>Cadastre a escola: </label>

<input type= "text" name = "escola" id="escola"><br/>
<label>
Digite o endereço: 
</label>
<input type = "text" name = "endereco" id="endereco">
</p>
<p><input type="submit" value="Enviar">
<input type = "reset" value="Limpar"></p>
</form>

<?php 
if(isset($_GET["escola"])){
    $escola = $_GET["escola"];
    $endereco  = $_GET["endereco"];
    $con = conecta_mysql();
    if($con){
        $sql = "INSERT INTO escola (nome, endereco)
        values('$escola', '$endereco')";
        mysqli_query($con, $sql);
    }
}

?>
<a href="index.php">Clique p/ voltar</a>
</body>
</html>