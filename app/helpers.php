<?php
/*define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PWD', 'root');
define('MYSQL_DB', 'digg');*/

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("heroku_e8e8c6512f0de7b"));
$cleardb_server = $cleardb_url["eu-cdbr-west-01.cleardb.com"];
$cleardb_username = $cleardb_url["bcd0b85d77274b"];
$cleardb_password = $cleardb_url["19952954"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

function dd($data, $die = true){
    echo '<pre>';
        print_r($data);
    echo '</pre>';
    if( $die){
         die;
    }else{
        echo '<hr>';
    }
}

function get_footer($page = 'footer'){

    include "template/$page.php";
}
function get_header($page = 'header'){
    
    global $page_title;
    include "template/$page.php";

}

function old($fn){

    return $_REQUEST[$fn] ?? '';
}

function email_exist($link, $email){

    $exist = false;
    $sql = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $sql);

    if($result && mysqli_num_rows($result)){
        $exist = true;
    }
    return $exist;
}
function str_random($length = 30) {
  
    $characters = '0123456789';
    $characters .= 'abcdefghijklmnopqrstuvwxyz';
    $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
    $max = strlen($characters) - 1;
    $randomString = '';
  
    for ($x = 0; $x < $length; $x++) {
      
      $randomString .= $characters[ rand(0, $max) ];
      
    }
  
    return $randomString;
    
  }