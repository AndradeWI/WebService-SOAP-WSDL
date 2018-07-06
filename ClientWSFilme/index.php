   <?php
   $client = new SoapClient('http://DESKTOP-UCU9QN2:8080/WSFilme/WSFilmes?wsdl');      
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Projeto III &ndash; Clinte SOAP-WSDL &ndash; Com PHP</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/pricing-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/pricing.css">
        <!--<![endif]-->

        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link rel="stylesheet" type="text/css" href="css/mensagem.css">
    
</head>
<body>



<div class="pure-menu pure-menu-horizontal">
    <a href="index" class="pure-menu-heading">Projeto III PD</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="index" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item pure-menu-selected"><a href="#cadastrar" class="pure-menu-link">Cadastrar Filme</a></li>
    </ul>
</div>

<div class="banner">
    <h1 class="banner-head">
        Bem vindo(a)!<br>
        Esta página é um cliente de serviço SOAP-WSDL.
    </h1>
</div>

<div class="l-content">
     <div class="information pure-g">
        <div class="pure-u-1 pure-u-md-1-1">

          <?php require_once('view/mensagens.php');?>
            
            
            <form class="pure-form pure-form-stacked" action="index" method="post">
                <fieldset>
                    <legend>Marque a forma de busca</legend>
                     <div class="pure-g">

                        <div class="pure-u-1 pure-u-md-1-6">
                            <label for="titulo" class="pure-radio">
                                <input id="titulo"  type="radio" name="tipo" value="titulo" required>Título
                            </label>
                        </div>

                        <div class="pure-u-1 pure-u-md-1-6">
                             <label for="diretor" class="pure-radio">
                                <input id="diretor"  type="radio" name="tipo" value="diretor" required>Diretor
                            </label>
                        </div>

                         <div class="pure-u-1 pure-u-md-1-6">
                             <label for="genero" class="pure-radio">
                                <input id="genero" type="radio" name="tipo" value="genero" required>Gênero
                            </label>
                        </div>

                         <div class="pure-u-1 pure-u-md-1-6">
                             <label for="ano" class="pure-radio">
                                <input id="ano" type="radio" name="tipo" value="ano_lancamento" required>Ano de lançamento
                            </label>
                        </div>

                            <label>
                                <input type="text" id="busca" name="busca" class="pure-input-rounded" required>
                            </label>
                            <label>
                                <button type="submit" class="pure-button">Buscar</button>
                            </label>
                    </div>
                </fieldset>
            </form>
            <hr>
        </div>
    </div>
   
    <div class="pricing-tables pure-g">
  
        <?php require_once('view/grid.php');?>
    </div> 

</div> <!-- end l-content -->

<!-- modal editar filme -->
   <?php require_once('view/modalcadastro.php');?>
     <?php require_once('view/modalexcluir.php'); ?>
      <?php require_once('view/modaleditar.php'); ?>


<div class="footer l-box">
    <p>
        <a href="index">Topo</a> Equipe: José Rusemberg, Wanderson Andrade.
    </p>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="js/meu-js.js"></script>
</html>
