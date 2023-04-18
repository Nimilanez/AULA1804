<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de votação</title>
  </head>
  <body>
    <h1>Batalha de votação entre Lana Del Rey X The Weeknd</h1>
    <?php
        $votos = array("Lana Del Rey" => 0, "The Weeknd" => 0); 
        if(isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $voto = $_POST['cantor'];
            $votos[$voto]++; 
            echo "<h3> Nós agradecemos o seu voto, $nome! </h3>";
            $arquivo = fopen("dados.txt", "a");
            fwrite($arquivo, "Nome: $nome | Voto: $voto \n");
            fclose($arquivo);
        } 
    ?>
     <form name="dados_pessoas" method="POST" action="">
        <figure>
      <img src="img/Lust_For_Life_LDR_2017_Singolo_SaM.jpg" width="320" height="240">
    </figure>
            Nome: <input type="text" name="nome" id="nome"> <br>
            <h5>Qual é seu cantor favorito?</h5>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cantor" id="The Weeknd" value="The Weeknd">
                <label class="form-check-label" for="Abel">The Weeknd</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cantor" id="Lana" value=" Lana Del Rey">
                <label class="form-check-label" for="Lana"> Lana Del Rey</label>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Votar">
      </form>
      
      <h5>Resultados:</h5>
      <?php
        foreach($votos as $cantor => $votos_recebidos){
            echo "$cantor: $votos_recebidos votos <br>";
        }
      ?>
  </body>
</html>
