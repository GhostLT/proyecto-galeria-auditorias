<?php
$dir = "fotos/";

// Open a directory, and read its contents
if (is_dir($dir))
{
  if ($buf = opendir($dir))
  {
    while (($archivo = readdir($buf)) !== false)
    {
      		 
                        echo $archivo;
                       echo "<br>";
                        }

      //echo "filename:" . $archivo . "<br>";
    }
    closedir($buf);
  }

?>