<?php

class Database
{
	private $connect;

	public function __construct()
	{
		$dsn ='mysql:host=localhost;dbname=safer';
		$user ='root';
		$pass ='';
		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

		try
		{
			$this->connect = new PDO($dsn,$user,$pass,$options);
			$this->connect ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function query($type , $accommodation , $semester , $continent , $area , $min_budget , $max_budget)
	{
		$stmt = "SELECT * FROM places WHERE 1 ";
		if(!empty($type))
			$stmt .= "AND type LIKE '{$type}' ";
		if(!empty($accommodation))
			$stmt .= "AND accommodation LIKE '{$accommodation}' ";
		if(!empty($semester))
			$stmt .= "AND semester LIKE '{$semester}' ";
		if(!empty($continent))
			$stmt .= "AND continent LIKE '{$continent}' ";
		if(!empty($area))
			$stmt .= "AND area LIKE '{$area}' ";
		if(!empty($min_budget) && !empty($max_budget))
			$stmt .= "AND budget BETWEEN {$min_budget} AND {$max_budget} ";

		$stmt = $this->connect->prepare($stmt);
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $results;
	}
}
$database = new Database();
