<?php


  if(isset($_FILES['file'])){
    $emri=$_POST['Emri'];
    $email=$_POST['Email'];
    $file=$_FILES['file'];
    $file_name=$file['name'];
    $file_temp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];
    $file_ext=explode('.',$file_name);
    $file_ext=strtolower(end($file_ext));

    $allowed=array('txt');
    if(in_array($file_ext,$allowed)){
      if($file_error===0){
       if($file_size<=2097152){
          $file_name_new=$emri.'.'.$file_ext;
          $file_destination='ese/'.$file_name_new;
          $myfile=fopen("ese/$file_name_new","w+");
            $txt = "\n\n$emri\n";
            $txt2 ="\n\n$email\n";
            fwrite($myfile, $txt);
            fwrite($myfile,$txt2);
            fclose($myfile);

          if(move_uploaded_file($file_temp,$file_destination)){
            echo $file_destination;
          }
        }
      }
    }
  }

 ?>
