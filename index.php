<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <pre>
        <?php
        require_once 'Lutadores.php';
        ?>
      </pre>
      
      <div class="cubo" style='display:flex;'>
        <div class="tabela">
            <h2 class="text-center">Lutadores</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Categoria</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for($i = 0; $i < count($lutadores); $i++)
                            {
                                echo '<tr><td>'.$lutadores[$i]->getNome().'</td><td>'.$lutadores[$i]->getCategoria().'</td></tr>';
                            }
                        ?>
                    </tbody>
                </table>


        </div>

            <div class=" tabela ">
                <h2> Selecione os Lutadores</h2>
                <form action='ViewLuta.php' method="GET">
                  <div class="mb-3"> 
                      <label for="PrimeiroLutador">Primeiro Lutador</label>
                      <input type="text" name='LutadorUm' class="form-control" id="PrimeiroLutador">
                      <span id="L1Validate" class="validate"></span>
                  </div>

                  <div class="mb-3"> 
                      <label for="SegundoLutador">Segundo Lutador</label> 
                      <input type="text" name='LutadorDois' id="SegundoLutador" class="form-control">
                      <span id="L2Validate" class="validate"></span>
                  </div>

                  <input type="submit" value='Lutar' id="btn" class='btn btn-primary disabled'>
                </form>
            </div>
      </div>
      
    <script type="text/javascript">
          const inputL1 = document.getElementById('PrimeiroLutador');
          const inputL2 = document.getElementById('SegundoLutador');
          const spanL1 = document.getElementById('L1Validate');
          const spanL2 = document.getElementById('L2Validate');
          const btn = document.getElementById('btn');
          const valido = {
              L1 : false,
              L2 : false
          };
          
     inputL1.addEventListener('blur', ()=>{
         console.log("Analisando texto válido");
         let text = inputL1.value;
         console.log(text);
         console.log(analisarArray(text));
         if(analisarArray(text) === true)
         {
             valido.L1 = true;
             spanL1.classList.add('bg-success');
             spanL1.classList.remove('bg-danger');
             check();
         }else{
             btn.classList.add('disabled');
             spanL1.classList.add('bg-danger');
             spanL1.classList.remove('bg-success');
         }
         
         console.log(valido)
         
     })
     
     inputL2.addEventListener('blur', ()=>{
         console.log("Analisando texto válido");
         let text = inputL2.value;
         console.log(text);
         console.log(analisarArray(text));
         
         if(analisarArray(text) === true){
             valido.L2 = true;
             spanL2.classList.add('bg-success');
             spanL2.classList.remove('bg-danger');
             check();
        }else{
            btn.classList.add('disabled');
            spanL2.classList.add('bg-danger');
            spanL2.classList.remove('bg-success');
        }
        console.log(valido)
        
        
     })
     
     function analisarArray(texto){
         <?php
            $nomesLutadores = array();
            foreach($lutadores as $lutador){
                $nomesLutadores[]= $lutador->getNome();
            }
         ?>
         var Lutadores = <?=json_encode($nomesLutadores)?>;
         console.log(Lutadores);
         
         for(let i=0; i < Lutadores.length; i++)
         {
             if(Lutadores[i] === texto)
             {
                 return true;
             }
         }
         
         return false;
     }
     
     function check(){
         if(valido.L1 && valido.L2)
         {
             console.log("ESTÀ VALIDO");
             btn.classList.remove('disabled');
         }
         else {
             console.log('Nao está pronto');
             btn.classList.add('disabled');
        }
     }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
