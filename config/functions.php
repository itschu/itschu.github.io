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

function insertData($con, $params=null, $table="cart"){
	if($params != null){

		$columns = implode(',', array_keys($params));
		$values = array_map(function($i){
			return "'".$i."'";
		},$params);
		$values = implode(',', array_values($values));

		//echo $values;
		$sql = "INSERT INTO $table($columns) VALUES ($values)";
		if($query = $con->query($sql)){

		}else{
			echo $con->error;
		}
	}
}

function addToCart($con, $user, $item, $quantity){
	$params = array(
		'user_id'=>"$user",
		'prod_id'=>"$item",
		'quantity'=>"$quantity"
	);
	$res = insertData($con, $params);
}
?>