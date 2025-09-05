<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('main')?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Edit Team Member: <?= esc($team_data['name']) ?></h6>
                    <a href="<?= base_url('dashboard/team') ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Team
                    </a>
                </div>
                <div class="card-body">
                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('dashboard/team/edit/' . $team_data['teamId']) ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="post">
                        
                        <!-- Basic Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Basic Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" id="name" name="name" 
                                               value="<?= old('name', $team_data['name']) ?>" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="email" name="email" 
                                               value="<?= old('email', $team_data['email']) ?>" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="position" class="form-label">Position *</label>
                                        <input type="text" class="form-control" id="position" name="position" 
                                               value="<?= old('position', $team_data['position']) ?>" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" 
                                               value="<?= old('phone', $team_data['phone']) ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Profile Image -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Profile Image</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Current Image</label>
                                        <?php if ($team_data['image']): ?>
                                            <img src="<?= base_url('public_assets/img/team/' . $team_data['image']) ?>" 
                                                 class="img-thumbnail d-block mb-2" 
                                                 style="max-height: 200px;">
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
                                        <label for="image" class="form-label">Update Image</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                        <div class="form-text">Leave blank to keep current image</div>
                                        <div id="imagePreview" class="mt-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Links -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Social Links</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                                        <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" 
                                               value="<?= old('linkedin_url', $team_data['linkedin_url']) ?>">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="twitter_url" class="form-label">Twitter URL</label>
                                        <input type="url" class="form-control" id="twitter_url" name="twitter_url" 
                                               value="<?= old('twitter_url', $team_data['twitter_url']) ?>">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="github_url" class="form-label">GitHub URL</label>
                                        <input type="url" class="form-control" id="github_url" name="github_url" 
                                               value="<?= old('github_url', $team_data['github_url']) ?>">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="join_date" class="form-label">Join Date</label>
                                        <input type="date" class="form-control" id="join_date" name="join_date" 
                                               value="<?= old('join_date', $team_data['join_date']) ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bio & Status -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Additional Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="bio" class="form-label">Bio</label>
                                    <textarea class="form-control" id="bio" name="bio" rows="4"><?= old('bio', $team_data['bio']) ?></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_active" id="active" value="1" 
                                               <?= old('is_active', $team_data['is_active']) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="active">
                                            Active
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_active" id="inactive" value="0" 
                                               <?= !old('is_active', $team_data['is_active']) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="inactive">
                                            Inactive
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Password Reset -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Password Reset</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="team_password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="team_password" name="team_password">
                                    <div class="form-text">Leave blank to keep current password</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-light me-md-2">
                                <i class="bi bi-arrow-counterclockwise"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Update Team Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Preview Script -->
<script>
document.getElementById('image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const previewContainer = document.getElementById('imagePreview');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewContainer.innerHTML = `
                <img src="${e.target.result}" 
                     class="img-thumbnail" 
                     style="max-height: 200px;"
                     alt="Preview">
                <p class="text-muted mt-1">New image preview</p>
            `;
        }
        reader.readAsDataURL(file);
    } else {
        previewContainer.innerHTML = '';
    }
});
</script>
<?=$this->endSection()?>