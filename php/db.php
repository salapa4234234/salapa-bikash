<?php	
	class db
		{
			public $hostname="localhost";
			public $username="root";
			public $password="papa2055";
			public $dbname="salapanew";
			function select($a)
				{
					
					$con=mysqli_connect($this->hostname, $this->username, 
					$this->password, $this->dbname);
					//mysqli_select_db($con,"nced");
					/* ************* query for unicode conversion  */
					 mysqli_query($con,'SET NAMES utf8');
					/* ************* query for unicode conversion  */
					
					$qry=$a;
				    return $result=mysqli_query($con,$qry);					
				}
			
			function insert($a)
				{
					$con=mysqli_connect($this->hostname, $this->username, 
					$this->password, $this->dbname);
					//mysqli_select_db($con,"nced");
					/* ************* query for unicode conversion  */
					 mysqli_query($con,'SET NAMES utf8');
					/* ************* query for unicode conversion  */
					
					$qry=$a;
					$result=mysqli_query($con,$qry);
					return $result;
				}
			function sql_inject($a)
				{
					$con=mysqli_connect($this->hostname, $this->username, 
					$this->password, $this->dbname);
					return mysqli_real_escape_string($con,$a);
				}
			function sql_close()
				{
					$con=mysqli_connect($this->hostname, $this->username, 
					$this->password, $this->dbname);
					return mysqli_close($con);
				}
			function htmlchar($string)
				{
					return htmlspecialchars($string);
				}

		}
	
	$obj=new db();
	
?>