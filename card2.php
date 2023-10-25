<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
<link rel="icon" href="logo_alloha_positivo-1536x536.png"> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Card de Massivas B2B</title>
</head>
<body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <a class="navbar-brand mx-4" href="#">Alloha - Cards de Massivas B2B - NOC IP</a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <!--   <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quem somos?</a>
                </li> -->
            </ul>
        </div>
    </nav>

 
  
<div id="posicao">
 
<?php
        $cod_incidente = $_POST ['cod_incidente'];
        $tipo_massiva = $_POST ['tipo_massiva'];
        $causa = $_POST ['causa'];
        //$escalonamento = $_POST ['escalonamento'];
        $clientes = $_POST ['clientes'];
        $data_incidente = $_POST ['data_incidente'];
        $cidades = $_POST ['cidades'];
        $final_evento  = $_POST['normalizacao'];

        $acao_de_normalizacao = $_POST['acao_de_normalizacao'];

        echo $cod_incidente ,__NAMESPACE__," ";
        echo $tipo_massiva;

?>
</div>

<div id="tipo_massiva">
    <?php
        echo $causa;
    ?>
</div>

<div id="departamento">
    NOC
</div>

<div id="escalonamento">
    NOC
    <!-- <?php
        //echo $escalonamento;
    ?> -->
</div>

<div id="clientes">
    <?php
        echo $clientes;
    ?>
</div>

<div id="data_incidente">
    <?php
        echo $data_incidente;
    ?>
</div>

<div id="cidade">
    <?php
        echo $cidades;
    ?>
</div>

<div id="data_normalizacao">
    <?php
        echo $final_evento;
    ?>
</div> 

<div id="acao_de_normalizacao">
    <?php
        echo $acao_de_normalizacao;
    ?> 
</div>


<br>
<br>
<div class="text-center">
<img src="card-normalizacao" class="img-fluid" alt="Imagem responsiva">
</div>


<br>
<a href="index.php">
    <center><button class="btn btn-primary">Voltar</button></center>
  </a> 

</body>
</html>