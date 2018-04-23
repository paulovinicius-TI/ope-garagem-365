<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
      include "menu.php";
    ?>
    <title>Controle de Lucro - Garage 395 V 1.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h2>Controle de Lucro - GARAGE 395 V 1.0 Layout ADMIN1</h2>
      <p>Verde = Lucro | Vermelho = Prejúizo </p>
      <table class="table">
        
        <thead>
          <tr>
            <th>MÊS REFERENTE</th>
            <th>RECEITA BRUTA</th>
            <th>IMPOSTOS</th>
            <th>CUSTOS</th>
            <th>LUCRO BRUTO</th>
            <th>DESPESAS</th>
            <th>LUCRO</th>
            <th>OBSERVAÇÃO</th>
          </tr>
        </thead>

        <tbody>
          <tr class="danger">
            <td>Fevereiro/2014</td>
            <td>21.547,76</td>
            <td>19.055,44</td>
            <td>-9.930,03</td>
            <td>9.125,41</td>
            <td>-15.742,36</td>
            <td>-6.616,95</td>
            <td>Meta Prentendida 5.000,00</td>
          </tr>
          <tr class="success">
            <td>Março/2014</td>
            <td>20.761,95</td>
            <td>18.770,99</td>
            <td>-2.978,29</td>
            <td>15.792,70</td>
            <td>-12.483,43</td>
            <td>3.309,27</td>
            <td>Meta Prentendida 5.000,00</td>
          </tr>
          <tr class="success">
            <td>Abril/2014</td>
            <td>44.273,63</td>
            <td>42.243,67</td>
            <td>-8.725,55</td>
            <td>33.792,70</td>
            <td>-20.726,22</td>
            <td>12.789,90</td>
            <td>Meta Prentendida 10.000,00</td>
          </tr>
          <tr class="success">
            <td>Maio/2014</td>
            <td>86.583,34</td>
            <td>80,568,10</td>
            <td>-21.633,87</td>
            <td>58.424,23</td>
            <td>-48.952,01</td>
            <td>9.482,22</td>
            <td>Meta Prentendida 15.000,00</td>
          </tr>
          <tr class="danger">
            <td>Junho/2014</td>
            <td>25.000,63</td>
            <td>22.560,37</td>
            <td>-10.569,25</td>
            <td>11.991,38</td>
            <td>-15.000,00</td>
            <td>-3.008,93</td>
            <td>Meta Prentendida 17.000,00</td>
          </tr>   
        </tbody>
      </table>
      <h3>Escolha a Entrada?</h3>
      <button type="button" class="btn btn-success" >Entrada</button>
      <button type="button" class="btn btn-danger">Saída</button>

    </div>                             
  </body>
</html>
                                      
                    