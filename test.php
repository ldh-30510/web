<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>
<?php
    class database{
        public function dbConnect(){
            global $conn;
            $conn = mysqli_connect('192.168.0.30', 'root', '1234', 'snack');
        }
        public function snackdata(){
            global $conn;
            $sql = "SELECT * FROM snackdata";
            $result =  mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                echo '<h2>'.$row['title'].'</h2>';
                echo $row['stock']."개<br>";
                echo $row['pay']."원";
            }
        }
        public function password(){
            global $conn;
            $sql = "SELECT password FROM password WHERE no=1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            return $row;
             // echo $row['password'];
        }
    }
?>