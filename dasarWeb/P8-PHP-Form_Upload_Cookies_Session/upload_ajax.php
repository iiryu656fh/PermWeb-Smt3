<?php 
    if (isset($_FILES['files'])){
        $errors = array();
        $extensions = array("jpg", "jpeg", "png", "gif");

        $totalFiles = count($_FILES['files']['name']);

        for ($i = 0; $i < $totalFiles; $i++){
            $file_name = $_FILES['files']['name'][$i];
            $file_size = $_FILES['files']['size'][$i];
            $file_tmp = $_FILES['files']['tmp_name'][$i];
            $file_type = $_FILES['files']['type'][$i];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
            if(in_array($file_ext, $extensions) === false){
                $errors[] = "$file_name Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF";
            }
            
            if($file_size > 2097152) {
                $errors[] = "$file_name Ukuran file tidak boleh lebih dari 2MB";
            }
    
            if(empty($errors) == true) {
                move_uploaded_file($file_tmp, "pictures/" . $file_name);
                echo "$file_name File berhasil diunggah";
            } else {
                echo implode(" ", $errors);
            }
        }
        
    }
?>