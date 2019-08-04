<!doctype html>

<?php
print "Endereço IFNMG: ";
echo "<br />";
include "conexao.php";

$con = conecta_mysql();
$sql = "SELECT endereco from escola where nome = 'IFNMG'";
$res = mysqli_query($con, $sql);
$resu = mysqli_fetch_assoc($res);
if(isset($resu["endereco"])){
    print $resu["endereco"];
echo "<br />";}echo "<br />";

echo "Todas as escolas cadastradas: ";
echo "<br />";
$sql = "SELECT nome from escola";
$res = mysqli_query($con, $sql);

if($res){
    $escolas = array();
       while( $linha = mysqli_fetch_assoc($res) ){
        $escolas[] = $linha;
    }
    foreach($escolas as $escola){
        print "Nome: ";
        print $escola["nome"];
        print "<br/>";
    }
echo "<br />";}
echo "<br />";

echo "Todas os cursos cadastrados: ";
echo "<br />";
$sql = "SELECT nome from curso";
$res = mysqli_query($con, $sql);

if($res){
    $cursos = array();
       while( $linha = mysqli_fetch_assoc($res) ){
        $cursos[] = $linha;
    }
    foreach($cursos as $curso){
        print "Nome: ";
        print $curso["nome"];
        print "<br/>";
    }
echo "<br />";}
echo "<br />";
echo "Todas os cursos cadastrados pela escola IFNMG: ";
echo "<br />";
$sql = "SELECT nome from curso where id_escola = 1";
$res = mysqli_query($con, $sql);
$resu = mysqli_fetch_assoc($res);
if(isset($resu["nome"])){
    print $resu["nome"];}
    echo"<br>";

?>
<a href="index.php">Clique p/ voltar</a>