<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form" action="{{ route('works.store') }}" method="post">@csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Company Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <div class="form-group">
              <label for="company_name">Name of Company</label>
              <input type="text" name="company_name" id="company_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="designation">Designation</label>
              <input type="text" name="designation" id="designation" class="form-control">
            </div>
            <div class="form-group">
              <label for="joining_date">Joining date</label>
              <input type="date" name="joining_date" id="joining_date" class="form-control">
            </div>
            <div class="form-group">
              <label for="end_date">End date</label>
              <input type="date" name="end_date" id="end_date" class="form-control">
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" name="location" id="location" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
    </div>
</div>