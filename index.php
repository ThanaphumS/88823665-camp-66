<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>File index.php</h1>
        <?php
            echo "Hello";
            echo "<br>";
            print "Hello World";
            $myvar = "Hello Variable";
        ?>
        <?php echo "<h1>".$myvar."</h1>";?>
        <?php 
            $x = 1;
            function myfunction($myparam){
                global $x;
                $x = "Hello Global";
                return $myparam;
            }
            echo "<p>".MYFUNCTION("Hello Function")."</p>";
        ?>
        <h1><?php echo $x; ?></h1>
        <?php echo "1" + '1'; // 2 ?>
        <?php $mychar = "a"; ?>
        <h1><?php echo ++$mychar; ?></h1>
        <?php
            static $a = 1;
            $a++;
            echo $a;
        ?>
        <?php
            if(1 === '1'){
                echo "1 == \"1\"";
            }else{
                echo "1 != \"1\"";
            }

            $myarray = array(1,2,3,4,5);
            // sizeof($myarray);
            for ($i=0; $i < count($myarray); $i++) { 
                echo $myarray[$i];
            }
            echo "<br>";
            foreach ($myarray as $index => $value) {
                echo $value;
            }
            echo "<br>";
            $myarray2[] = [1,2,3];
            $myarray2[] = 2;
            $myarray2[4] = 3;
            $myarray2[] = 4;
            $myarray2[] = 5;
            print_r($myarray2);
            echo "<br>";
            $myarray3 = array(1,2,3,"myindex" => 4, 0 => 9);
            $myarray3["myindex"] = 1;
            print_r($myarray3);
            foreach ($myarray as $value) {
                echo $value;
            }
        ?>
    </body>
</html>