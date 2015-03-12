<?php

class Connection {

	//http://phpmyadmin.locaweb.com.br/
	
	protected $connection = 'mysql.designlab.com.br';
	protected $database  = 'designlab_auto';
	protected $user = 'dlab34';
	protected $password  = 'q#9ebdc.';
	
	protected $c;
	protected $db;
        	
	public function __construct ( ) {
		
		$this->c = mysql_connect ( $this->connection, $this->user, $this->password ) 
		or die ( "Não foi possivel estabelecer a conexão com o banco de dados: ". mysql_error ( ) );
	
		$this->db = mysql_select_db ( $this->database, $this->c );
		
	}
	
	public function close ( ) {
		
		mysql_close( $this->c );
		
		unset( $this->connection );
		unset( $this->database );
		
		unset( $this->user );
		unset( $this->password );
	
		unset( $this->c );
		unset( $this->db );
		
	}


}



?>