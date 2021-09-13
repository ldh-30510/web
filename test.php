<?php
  $username = $_POST[ 'username' ];
  $password = $_POST[ 'password' ];
  if ( !is_null( $username ) ) {
    $jb_conn = mysqli_connect( 'localhost', 'codingfactory', '1234qwer', 'codingfactory.net_example' );
    $jb_sql = "SELECT password FROM member WHERE username = '" . $username . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'password' ];
    }
    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
      if ( password_verify( $password, $encrypted_password ) ) {
        header( 'Location: login-ok.php' );
      } else {
        $wp = 1;
      }
    }
  }
?>




