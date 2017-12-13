<?php 
 
 //**************************************************  UPDATING SECTION
            //pulling the old information on books
            $updatesection = file_get_contents("../json/section.json");
            // converts json string into array
            $updatesection = json_decode($updatesection, true);
            foreach ($updatesection as $key =>$value) {
                 // code...
                  if($value["id"]=="a1"){
                   
                   $updatesection[$key]['totalbooks'] = $value["totalbooks"]+1;
                   
                  }
                  
                }
                $newJsonString = json_encode($updatesection);
                file_put_contents('../json/section.json', $newJsonString);
    //**************************************************  END OF UPDATE FOR SECTION
    
?>