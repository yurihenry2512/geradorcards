<!DOCTYPE html>
<html lang="en">
<head>
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
        <a class="navbar-brand mx-4" href="#"> Alloha - Cards de Massivas B2B - NOC IP</a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quem somos?</a>
                </li> -->
            </ul>
        </div>
    </nav>
 


<form name="form" method="post" action="card.php" id='formulariocadas'>
    <div class="container">
        <div class="mt-3">
            <h1>Cards Massiva B2B - Abertura de Card</h1>
        </div>

        <div class="mb-3">
            <input type="txt" class="form-control" id="exampleFormControlInput1" name="cod_incidente" placeholder="Cod Incidente">
        </div>

         <div class="mb-3">
            <select class="form-select" aria-label="Default select example" required="required" name="tipo_massiva">
			  <option selected>Tipo de Massiva</option>
			  <option value="SATURAÇÃO">SATURAÇÃO</option>
			  <option value="ISOLADO(S)">ISOLADO(S)</option>
			</select>
        </div>

         <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="causa">
			  <option selected>Causa</option>
			  <option value="Rompimento(s)">Rompimento(s)</option>
			  <option value="Falha de INFRA">Falha de INFRA</option>
			</select>
        </div>

        <div class="mb-3">
            <input type="txt" class="form-control" id="exampleFormControlInput1" name="data_incidente" placeholder="Início do Evento">
        </div>

        <!--  <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="escalonamento">
			  <option selected>Nível de Escalonamento</option>
			  <option value="NOC">NOC</option>
			  <option value="NOC/SE">NOC/SE</option>
			</select>
        </div> -->

        <div class="mb-3">
        	<label>
       			Número de Clientes Afetados
        	</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="clientes">
        </div>

         <div class="mb-3">
            <input type="txt" class="form-control" id="exampleFormControlInput1" name="cidades" placeholder="Cidades">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <!-- <button type="button" class="btn btn-danger">Voltar</button> -->
        </div>

        

        <div class="mx-auto" style="width: 200px;">
            <!-- <p>Parágrafo final centralizado</p> -->
        </div>
    </div>
</form>




</body>
</html>