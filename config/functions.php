<?php

require_once ('config.php');
require_once ('sessions.php');

function getProducts($con, $limit=16, $table="products_all"){
	if($limit >= 5){
		$sql = "SELECT * FROM $table LIMIT $limit";
	}else{
		$sql = "SELECT * FROM $table";
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

function searchProducts($con, $string, $category){
	
	$stmt = $con->prepare("SELECT * FROM products_all WHERE name LIKE ? AND category = ? ");
	$stmt->bind_param("ss", $string, $category);
	$stmt->execute();
	$res = $stmt->get_result();
	
	$result = array();  
	while($newRes = $res->fetch_assoc()){
		$result[] = $newRes;
	}
	return $result;

}

function prodDetails($con, $prodId=0){
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

function insertData($con, $params=null, $uId=null, $prodId=null, $auant=null, $table="cart"){
	if($params != null){

		$columns = implode(',', array_keys($params));
		$values = array_map(function($i){
			return "'".$i."'";
		},$params);
		$values = implode(',', array_values($values));

		if($uId !== null || $prodId !== null){ 
			$sql = "SELECT * FROM $table WHERE user_id = '$uId' AND prod_id = '$prodId' ";
			
			if($query = $con->query($sql)){ 

				$count = $query->num_rows;
				
				$count = (int)$count;
				if($count >= 1){
					$sql = "UPDATE $table SET quantity='$auant'  WHERE user_id = '$uId' AND prod_id = '$prodId'";
					$con->query($sql);
				}else{
					$sql = "INSERT INTO $table($columns) VALUES ($values)";
					if($con->query($sql)){
						//echo "added";
					}else{
						//echo $con->error;
					}
				}
			}
		}else{
			//echo $values;
			$sql = "INSERT INTO $table($columns) VALUES ($values)";
			if($query = $con->query($sql)){

			}else{
				//echo $con->error;
			}
		}
	}
}

function addToCart($con, $user, $item, $quantity){

	$params = array(
		'user_id'=>"$user",
		'prod_id'=>"$item",
		'quantity'=>"$quantity"
	);
	$res = insertData($con, $params, $user, $item, $quantity);
}

function removeItem($con, $user, $item, $table='cart'){
	// echo "ddd";
	$sql = "DELETE FROM $table  WHERE user_id = '$user' AND prod_id = '$item' ";
	if($con->query($sql)){

	}else{
		//echo $con->error;
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function checkAuthencity($email, $con){
	$sql = "SELECT * FROM users WHERE email = '$email' ";
	$query = $con->query($sql);
	$rows1 = $query->num_rows;

	if($rows1 >= 1 ){
		return false;
	}else{
		return true;
	}
}

function loginUsers($password, $user_email, $con){
	$sql = "SELECT * FROM users WHERE password = '$password' AND email = '$user_email' ";
	$query = $con->query($sql);
	if($query){
		$rows = $query->num_rows;
		if($rows > 0){
			$finRes = [];
			while($result = $query->fetch_assoc()){
				$finRes = $result;
			} 
			return $finRes;
		}else{
			return $rows;
		}
	} else{
		return 0;
	}
}

function prepareArray($con, $firstName, $lastName, $number, $address, $address2, $country, $state, $terms, $email){

	$params = array(
		'firstName'=>"$firstName",
		'lastName'=>"$lastName",
		'number'=>"$number",
		'address'=>"$address",
		'address2'=>"$address2",
		'country'=>"$country",
		'state'=>"$state",
		'terms'=>"$terms"
	);

	$find = array(
		'email'=>"$email"
	);
	$res = updateBillingDetails($con, $params, $find);
	return $res;
}

function updateBillingDetails($con, $params, $find, $table='users'){
	if($params != null){
		// get the where column
		$check = array_map(function($i){
			return $i."=?";
		},array_keys($find));
		$check = implode(',', array_values($check));

		// get the columns
		$columns = array_map(function($i){
			return $i."=?";
		},array_keys($params));

		$columns = implode(',', array_values($columns));

		// get the values
		$values = array_map(function($i){
			return $i;
		},array_values($params));
		
		$stringVal = "sssssssss";

		$sql = "UPDATE $table SET $columns WHERE $check ";
		$stmt = $con->prepare($sql);
		$stmt->bind_param("$stringVal", $values[0], $values[1], $values[2], $values[3], $values[4], $values[5], $values[6], $values[7], $find['email']);
		// 
		if($stmt->execute()){
			return 1;
		}else{
			return 0;
		}
	}else{
		return 0;
	}
}

function getBillDetails($con, $string){
	
	$sql = "SELECT * FROM users  WHERE email = '$string' ";

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

function prinCategoryItem($cur_item){
	printf('
		<li>
			<input type="checkbox" name="" id="">
			<label for="">
			<span>%s</span>
			<!-- <small>(10)</small> -->
			</label>
		</li>
	', $cur_item);
	return $cur_item;
}

function checkAdmin($con, $id){
	
	$sql = "SELECT * FROM users WHERE is_admin = 'yes' AND unique_id = '$id' ";

    $query = $con->query($sql);
	$rows = $query->num_rows;
    
	return $rows;
}


?> 