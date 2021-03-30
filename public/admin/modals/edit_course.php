<div class="modal fade" id="courseEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" id="post_edit" role="alert"></div>
       <form id="edit_course_mdal" method="POST">
       <!-- ===================== -->
        <div class="form-group">
            <input type="hidden" id="course_post_id" class="form-control"
             name="course_post_id" placeholder="post id">
          <span id="postuseridErrorid"></span>
        </div>
        <!-- ===================== -->
        <div class="form-group">
            <input type="text" id="course_post_title" name="course_post_title"
              class="form-control" name="posttitle" placeholder="post title">
            <span id="posttitleErroredit"></span>
        </div>
         <!-- ===================== -->
        <div class="form-group">
            <input type="text" onkeypress="return isNumber(event)" 
            id="course_post_price" class="form-control"
             name="course_post_price" placeholder="post price">
            <span id="postpriceErroredit"></span>
        </div>
         <!-- ===================== -->
        <div class="form-group">
            <textarea name="course_post_desc" id="course_post_desc" 
             class="form-control" placeholder="Post update"></textarea>
            <span id="postdescriptionErroredit"></span>
        </div>
         <!-- ===================== -->
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="make__post__btn" id="make__post__btn">Save changes</button>
      </div>
    </div>
  </div>
</div>