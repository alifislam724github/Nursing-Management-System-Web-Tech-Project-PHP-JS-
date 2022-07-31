<?php
	   $formdata = array(
        'Name'=> $_POST['fname'],
        'Contact'=> $_POST['contact'],
        'ID' => $_POST['id'],
        'Set_Schedule'=> $_POST['set_schedule'],
        'Patient_serial'=> $_POST['serial'],
     
    );
       $existingdata = file_get_contents('../model/NurseInfo.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
    
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   
	   if(file_put_contents("../model/NurseInfo.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("../model/NurseInfo.json");
	 $mydata = json_decode($data);


?>