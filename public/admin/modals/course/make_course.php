<div class="modal fade" id="courseMakeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <small aria-hidden="true">&times;</small>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" id="post_error" role="alert"></div>
       <form id="make_course_mdal" method="POST">
        <div class="form-group">
            <input type="hidden" value= "<?php echo $userid; ?>"id="postuserid" class="form-control" name="postuserid" placeholder="Author ID">
          <small id="postuseridError"></small>
        </div>
        <div class="form-group">
            <input type="text" id="posttitle" name="posttitle" class="form-control" name="posttitle" placeholder="Post Title">
            <small id="posttitleError"></small>
        </div>
        <div class="form-group">
            <input type="text" onkeypress="return isNumber(event)" id="postprice" class="form-control" name="postprice" placeholder="Post Price ">
            <small id="postpriceError"></small>
        </div>
        <div class="form-group">
            <textarea name="postdescription" id="postdescription"
             class="form-control" placeholder="Post description"></textarea>
            <small id="postdescriptionError"></small>
        </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="make__post__btn" id="make__post__btn">Save changes</button>
      </div>
    </div>
  </div>
</div>