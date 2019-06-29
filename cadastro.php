
<?php
 if(isset($_GET['cadastrar']))
  {
	$raca_cao= $_GET['raca_cao'];
	$nome_cao = $_GET['nome_cao'];
	$data_nascimento_cao = $_GET['data_nascimento_cao'];
	$nome_dono= $_GET['nome_dono'];
		$data_nascimento_dono= $_GET['data_nascimento_dono'];
		$endereco= $_GET['endereco'];
$cidade= $_GET['cidade'];
	$id_cao = 0;
	include("conecta_cao.php");
	$sql = "INSERT INTO
   			cadastro(raca_cao,nomedecao,data_nascimento_cao,nome_dono,data_nascimento_dono,endereco,cidade)VALUES(:parametro1,:parametro2,:parametro3,:parametro4,:parametro5,:parametro6,:parametro7)";
	$stmt = $conexao->prepare($sql);	

		$stmt->bindParam(':parametro1',$raca_cao);
	$stmt->bindParam(':parametro2',$nome_cao);
	$stmt->bindParam(':parametro3',$data_nascimento_cao);
	$stmt->bindParam(':parametro4',$nome_dono);
	$stmt->bindParam(':parametro5',$data_nascimento_dono);
	$stmt->bindParam(':parametro6',$endereco);
    $stmt->bindParam(':parametro7',$cidade);
	$rs = $stmt->execute();
	if($rs)
	{
 		echo "<script>alert('Dados Gravados!')</script>";
	}
	else
	{
	echo var_dump($stmt->errorInfo());
	}
  }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="estilocao.css" rel="stylesheet" type="text/css">
</head>
<body>
<img src="images/iconpara.png" alt="some text" width=60 height=40>

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a >CADASTRO BOLSA CÃO</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="http:home.html">home</a></li>
                     
              
              
               <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Cadastro</a>
                <div class="dropdown-content">
                  <a href="http://localhost:8080/cadastro%20bolsa%20cao/cadastro.php">Bolsa Cão</a>
                 <li><a href="http://localhost:8080/cadastro%20bolsa%20cao/">Sair</a></li>
                </div>
 			 </li>
		
				</ul>
		</div>
	</div>
  
    
    <div id="corpo">
    <fieldset >
    <form action="#" method="get">
    <p><label>Raça Cão:</label> </p>
      <p><input type="text" name="raca_cao"></p>
    
     <p><label>Nome Cão:</label> </p>
     <p><input type="text" name="nome_cao"></p>
     
     <p><label>Data Nascimento Cão:</label> </p>
     <p><input type="date" name="data_nascimento_cao"></p>
     
     <p><label>nome_dono:</label> </p>
     <p><input type="text" name="nome_dono"></p>
     
      <p><label>Data Nascimento Dono:</label> </p>
     <p><input type="date" name="data_nascimento_dono"></p>
     <fieldset>
      Endereco<br>
      <p><label>Estado:</label> </p>
   <select name="endereco"> 
    <option value="estado">Selecione o Estado</option> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option> 
</select>
<br>
  <p><label>cidade:</label> </p>
     <p><input type="text" name="cidade"></p>

     </fieldset>
     <p><input type="submit" value="Cadastrar" name="cadastrar"></p>
    </form>
    </fieldset>
     </div> 

    
    <div id="rodape">
    </div>
</div>
</body>
</html>
<br>Nayara Massari<br>
<br>Contato (19)9905-1142<br>
<br>Mais informação entre em contato pelo E-mail<br>
<br>Nayaramassari08@gmail.com<br>


