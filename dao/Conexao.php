<?php
class Conexao {

	public static function getConnection() {
		$dsn  = "DRIVER={SQL Server};SERVER=localhost\\SQLEXPRESS;DATABASE=DB";
		$user = "**********";
		$pass = "**********";
		$conn = odbc_connect($dsn, $user, $pass);	
		return $conn;
	}

	public static function execute($conn, $sql) {
		$rs = odbc_exec($conn, $sql);
		return $rs;
	}
	
	public static function close($conn) {
		odbc_close($conn);
	}
}