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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ranking de jogadores</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body class="container" style="background-color: #DEDEDE;">
        <div class="card card-body mt-5">
            <h1>Ranking dos melhores jogadores do mundo </h1>
            <hr>

            <input id="input-busca" type="text" class="form-control mt-3 mb-3" placeholder="Qual jogador voce procura?">

            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Ranking</th>
                        <th>Nome</th>
                        <th>País</th>
                       
                    </tr>
                </thead>
                <tbody id="tabela-nomes">
                    <tr>
                        <td>1</td>
                        <td>Lionel Messi</td>
                        <td>Argentina</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Diego Maradona</td>
                        <td>Argentina</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cristiano Ronaldo</td>
                        <td>Portugal</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><b>Pelé</b></td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Zinedine ZIdane</td>
                        <td>França</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Johan Cruyff</td>
                        <td>Reino Unido</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>George Best</td>
                        <td>Inglaterra</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Franz Beckenbauer</td>
                        <td>Alemanha</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Ferenc Puskas</td>
                        <td>Hungria</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Ronaldo Nazário</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Gerd Muller</td>
                        <td>Alemanha</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Alfredo Di Stefano</td>
                        <td>Itália</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Michel Platini</td>
                        <td>Itália</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Zico</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Garricnha</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Bobby Charlton</td>
                        <td>Inglaterra</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Paolo Maldini</td>
                        <td>Itália</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Romário</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Giuseppe Meazza</td>
                        <td>Itália</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Andrés Iniesta</td>
                        <td>Espanha</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Franco Baresi</td>
                        <td>Itália</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Marco van Basten</td>
                        <td>Holanda</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Eusébio</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Xavi</td>
                        <td>Espanha</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Carlos Alberto Torres</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Ronaldinho Gaúcho</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>Sócretes</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>46</td>
                        <td>Didi</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td>Rivelino</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>50</td>
                        <td>Nilton Santos</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td>Jairzinho</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>73</td>
                        <td>Dani Alves</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>76</td>
                        <td>Cafú</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>90</td>
                        <td>Roberto Carlos</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>95</td>
                        <td>Djalma Santos</td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>99</td>
                        <td><b>Kaká</b></td>
                        <td>Brasil</td>
                        <td>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        Fonte: Revista Four Four Two

        <script src="eventos.js"></script>
    </body>
</html>