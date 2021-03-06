
<?php
session_start();

if(! isset($_SESSION['user_id'])){
    header('location: signup.php');
  }
require_once "app/helpers.php";
$page_title = 'Edit Post Page';
$errors = ['title' => '', 'article' => '',];
$uid = $_SESSION['user_id'];
$pid = filter_input(INPUT_GET, 'pid', FILTER_SANITIZE_STRING);

if( $pid && is_numeric($pid) ){

    $link = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    $pid = mysqli_real_escape_string($link, $pid);
    $sql = "SELECT * FROM posts WHERE id = $pid AND user_id = $uid";
    $result = mysqli_query($link, $sql);

    if($result && mysqli_num_rows($result) == 1 ){

        $post = mysqli_fetch_assoc($result);

    } else {
        header('location: blog.php');
    }

} else {

  header('location: blog.php');

}





if( isset($_POST['submit'])){

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES); 
    $title = trim($title);
    $article = filter_input(INPUT_POST, 'article', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES) ; 
    $article = trim($article);    
    $valid_form = true;

    if( ! $title || mb_strlen($title) < 2 || mb_strlen($title) > 70){

        $errors['title'] =  ' * Title is required for 2-70 chars';
        $valid_form = false;
    
      }
      if( ! $article || mb_strlen($article) < 2 || mb_strlen($article) > 500){

        $errors['article'] =  ' * Article is required for 2-500 chars';
        $valid_form = false;
      }
      
      if( $form_valid ){

        $link = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
        $title = mysqli_real_escape_string($link, $title);
        $article = mysqli_real_escape_string($link, $article);
        $sql = "UPDATE posts SET title = '$title', article = '$article' WHERE id = $pid AND user_id = $uid";
        mysqli_query($link, $sql);
        header('location: blog.php');
        
      }
      
    }



?>
<?= get_header(); ?>

<main class="mh-900">
    <div class="container">
        <section id="edit-post-content">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1 class="display-4">Edit new post here</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, temporibus.</p>
                </div>
            </div>
        </section>
    
        <section id="edit-form">
            <div class="row">
                <div class="col-lg-6">
                    <form id="post-form" action="" method="POST" novalidate="novalidate" autocomplete="off">
                        <div class="mb-3">
                            <label for="title" class="form-label">* Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $post['title']; ?>">
                            <span class="text-danger"><?= $errors['title']; ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="article" class="form-label">* Article</label>
                            <textarea cols="30" rows="10" type="article" class="form-control" id="article" name="article"><?= $post['title']; ?> </textarea>
                            <span class="text-danger"><?= $errors['article']; ?></span>
                        </div>
                            <button type="submit" name="submit" class="btn btn-primary" >Update Post</button>
                            <a class="btn btn-secondary" href="blog.php">Cancel</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?= get_footer(); ?>