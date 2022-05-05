<html>
    <head>
    <title>Busca de Endereço - CEP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/home.css">
    <form method="post">

    <?php
    
    include 'script.php';
    
    ?>

  </head>
    <body>
      <div id="cabecalho"><img src="logo.jpg"></div>
      <form method="get" action=".">
        <h2>
        <label>Buscar Endereço:<br><br>
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" style="font-family: Tahoma; font-size: 16px"
               onblur="pesquisacep(this.value);" /></label><br/><br><br><br>
        <label>Rua:
        <input name="rua" type="text" id="rua" size="50" style="font-family: Tahoma; font-size: 16px" /></label><br /><br>
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" style="font-family: Tahoma; font-size: 16px" /></label><br /><br>
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" style="font-family: Tahoma; font-size: 16px" /></label><br /><br>
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" style="font-family: Tahoma; font-size: 16px" /></label><br /><br>
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" style="font-family: Tahoma; font-size: 16px" /></label><br /><br></h2>
        
      </form>
        
      <div id="rodape"><h3>Copyright©2022. Breno Barbosa Guardião .Todos os Direitos Reservados.</h3></div>
        
    </body>

</html>
