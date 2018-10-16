<?PHP

$json=array();
	if(isset($_GET["numero"])){
		$numero=$_GET['numero'];
		

$fibonacci = array();
$fibonacci[0] = 0;
$fibonacci[1] = 1;

for ($i = 2; $i < $numero+2; $i++) {
  $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
 // echo($fibonacci[$i]);
 //echo " ";
}
 //print array_sum($fibonacci);
			$json['fibo'][]=$fibonacci;	
			echo json_encode($json);
					
					
				
		
			
	}else{
		$json["fibo"]="error";
		echo json_encode($json);
	}
?>
