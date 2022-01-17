<?php 

// Arquivo de configurações do Sistema

/**
 * Este é o arquivo principal de configuração do sistema,
 * os parâmetros devem ser mudados para possível instalação
 * em diversos ambientes.
 */


$DATABASE = array(
    host=> "mysql:dbname=nomeDoBanco;host=localhost",//Tipo, nome do banco de dados e seu endereço.
    user=> "root",//Nome de usuário
    pwd=> "root"//Senha do Banco de dados
);


function autoInclude($nomeClasse){ //Função para incluir classes dinamicamente.
    if(file_exists("class". DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
        require_once("class". DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    } else {
        echo "Classe $nomeClasse não encontrada.";
    }

}

spl_autoload_register(autoInclude);

?>