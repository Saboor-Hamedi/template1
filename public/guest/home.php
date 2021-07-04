    <?php
    require_once __DIR__ . '/guest_ini/header.php';
    ?>

    <main class="container" id="main">
        <h4>Your courses</h4>
        <?php $sql = "SELECT * FROM courses INNER JOIN
                   enroll ON  courses.id = enroll.course_id
                  WHERE enroll.guest_apply_id = $guest_login_id "; ?>
        <?php $results = $db->query($sql); ?>
        <?php if ($results) : ?>
            <?php $results->fetch_array(); ?>
            <div class="home_row">
                <?php foreach ($results as $data) : ?>
                    <div class="home_column">
                        <div class="card" style="height: 100%; ">
                            <img class="card-img-top" src="<?php echo $data['thubnial']; ?>">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $data['title']; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo substr($data['description'], 0, 50); ?>
                                </p>
                            </div>
                            <div class="course_footer">
                            <?php if ($data['status'] <= 0) : ?>
                                    <a href="javascript:void(0);" class="btn btn-primary">You have not yet pay...</a>
                            <?php else : ?>
                                    <a href="javascript:void(0);" class="btn btn-primary">Read more</a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <h4>No course purchased yet</h4>
        <?php endif; ?>
    </main>
    <?php require_once __DIR__ . '/guest_ini/footer.php'; ?>