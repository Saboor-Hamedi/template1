  <?php require_once __DIR__ . '/guest_ini/header.php'; ?>
  <?php
  if (!isset($_GET['id'])) {
    return false;
  } ?>
  <!-- </div> -->
  <main class="container" id="main">
 
    <?php
    $course_id = mysqli_real_escape_string($db->conn, $_GET['id']);
    $cards = $db->select("SELECT * From courses WHERE id =
                 {$course_id}  ORDER BY created_at DESC"); ?>
    <?php if (mysqli_num_rows($cards) > 0) :
      foreach ($cards as $card) :
    ?>
        <div class="col-md-12">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" height="150px" src="../courseThubnail/<?php echo  $card['thubnial']; ?>" alt="Card image cap">
            <div class="card-body d-flex flex-column align-items-start">
              <h5 class="mb-0">
                <?php echo $card['title']; ?>
              </h5>
              <div class="mb-1 text-muted"><?php echo date('jS, M, Y', strtotime($card['created_at'])); ?></div>
              <p class="card-text mb-auto"><?php echo $card['description']; ?></p>
            </div>
            <div class="col-md-4 blog-sidebar">
              <div class=" mb-3 bg-light rounded">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="apply__form">
                  <div class="form-group">
                    <input type="hidden" value="<?php echo $course_id; ?>" class="form-control" placeholder="Course ID" name="course_apply_id">
                  </div>
                  <div class="form-group">
                    <input type="hidden" value="<?php echo $guest_login_id; ?>" class="form-control" placeholder="Guest ID" name="guest_apply_id">
                  </div>
                  <div class="alert alert-info" role="alert" id="apply__message"></div>
                  <button class="btn btn-primary mb-1" name="apply_btn" id="apply_btn">Apply</button>
                </form>
              </div>
            </div>

          </div>
        </div>
    <?php endforeach; ?>
   <?php  endif; ?>
  </main>
  <?php require_once __DIR__ . '/guest_ini/footer.php'; ?>