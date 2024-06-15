<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ligas de Futebol</title>
<style>
  body { font-family: Arial, sans-serif; }
  .league-container { display: flex; flex-wrap: wrap; justify-content: space-around; }
  .league { margin: 10px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; width: calc(33% - 20px); box-sizing: border-box; text-align: center; }
  .league img { max-width: 100px; height: auto; margin-bottom: 10px; }
  .league h2 { font-size: 1.2em; margin: 10px 0; }
  button { padding: 10px 20px; margin: 20px; cursor: pointer; }
</style>
</head>
<body>

<button id="loadData">Carregar Ligas</button>
<div id="leagues" class="league-container"></div>

<script>
document.getElementById('loadData').addEventListener('click', function() {
  fetch('https://apiv2.allsportsapi.com/football/?met=Leagues&APIkey=92b8d6f054c10bd49e47d59fad85f39555ee71267d6a2e37a3ab162de352165c')
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      var leagues = data.result;
      var leaguesDiv = document.getElementById('leagues');
      leaguesDiv.innerHTML = '';
      leagues.forEach(function(league) {
        var div = document.createElement('div');
        div.className = 'league';
        div.innerHTML = '<img src="' + league.league_logo + '" alt="' + league.league_name + '">' +
                        '<h2>' + league.league_name + '</h2>' +
                        '<p>País: ' + league.country_name + '</p>';
        leaguesDiv.appendChild(div);
      });
    })
    .catch(function(error) {
      console.error('Erro ao buscar dados da API:', error);
    });
});
</script>

</body>
</html>
