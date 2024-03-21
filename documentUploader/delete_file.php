  <?php
  // $basedir = "staffportal/documentUploader/files/1";
  $basedir = $_POST["file"];  

  // $path = realpath($basedir."/".$file_to_delete);
  $path = realpath($basedir);
  // echo $path;
  if (substr($path, 0, strlen($basedir)) != $basedir)
   die ("Access denied"); 

  unlink($path);

  ?>