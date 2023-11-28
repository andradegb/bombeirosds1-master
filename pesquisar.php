<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesquisar</title>
</head>
<body>
Pesquisar:<select id = "pesquisa">
 <option value="1">Nome</option>
 <option value="2">Idade</option>
 <option value="3">CPF</option>
 <option value="4">Telefone</option>
</select>
<input size="5" type="text" id="texto">
<button onclick="pesquisar();">ok</button>
    <div class="container">
        <table border="1" class="tabela">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Idade </th>
                    <th> CPF</th>
                    <th> Telefone </th>
                    <th colspan="5"> Ações </th>
                </tr>
            </thead>
            <tbody>
            <?php
                        $url=0;
                        if(isset($_GET["o"]))
                        {
                        $meuselect=$_GET["o"];
                        $url=1;
                        $texto=$_GET["t"];
                        }
                            include_once("listar2.php");
                          if(!empty($lista_usuarios)){
                              foreach($lista_usuarios as $linha){
                                  echo ' <tr>
                                          <td> '.$linha['nOcorrencia'] .' </td>
                                          <td> '.$linha['Nomepac'] .' </td>
                                            <td> '.$linha['Idadepac'] .' </td>
                                            <td> '.$linha['CPFpac'] .' </td>
                                            <td> '.$linha['Telefone'] .' </td>
                                          <td> <a href="excluir2.php?id='.$linha['nOcorrencia'].'"> <h3>Excluir</h3> <a> </td>
                                          <td> <a href="alterar2.php?id='.$linha['nOcorrencia'].'"> <h3>Alterar</h3> <a> </td>
                                      </tr>
                                  ';
                              }
                          }
                      ?>

            </tbody>
        </table>
    </div>
    <div class="campo4"> 
      <a class="continuar" id="continuar" name="continuar" href="tela_principal.html">Voltar</a>
       </div>
</body>
<script>
  function pesquisar()
  {
    p=pesquisa.value
    t=texto.value
    window.open("listar2.php?o="+p+"&t="+t,"_self")
  }
</body>
</html>