
<?php
session_start();

if(! isset($_SESSION['user_id'])){
    header('location: signup.php');
  }
require_once "app/helpers.php";
$page_title = 'Delete Post Page';
$uid = $_SESSION['user_id'];
if( isset($_POST['submit']) ){

    $pid = filter_input(INPUT_GET, 'pid', FILTER_SANITIZE_STRING);
  
    if( $pid && is_numeric($pid) ){
  
      $link = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
      $pid = mysqli_real_escape_string($link, $pid);
      $sql = "DELETE FROM posts WHERE id = $pid AND user_id = $uid";
      mysqli_query($link, $sql);
      header('location: blog.php');
  
    }
  
  }

?>
<?= get_header(); ?>
    <main class="mh-900">
    <div class="container">
        <section id="delete-post-content">
        <div class="row">
        <div class="col-12 mt-5">
            <h3>Are you sure you want to delete this post ?</h3>
            <form action="" method="POST">
                <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-secondary" href="blog.php">Cancel</a>
            </form>
          </div>
        </section>
    </div>
    </main>
    <?= get_footer(); ?>