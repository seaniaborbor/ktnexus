<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('main')?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Add New Project</h6>
                    <a href="<?= base_url('dashboard/portfolio') ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Portfolio
                    </a>
                </div>
                <div class="card-body">
                    <?php if (isset($validation) && !empty($validation)) : ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <form id="portfolioForm" action="<?= base_url('dashboard/projects') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        
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
                                               value="<?= old('title') ?>" required>
                                        <div class="form-text">A descriptive title for your project</div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="category" class="form-label">Category *</label>
                                        <select class="form-select" id="category" name="category" required>
                                            <option value="">Select a category</option>
                                            <option value="web" <?= old('category') == 'web' ? 'selected' : '' ?>>Web Development</option>
                                            <option value="software" <?= old('category') == 'software' ? 'selected' : '' ?>>Custom Software</option>
                                            <option value="database" <?= old('category') == 'database' ? 'selected' : '' ?>>Database Management</option>
                                            <option value="mobile" <?= old('category') == 'mobile' ? 'selected' : '' ?>>Mobile App</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="client_name" class="form-label">Client Name</label>
                                        <input type="text" class="form-control" id="client_name" name="client_name" 
                                               value="<?= old('client_name') ?>">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="client_url" class="form-label">Client Website</label>
                                        <input type="url" class="form-control" id="client_url" name="client_url" 
                                               value="<?= old('client_url') ?>">
                                        <div class="form-text">Include http:// or https://</div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="project_date" class="form-label">Project Date</label>
                                        <input type="date" class="form-control" id="project_date" name="project_date" 
                                               value="<?= old('project_date') ?>">
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
                                <div class="mb-3">
                                    <label for="featured_image" class="form-label">Upload Image *</label>
                                    <input class="form-control" type="file" id="featured_image" name="featured_image" accept="image/*" required>
                                    <div class="form-text">Recommended size: 1200x800px (Max 5MB)</div>
                                </div>
                                
                                <div id="imagePreview" class="mt-3 text-center" style="display: none;">
                                    <img id="previewImg" src="#" alt="Preview" class="img-fluid rounded" style="max-height: 300px;">
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
                                              rows="6" required><?= old('description') ?></textarea>
                                    <div class="form-text">Describe the project and your role in it</div>
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
                                        <input class="form-check-input" type="radio" name="status" id="status_published" value="published" checked>
                                        <label class="form-check-label" for="status_published">
                                            Published (Visible on website)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status_draft" value="draft">
                                        <label class="form-check-label" for="status_draft">
                                            Draft (Not visible to public)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-light me-md-2">
                                <i class="bi bi-arrow-counterclockwise"></i> Reset
                            </button>
                            <button type="submit" id="submitBtn" class="btn btn-primary">
                                <i class="bi bi-save"></i> Save Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TinyMCE Editor -->
<script src="https://cdn.tiny.cloud/1/i78hl9xu47w34qfe1d53ad6sy0n6abcqtdnrbwqp8zj2raka/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
// Initialize TinyMCE on description field
tinymce.init({
    selector: '#description',
    plugins: 'link lists code',
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code',
    menubar: false,
    height: 300,
    setup: function(editor) {
        editor.on('change', function() {
            editor.save();
            validateForm();
        });
    }
});

// Image preview for new upload
document.getElementById('featured_image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('previewImg');
            preview.src = e.target.result;
            document.getElementById('imagePreview').style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
    validateForm();
});

// Form validation and auto-submit logic
const form = document.getElementById('portfolioForm');
const requiredFields = form.querySelectorAll('[required]');
const submitBtn = document.getElementById('submitBtn');

// Add event listeners to all required fields
requiredFields.forEach(field => {
    field.addEventListener('input', validateForm);
    field.addEventListener('change', validateForm);
});

function validateForm() {
    let isValid = true;
    
    // Check all required fields
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
        }
    });
    
    // Special check for TinyMCE content
    const descriptionContent = tinymce.get('description').getContent();
    if (!descriptionContent.trim()) {
        isValid = false;
    }
    
    // Special check for file input
    const fileInput = document.getElementById('featured_image');
    if (fileInput.files.length === 0) {
        isValid = false;
    }
    
    // Enable/disable submit button
    submitBtn.disabled = !isValid;
    
    // If form is valid, submit it
    if (isValid) {
        submitForm();
    }
    
    return isValid;
}

function submitForm() {
    // You can either automatically submit or just enable the button
    // Option 1: Auto-submit (uncomment next line)
    form.submit();
    
    // Option 2: Just enable the button (recommended for better UX)
    submitBtn.disabled = true;
}

// Initialize form validation on page load
document.addEventListener('DOMContentLoaded', function() {
    validateForm();
});
</script>
<?=$this->endSection()?>