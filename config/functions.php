<?php

require_once ('config.php');

function getProducts($con, $limit=16){
	//$password = hash('sha512', $password);
	if($limit == 16){
		$sql = "SELECT * FROM products_all LIMIT $limit";
	}else{
		$sql = "SELECT * FROM products_all";
	}

    $query = $con->query($sql);
	$rows = $query->num_rows;
    
	if($rows > 0){
		$result = array();  
        while($newRes = $query->fetch_array()){
            $result[] = $newRes;
        }
		return $result;
	} else{
		return $rows;
	}
    
}


function prodDetails($con, $prodId=0){
	//$password = hash('sha512', $password);
	$sql = "SELECT * FROM products_all WHERE unique_key = '$prodId' ";

    $query = $con->query($sql);
	$rows = $query->num_rows;
    
	if($rows > 0){
		$result = array();  
        while($newRes = $query->fetch_array()){
            $result[] = $newRes;
        }
		return $result;
	} else{
		return $rows;
	}
    
}


?>