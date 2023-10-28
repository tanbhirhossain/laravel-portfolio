<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form" action="{{ route('projects.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Company Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" id="category" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="client">Client</label>
                        <input type="text" name="client" id="client" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="project_date">Project Date</label>
                        <input type="date" name="project_date" id="project_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="project_url">Project URL</label>
                        <input type="text" name="project_url" id="project_url" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="project_desc">Project Description</label>
                        <textarea name="project_desc" id="project_desc" class="form-control"></textarea>
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
