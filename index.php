<html>
  <head>
    <title>Calculadora Investimento</title>
    <link rel="stylesheet" href="w3.css">
  </head>
  <body>
  <body bgcolor="#F5F5F5"> </body>
  </br>
   <h1 class="w3-panel w3-pale-grey w3-center"> 
    <b>Simulador de Investimentos </b> </h1> </br> </br>
    <h2 class="w3-panel w3-pale-grey w3-center">
     Insira os dados para a simulação: </br>

<form method="GET">

Valor do Investimento:
    <input type= "number" name="inicial"></br>

    Qauntidade de meses: <input type= "number" name="tempo"> </br>

    Tipo de investimento:     
    <input type="radio" name="juros" value="0.0021" checked="checked" /> Poupança
    
    <input type="radio" name="juros" value="0.0034" /> Tesouro Direto

    <input type="radio" name="juros" value="0.0090" /> Bolsa 
    </br>

   <h4> Poupança: 0.21% ao Mês //  Tesouro Direto: 0,34% ao mês //   Bolsa:0,9% ao mês </h4>
    </br>
    
<input type="submit" value="Calcular"> </br> <a  href="https://1--paulolucaspires.repl.co/contato.html" <button><h3>Solicitar contato do banco</h3></button></a>  </br> </br>
<h5> Mês 0 = VALOR INCIAL </h5>
</h2>
    <table class="w3-table-all w3-centered">
      <tr>
        <th>MESES</th>
        <th>RENDIMENTO TOTAL</th>
        <th>MONTANTE</th>
      </tr>


    <?php 
    
      $taxa = (float) $_GET ["juros"];
      $tempo = (int) $_GET ["tempo"];
      $capInicial = (int) $_GET ["inicial"];

      for ($i=0;$i<=$tempo;$i++) 
      {
        $montante = $capInicial*((1+$taxa)**$i);
        $rendimentoTotal = $montante - $capInicial; 
        
    ?>
        <tr>
          <td> <?= $i ?> </td>
          <td> R$ <?= number_format($rendimentoTotal,2,",",".") ?> </td> 
          <td> R$ <?= number_format($montante ,2,",",".") ?> </td>
        </tr>
    <?php } ?> 
    </table>
  </body>
</html>