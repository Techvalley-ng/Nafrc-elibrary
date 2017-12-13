<?php 

    //setting the file for upload
    $tmp_file = $_FILES['book']['tmp_name'];
	$target_file = basename($_FILES['book']['name']);
	
	//uploading the file and testing the upload
	if(move_uploaded_file($tmp_file, "../books/$target_file")) {
	    
    	$bookcategor    =      $_POST['bookcategor'];
        $section        =      $_POST['section'];
        $booktitle      =      $_POST['booktitle'];
        $bookauthor     =      $_POST['bookauthor'];
        $year           =      $_POST['year'];
        $edition        =      $_POST['edition'];
        $bookurl        =      $target_file; 
        
        //creating array for new upload
         $booksdata = array(
          'bookcategor' => $bookcategor,
          'section'     => $section,
          'booktitle'   => $booktitle,
          'bookauthor'  => $bookauthor,
          'year'        => $year,
          'edition'     => $edition,
          'bookurl'     => $bookurl,
        );
        //********************************************** SAVING THE JSON SAVE RECORD *********
        // an empty array to hold the old information
        $oldbooks = array();
        //pulling the old information on books
        $jsondata_oldbooks = file_get_contents("../json/books.json");
        // converts json string into array
        $oldbooks = json_decode($jsondata_oldbooks, true);
        // joining the old record with that data
        $oldbooks[]=$booksdata;
        // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $finaldata = json_encode($oldbooks, JSON_PRETTY_PRINT);
        //uploading the final result to be save
       file_put_contents("../json/books.json", $finaldata);
	   //********************************************** SAVING THE JSON SAVE RECORD ********* 
	   
	   
	//************************************************************** updating books category
    //pulling the old information on books
    $updatebookcategory = file_get_contents("../json/bookscategory.json");
    // converts json string into array
    $updatebookcategory = json_decode($updatebookcategory, true);
        foreach ($updatebookcategory as $key =>$value) {
            if($value["name"]==$bookcategor){
                //upadting the march
               $updatebookcategory[$key]['totalbooks'] = $value["totalbooks"]+1; 
            }
        }
        //updating 
        $newJsonString = json_encode($updatebookcategory);
        file_put_contents('../json/bookscategory.json', $newJsonString);
    //************************************************************** END updating books category
    
    //**************************************************  UPDATING SECTION
            //pulling the old information on books
            $updatesection = file_get_contents("../json/section.json");
            // converts json string into array
            $updatesection = json_decode($updatesection, true);
            foreach ($updatesection as $key =>$value) {
                 // code...
                  if($value["id"]==$section){
                   
                   $updatesection[$key]['totalbooks'] = $value["totalbooks"]+1;
                   
                  }
                  
                }
                $newJsonString = json_encode($updatesection);
                file_put_contents('../json/section.json', $newJsonString);
    //**************************************************  END OF UPDATE FOR SECTION
    
        header("location: https://elibrary-abwali.c9users.io/#!/addnewbook");
	}
	//end of the upload and test
?>