<?php

//requisitos
//$conn -> conexão com banco de dados

function numero($text){

    $text = is_numeric($text);
    if($text){
        return $text;
    }else{
    return false;
    }

}

//retornar um produto pelo id
function produtos($id) {
    
    //tratando id recebido
    $id = numero($id);
    //buscando informacoes do produto no db
    $db_produto = mysqli_featch_array(mysqli_query($conn, "SELECT id,nome FROM produtos WHERE id='".$id."'"));

    $nome_produto = $db_produto["nome"];

    echo "ID: ".$id;
    echo "Nome do produto: ".$nome_produto."<br/>";
    
}