    <?php require_once __DIR__ . '/guest_ini/header.php'; ?>
    <main class="container" id="main">
      <?php $cards = $db->select("SELECT * From courses ORDER BY created_at DESC"); ?>
      <div class="home_row">
        <?php if (mysqli_num_rows($cards) > 0) :
          foreach ($cards as $card) :
        ?>
            <div class="home_column">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" height="150px" src="../courseThubnail/<?php echo  $card['thubnial']; ?>" alt="Card image cap">
                <div class="card-body ">
                  <h5 class="mb-0">
                    <?php echo $card['title']; ?>
                  </h5>
                  <div class="mb-1 text-muted"><?php echo date('jS, M, Y', strtotime($card['created_at'])); ?></div>
                  <p class="card-text mb-auto"><?php echo substr($card['description'], 0, 20); ?></p>
                </div>
                <a type="submit" class="btn btn-primary enroll__request" href="enroll.php?id=<?php echo $card['id']; ?>" name="enroll__request">
                  Purchase
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </main>
    <?php require_once __DIR__ . '/guest_ini/footer.php'; ?>