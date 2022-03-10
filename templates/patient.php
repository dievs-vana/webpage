<!-- Modal -->
<div class="modal fade" id="form_patient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="category_name">Brand Name</label>
          <input type="text" name="brand_name" class="form-control" id="brand_name" placeholder="Enter brand">
          <small id="brand_error" class="form-text text-muted"></small>

          </div>
          <!--
          <div class="form-group">
          <label>Category</label>
          <select class="form-control" id="select_cat" name="select_cat" required="">
          </select>
          </div> -->
          <br>
          <button id="addBrand" type="submit" class="btn btn-primary">Add</button>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $("#addBrand").click(function() {
      var brandName = $("input[name=brand_name]").val();
      $.ajax({
          url: "../webpage/api/brand/addBrand.php",
          method: "POST",
          data: {
            brand_name: brandName,
            status: 1
          },
          success: function(data) {
            alert('salamat hesus at byernes ulit');
          },
          error: function(data) {
            alert('salamat hudas at byernes ulit');
          }
      });
  });
</script>