<?php
session_start();


require_once "app/helpers.php";
$page_title = 'Home Page';

?>
<?= get_header(); ?>
    <main class="mh-900">
    <div class="container">
        <section id="join-us">
          <div class="row">
          <div class="col-12 mt-5 text-center">
          <h1>Welcome to Digg!</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p class="mt-3">
          <a class="btn btn-outline-warning" href="signup.php">Join us and start digg</a>
          </p>
          </div></div>
        </section>
          <section id="about-digg">
          <div class="row">
          <div class="col-12 mt-5">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptas fugiat aliquid cumque autem doloremque aperiam. Magnam, tempore!</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptas fugiat aliquid cumque autem doloremque aperiam. Magnam, tempore!</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque doloremque placeat officia fuga enim ducimus consequuntur minima magnam? Nemo, iure eos voluptatem culpa voluptate officiis at nihil blanditiis libero quis?</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, dignissimos?</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum accusantium voluptas molestias, quos vero minima cupiditate, ut facere tempore corrupti blanditiis maxime? Consequuntur, ipsam officiis! Laudantium autem nihil similique, corrupti illum natus aperiam placeat enim!</p>
          </div></div>
      
        
        </section>
    </div>
    </main>
    <?= get_footer(); ?>
