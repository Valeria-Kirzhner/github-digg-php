<?php
session_start();


require_once "app/helpers.php";
$page_title = 'About Us';

?>
<?= get_header(); ?>
    <main class="mh-900">
    <div class="container">
        <section id="about-digg">
        <div class="row">
        <div class="col-12 mt-5">
          <h1 class="display-4">About Digg</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, temporibus.</p>
        </div>
        </div>
        </section>
        <section class="w-50">
          <div class="row">
            <div class="col-12">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit veniam ipsum, doloremque deleniti voluptatem expedita fugiat asperiores unde temporibus ducimus eos a exercitationem voluptates ullam cum nostrum? Nam numquam quia quae facere provident. Fugiat quis vero assumenda quibusdam, vitae distinctio deleniti similique adipisci nemo ratione quia? Perspiciatis, laboriosam praesentium.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit veniam ipsum, doloremque deleniti voluptatem expedita fugiat asperiores unde temporibus ducimus eos a exercitationem voluptates ullam cum nostrum? Nam numquam quia quae facere provident. Fugiat quis vero assumenda quibusdam, vitae distinctio deleniti similique adipisci nemo ratione quia? Perspiciatis, laboriosam praesentium.</p>

            </div>
          </div>
        </section>
    </div>
    </main>
    <?= get_footer(); ?>
