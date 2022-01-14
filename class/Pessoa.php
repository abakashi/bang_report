<?php 

/**
 * Classe Pessoa
 *	 	Criada para cadastrar as pessoas responsáveis pelas postagens
 *		e potenciais usuários.
 */
class Pessoa {
	private $pid;
	private $nome;
	private $nasc;
	private $email;
	private $quote;
	private $pwd;
	private $ativo = true;
    
    /**
     * 	Método construtor
     * 		Recebe os parâmetros nome, data de nascimento, e-mail e 
     * 		senha (ainda será encriptada em algum momento antes
     * 		de seguir para o banco de dados).
     */
	function __construct($nome, $nasc, $email, $pwd) {
		this->nome = $nome;
		this->nasc = $nasc;
		this->email = $email;
		// TODO - Pesquisar HASH da senha. this->pwd = $pwd;
	}

	/**
	 * GETTERS DA CLASSE
	 */

	function getId(){ //ID da pessoa
		return this->pid;
	}

	function getNome(){ //Nome da Pessoa
		return this->nome;
	}

	function getNasc(){//Data de nascimento
		return this->nasc;
	}

	function getEmail(){//Endereço de e-mail
		return this->email;
	}
	
	function getQuote(){//Frase de efeito
		return this->quote;
	}

	function getPwd(){//Senha
		return this->pwd;
	}


	/**	
	* SETTERS DA CLASSE
	* Levando em conta que ninguém troca de nome
	* ou de data de nascimento, estão declarados os 
	* setters dos dados que poderão ser alterados 
	* ao longo da atividade do usuário.
	*/
	
	function setEmail($email){//Endereço de e-mail
		this->email = $email;
	}
	
	function setQuote($quote){//Frase de efeito
		this->quote =  $quote;
	}

	function setPwd($pwd){//Senha
		//TODO - Ainda a decidir como será a senha
	}


}


 ?>