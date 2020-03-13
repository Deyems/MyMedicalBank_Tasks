<?php

  if(isset($_POST)){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
        $storage = $_POST;
    // var_dump($storage);

    function sendDetails($storage){
      $myFile = fopen("store.txt","a+") or die("Unable to open file!");
      foreach($storage as $key => $val){
        if($key != 'send'){
        $paired = $key. ": ". $val."\n";
        fwrite($myFile,$paired);
        }
      }
      fclose($myFile);
      return true;
    }

    if(sendDetails($storage)){
      // echo "Sent details to the file";
      echo "<script>alert('details send')</script>";
      echo "<script>window.location='index.php'</script>";
    }



  }

?>
