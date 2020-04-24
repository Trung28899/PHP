<?php
    if(isset($_POST['submit'])){
        // Getting the input name file in index.php
        $file = $_FILES['file']; 
        // print_r($file); 
        // getting file name of the input
        $fileName = $_FILES['file']['name']; 
        $fileTmpName = $_FILES['file']['tmp_name']; 
        $fileSize = $_FILES['file']['size']; 
        $fileError = $_FILES['file']['error']; 
        $fileType = $_FILES['file']['type']; 

        // getting an array with index [0] = file name and index [1] = extension, eliminate the dot
        $fileExt = explode('.', $fileName); 
        // convert to all lower
        $fileActualExt = strtolower($fileExt[1]);
        print_r($fileExt);
        echo "\n"; 
        print_r($fileActualExt);  

        // allowed extension
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
        // if the extension listed in array, proceed
        if(in_array($fileActualExt, $allowed)){
            // if no error, proceed
            if($fileError === 0){
                // less than 15Mb
                if($fileSize < 15000000){
                    // getting unique id with correct extension
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;  

                    // Send file to the file destination
                    move_uploaded_file($fileTmpName, $fileDestination); 
                    // returning to the index.php page after done processing in upload.php
                    header("Location: index.php?uploadSuccess"); 
                } else {
                    echo "Ur file is too damn big dawg"; 
                }
            } else {
                echo "There was an error uploading your file"; 
            }
        } else {
            echo "Cant upload files of this type"; 
        }
    }

?>