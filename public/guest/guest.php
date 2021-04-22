<?php require_once __DIR__ . '/guest_ini/header.php'; ?>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-4 font-normal"><?php echo $post['email'];?></h1>
    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
  </div>
</div>
<div>
  <h4>The world's largest selection of courses</h4>
</div>

<div class="row mb-2">
    <!-- card -->
    <?php $cards = $db->select('SELECT * From courses ORDER BY created_at DESC'); ?>
  <?php if (mysqli_num_rows($cards) > 0) :
    foreach ($cards as $card) :
  ?>
      <div class="col-md-6 col-sm-12 col-lg-3">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" height="150px" src="../courseThubnail/<?php echo  $card['thubnial']; ?>" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-start">
           <form action="/app/guest/enroll.php" method="POST">
           <a class="btn btn-primary mb-1 enroll__request" href="/app/guest/enroll.php?id=<?php echo $guest_login_id;?>" name="enroll__request" type="submit">Apply</a>
           </form>
            <h5 class="mb-0">
              <a class="text-dark" href="#"><?php echo $card['title']; ?></a>
            </h5>
            <div class="mb-1 text-muted"><?php echo date('jS, M, Y', strtotime($card['created_at'])); ?></div>
            <p class="card-text mb-auto"><?php echo substr($card['description'], 0, 50); ?></p>
            <a href="student_read_more.php?more=<?php echo $card['id'];?>">Continue reading</a>
          </div>
        </div>
      </div>
  <?php endforeach;
  endif; ?>
  <!-- end -->
</div>
<!-- </div> -->

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-normal border-bottom">
        From the Firehose
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>


      </div>

    </div>
    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-normal">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>

      <div class="p-4">
        <h4 class="font-normal">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-normal">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->


<?php require_once __DIR__ . '/guest_ini/footer.php'; ?>