<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
       <pre>
        <?php
          require_once 'Lutadores.php';
          require_once 'Luta.php';
        
          for($i = 0; $i < count($lutadores); $i++)
          {
             if($lutadores[$i]->getNome() == $_GET['LutadorUm'])
             {
                 $lutadorUm = $lutadores[$i];
             }
             
             if($lutadores[$i]->getNome() == $_GET['LutadorDois'])
             {
                 $lutadorDois = $lutadores[$i];
             }
          }
        
//        $lutadorUm = $_GET['LutadorUm'];
//        $lutadorDois = $_GET['LutadorDois'];
          $luta = new Luta($lutadorUm, $lutadorDois);
//        print_r($lutadorUm);
//        print_r($lutadorDois);
        ?>
        </pre>
        
        <h1><?=$luta->Lutar()?></h1>
        
        <h2>O vencedor foi <span id='vencedor'><?=$luta->getVencedor()->getNome();?></span></h2>
        
        <table class='table w-50 m-auto'>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Vitorias</th>
                    <th>Derrpotas</th>
                    <th>Empates</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?=$luta->getDesafiado()->getNome()?>
                    </td>
                    <td>
                        <?=$luta->getDesafiado()->getVitorias()?>
                    </td>
                    <td>
                        <?=$luta->getDesafiado()->getDerrotas()?>
                    </td>
                    <td>
                        <?=$luta->getDesafiado()->getEmpates()?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <?=$luta->getDesafiante()->getNome()?>
                    </td>
                    <td>
                        <?=$luta->getDesafiante()->getVitorias()?>
                    </td>
                    <td>
                        <?=$luta->getDesafiante()->getDerrotas()?>
                    </td>
                    <td>
                        <?=$luta->getDesafiante()->getEmpates()?>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href='javascript:history.go(-1)'>Voltar</a>
    <script type='text/javascript'>
        console.log("Teste");
        const vencedor = document.getElementById('vencedor').textContent;
        console.log(vencedor);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>