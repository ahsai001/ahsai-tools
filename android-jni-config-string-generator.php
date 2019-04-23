<?php  
        $output = "";
        if(isset($_POST["license"]) && !empty($_POST["license"])){
            $license = $_POST["license"];
            $license_in_array = str_split($license);
            foreach ($license_in_array as $value) {
                $output .= "A('".$value."'),";
            }
        }
?> 
<html>
<body>
<form method="POST" action="android-jni-config-string-generator.php">
  License :<br>
  <input type="text" name="license" value="">
  <br>
  <input type="submit" value="Submit">
</form>
<quote><?php echo "result : ".$output;?></quote>
</body>
</html>
