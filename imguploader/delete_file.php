  <?php
  // $basedir = "staffportal/documentUploader/files/1";
  if (isset($_POST["imgthumb"])) {
    $imgthumb = $_POST["imgthumb"];  
  unlink($imgthumb);
  }

  if (isset($_POST["imgpath"])) {
    $imgpath = $_POST["imgpath"];  
  unlink($imgpath);
  }



  // $path = realpath($basedir."/".$file_to_delete);

  // $path = realpath($basedir);
  // echo $path;
  // if (substr($path, 0, strlen($basedir)) != $basedir)
  //  die ("Access denied"); 


  ?>