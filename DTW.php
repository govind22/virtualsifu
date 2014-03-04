<?php
//ob_start();
//$time_start = microtime(true); 
$json = $_POST['json']; // $json is a string
//$person = json_decode($json); /
require("MasterJointData.class.php");
require("StudentJointData.class.php");
require("JointDataReader.class.php");
require("Principles.class.php");
//$stringStudent=$_POST['motiondata'];
//set_time_limit(50);

//$files = glob('recordings/*.{json}', GLOB_BRACE);

//foreach($files as $file) {
  //do your work here


$sj1=array();
$sj2=array();
$sj3=array();
$sj4=array();
$sj6=array();
$sj7=array();
$sj8=array();
$sj9=array();
$sj12=array();
$sj13=array();
$sj14=array();
$sj15=array();
$sj17=array();
$sj18=array();
$sj19=array();
$sj20=array();
$sj21=array();
$sj22=array();
$sj23=array();
$sj24=array();

$mj1=array();
$mj2=array();
$mj3=array();
$mj4=array();
$mj6=array();
$mj7=array();
$mj8=array();
$mj9=array();
$mj12=array();
$mj13=array();
$mj14=array();
$mj15=array();
$mj17=array();
$mj18=array();
$mj19=array();
$mj20=array();
$mj21=array();
$mj22=array();
$mj23=array();
$mj24=array();

$masterArray=array();
$studentArray=array();
$frameArrayStudent=array();
$frameArrayMaster=array();

$stringMaster = file_get_contents("master.json");
//$stringStudent = file_get_contents("student.json");


//print_r($json);
$json_master=json_decode($stringMaster);
//print_r($json_master);
//print_r( $json);
//break;
$json_student=json_decode($json);



foreach ($json_master->motiondata as $value)
{

    foreach($value->skeleton as $arr){
	  
		   
			//$masterdata=new MasterJointData($arr->rotation);
			//array_push($masterArray, $masterdata);
			if($arr->id == 1)
			 {
			  //  print_r($arr->rotation);
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj1, $masterdata);
				//print_r($masterdata);
				
			 }
			 else if($arr->id == 2)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj2, $masterdata);
			 }
			else if($arr->id == 3)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj3, $masterdata);
			 }
			else if($arr->id == 4)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj4, $masterdata);
			 }
			else if($arr->id == 6)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj6, $masterdata);
			 }
			else if($arr->id == 7)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj7, $masterdata);
			 }
			 else if($arr->id == 8)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj8, $masterdata);
			 }
			else if($arr->id == 9)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj9, $masterdata);
			 }
			else if($arr->id == 12)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj12, $masterdata);
			 }
			else if($arr->id == 13)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj13, $masterdata);
			 }
			else if($arr->id == 14)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj14, $masterdata);
			 }
			else if($arr->id == 15)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj15, $masterdata);
			 }
			else if($arr->id == 17)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj17, $masterdata);
			 }
			 else if($arr->id == 18)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj18, $masterdata);
			 }
			 else if($arr->id == 19)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj19, $masterdata);
			 }
			else if($arr->id == 20)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj20, $masterdata);
			 }
			 else if($arr->id == 21)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj21, $masterdata);
			 }
			else if($arr->id == 22)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj22, $masterdata);
			 }
			else  if($arr->id == 23)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj23, $masterdata);
			 }
			else  if($arr->id == 24)
			 {
			    $masterdata=new MasterJointData($arr->rotation);
			    array_push($mj24, $masterdata);
			 }
		 
   }
}
//echo "\n\n\n\n\n\n\n\n\n\n========================================= Students===========================================\n\n\n\n\n\n\n\n";
foreach ($json_student->motiondata as $value)

{
      
    foreach($value->skeleton as $arr){
	  
			if($arr->id == 1)
			 {
			    
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj1, $studentdata);
				
			 }
			 else if($arr->id == 2)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj2, $studentdata);
			 }
			else if($arr->id == 3)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj3, $studentdata);
			 }
			else if($arr->id == 4)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj4, $studentdata);
			 }
			else if($arr->id == 6)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj6, $studentdata);
			 }
			else if($arr->id == 7)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj7, $studentdata);
			 }
			 else if($arr->id == 8)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj8, $studentdata);
			 }
			else if($arr->id == 9)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj9, $studentdata);
			 }
			else if($arr->id == 12)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj12, $studentdata);
			 }
			else if($arr->id == 13)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj13, $studentdata);
			 }
			else if($arr->id == 14)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj14, $studentdata);
			 }
			else if($arr->id == 15)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj15, $studentdata);
			 }
			else if($arr->id == 17)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj17, $studentdata);
			 }
			 else if($arr->id == 18)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj18, $studentdata);
			 }
			 else if($arr->id == 19)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj19, $studentdata);
			 }
			else if($arr->id == 20)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj20, $studentdata);
			 }
			 else if($arr->id == 21)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj21, $studentdata);
			 }
			else if($arr->id == 22)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj22, $studentdata);
			 }
			else  if($arr->id == 23)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj23, $studentdata);
			 }
			else  if($arr->id == 24)
			 {
			    $studentdata=new StudentJointData($arr->rotation);
			    array_push($sj24, $studentdata);
			 }
		 
		   
   }
}

$jointReader=new JointDataReader();
$MasterFrame=array();

 for($id=1;$id<=24;$id++)
        {   if($id !=5 && $id !=10 && $id !=16 && $id !=11)
            array_push( $MasterFrame, DTWDistance(${'mj' . $id}, ${'sj' . $id}));
			
			}
		//print_r ($MasterFrame);
		$principle=new Principles(); 
		$p1Score=$principle->principle1($MasterFrame[12],$MasterFrame[15],$MasterFrame[16],$MasterFrame[13],$MasterFrame[14],$MasterFrame[17],$MasterFrame[18],$MasterFrame[19]);
        $p3Score=$principle->principle3($MasterFrame[0],$MasterFrame[2],$MasterFrame[1],$MasterFrame[4],$MasterFrame[8]);
        $p2Score=$principle->principle2($MasterFrame[8],$MasterFrame[4]);
	   $scoreArray=array($p1Score,$p2Score,$p3Score);
	   //$time_end = microtime(true);
	  // $execution_time = ($time_end - $time_start);
		//print_r(json_encode($scoreArray));
		//echo json_encode($execution_time);
		//echo json_encode($scoreArray)." ". $time_end;
		echo json_encode($scoreArray);
	
function DTWDistance($masterArray, $studentArray){
		
		$M=count($masterArray);
		$N=count($studentArray);
	    
	
		$DTWMatrix=array();
		$DTWMatrix[0][0]=0;
		for($j=1;$j<=$M;$j++){
			
		$DTWMatrix[$j][0]=INF;
			
		}
		
		$jointReader=new JointDataReader();
		
		for($i=1;$i<=$N;$i++){
			
			$DTWMatrix[0][$i]=INF;
			
		}
		for($i=1;$i<=$M;$i++){
			
			for($j=1;$j<=$N;$j++){
				
				$cost=$jointReader->EuclideanDistance($masterArray[$i-1], $studentArray[$j-1]);
				$DTWMatrix[$i][$j] = $cost + min($DTWMatrix[$i - 1][$j], min($DTWMatrix[$i][$j - 1], $DTWMatrix[$i - 1][$j - 1]));
	               
			}
		}
		
		return $DTWMatrix[$M][$N];
		
		}

?>