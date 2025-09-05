<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('main')?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Edit Project: <?= esc($project['title']) ?></h6>
                    <a href="<?= base_url('admin/portfolio') ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Portfolio
                    </a>
                </div>
                <div class="card-body">
                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('dashboard/portfolio/edit/' . $project['projectId']) ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="post">
                        
                        <!-- Basic Information Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Basic Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="title" class="form-label">Project Title *</label>
                                        <input type="text" class="form-control" id="title" name="title" 
                                               value="<?= old('title', $project['title']) ?>" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="category" class="form-label">Category *</label>
                                        <select class="form-select" id="category" name="category" required>
                                            <option value="web" <?= old('category', $project['category']) == 'web' ? 'selected' : '' ?>>Web Development</option>
                                            <option value="software" <?= old('category', $project['category']) == 'software' ? 'selected' : '' ?>>Custom Software</option>
                                            <option value="database" <?= old('category', $project['category']) == 'database' ? 'selected' : '' ?>>Database Management</option>
                                            <option value="mobile" <?= old('category', $project['category']) == 'mobile' ? 'selected' : '' ?>>Mobile App</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="client_name" class="form-label">Client Name</label>
                                        <input type="text" class="form-control" id="client_name" name="client_name" 
                                               value="<?= old('client_name', $project['client_name']) ?>">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="client_url" class="form-label">Client Website</label>
                                        <input type="url" class="form-control" id="client_url" name="client_url" 
                                               value="<?= old('client_url', $project['client_url']) ?>">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="project_date" class="form-label">Project Date</label>
                                        <input type="date" class="form-control" id="project_date" name="project_date" 
                                               value="<?= old('project_date', $project['project_date']) ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Featured Image Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Featured Image</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Current Image</label>
                                        <?php if ($project['featured_image']): ?>
                                            <img src="<?= base_url('uploads/portfolio/' . $project['featured_image']) ?>" 
                                                 class="img-fluid rounded mb-2" 
                                                 style="max-height: 200px; display: block;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remove_image" name="remove_image" value="1">
                                                <label class="form-check-label" for="remove_image">
                                                    Remove current image
                                                </label>
                                            </div>
                                        <?php else: ?>
                                            <div class="alert alert-info">No image currently set</div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="featured_image" class="form-label">Update Image</label>
                                        <input class="form-control" type="file" id="featured_image" name="featured_image" accept="image/*">
                                        <div class="form-text">Leave blank to keep current image</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Details Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Project Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Project Description *</label>
                                    <textarea class="form-control" id="description" name="description" 
                                              rows="6" required><?= old('description', $project['description']) ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Status Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Publishing Options</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Status *</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status_published" 
                                               value="published" <?= old('status', $project['status']) == 'published' ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="status_published">
                                            Published (Visible on website)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status_draft" 
                                               value="draft" <?= old('status', $project['status']) == 'draft' ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="status_draft">
                                            Draft (Not visible to public)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status_archived" 
                                               value="archived" <?= old('status', $project['status']) == 'archived' ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="status_archived">
                                            Archived (Hidden from public)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-light me-md-2">
                                <i class="bi bi-arrow-counterclockwise"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Update Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TinyMCE Editor (optional) -->
<script src="https://cdn.tiny.cloud/1/i78hl9xu47w34qfe1d53ad6sy0n6abcqtdnrbwqp8zj2raka/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
// Initialize TinyMCE on description field
tinymce.init({
    selector: '#description',
    plugins: 'link lists code',
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code',
    menubar: false,
    height: 300
});

// Image preview for new upload
document.getElementById('featured_image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.createElement('img');
            preview.src = e.target.result;
            preview.className = 'img-fluid rounded mt-2';
            preview.style.maxHeight = '200px';
            
            const container = document.querySelector('.card-body .row .col-md-6:last-child');
            const existingPreview = container.querySelector('img');
            if (existingPreview) {
                container.replaceChild(preview, existingPreview);
            } else {
                container.appendChild(preview);
            }
        }
        reader.readAsDataURL(file);
    }
});
</script>
<?=$this->endSection()?>