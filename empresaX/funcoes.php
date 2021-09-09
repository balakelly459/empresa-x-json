<?php

//recebe o nome do arquivo
function lerArquivo($nomeArquivo) {
    //lê o arquivo como string
   $arquivo = file_get_contents($nomeArquivo);

   // transforma a string em array
   $jsonArray = json_decode($arquivo);

   //devolve o array
   return $jsonArray;
}

function buscarFuncionario($empresax, $first_name) {
    
    $expresaxFiltro = [];
    foreach($empresax as $funcionario) {
        if ($funcionario->first_name == $first_name) {
            $empresaxFiltro[] = $funcionario;
        }
    }
    return $empresaxFiltro;
}

function adicionarFuncionario(array $funcionario) {
    $empresax = lerArquivo('empresax.json');
    $id = count($empresax) + 1;
    $funcionario['id'] = $id;
    $empresax[] = $funcionario;
    $json = json_encode($empresax);
    file_put_contents('empresax.json', $json);
  }