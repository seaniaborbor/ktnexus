<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('main')?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6>Team Members</h6>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addTeamModal">
                        <i class="bi bi-plus-circle"></i> Add Team Member
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success mx-4">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger mx-4">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive p-4">
                        <?php if (empty($all_team)): ?>
                            <div class="alert alert-info text-center">
                                No team members found. Add your first team member.
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <?php foreach ($all_team as $member): ?>
                                    <div class="col-md-6 col-lg-4 mb-4">
                                        <div class="card h-100">
                                            <!-- Team Member Image -->
                                            <?php if ($member['image']): ?>
                                                <img src="<?= base_url('public_assets/img/team/' . $member['image']) ?>" 
                                                     class="card-img-top" 
                                                     alt="<?= esc($member['name']) ?>"
                                                     style="height: 350px; object-fit: cover;">
                                            <?php else: ?>
                                                <div class="card-img-top bg-light d-flex align-items-center justify-content-center" 
                                                     style="height: 350px;">
                                                    <i class="bi bi-person text-muted" style="font-size: 3rem;"></i>
                                                </div>
                                            <?php endif; ?>

                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <span class="badge bg-<?= $member['is_active'] ? 'success' : 'secondary' ?>">
                                                        <?= $member['is_active'] ? 'Active' : 'Inactive' ?>
                                                    </span>
                                                    <small class="text-muted">Joined: <?= date('M Y', strtotime($member['join_date'])) ?></small>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h5 class="card-title"><?= esc($member['name']) ?></h5>
                                                        <h6 class="card-subtitle mb-2 text-primary"><?= esc($member['position']) ?></h6>
                                                        
                                                        <p class="card-text text-truncate"><?= esc($member['bio']) ?></p>
                                                    </div>
                                                    <div class="col-md-3">
                                                       
                                                        <?php $link = base_url() . '#team' . $member['teamId']; ?>
                                                        <img class="img-fluid" src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=<?= urlencode($link) ?>" alt="QR Code" />

                                                </div>
                                                </div>
                                            </div>

                                            <!-- Card Footer -->
                                            <div class="card-footer bg-transparent border-top-0">
                                                <div class="d-flex justify-content-between">
                                                    <a href="<?= base_url('dashboard/team/edit/' . $member['teamId']) ?>" 
                                                       class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-pencil"></i> Edit
                                                    </a>
                                                    
                                                    <form action="<?= base_url('dashboard/team/delete/' . $member['teamId']) ?>" 
                                                          method="post" class="d-inline">
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="_method" value="post">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                                onclick="return confirm('Are you sure you want to delete this team member?')">
                                                            <i class="bi bi-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-center mt-4">
                                <?= $pager->links() ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Team Member Modal -->
<div class="modal fade" id="addTeamModal" tabindex="-1" aria-labelledby="addTeamModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTeamModalLabel">Add New Team Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('dashboard/team') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="position" class="form-label">Position *</label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Profile Image *</label>
                            <input class="form-control" type="file" id="image" name="image" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="join_date" class="form-label">Join Date</label>
                            <input type="date" class="form-control" id="join_date" name="join_date" value="<?= date('Y-m-d') ?>">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                            <input type="url" class="form-control" id="linkedin_url" name="linkedin_url">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="twitter_url" class="form-label">Twitter URL</label>
                            <input type="url" class="form-control" id="twitter_url" name="twitter_url">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="github_url" class="form-label">GitHub URL</label>
                            <input type="url" class="form-control" id="github_url" name="github_url">
                        </div>
                        
                        <div class="col-12 mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Team Member</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Image Preview Script -->
<script>
document.getElementById('image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.createElement('img');
            preview.src = e.target.result;
            preview.className = 'img-thumbnail mt-2';
            preview.style.maxHeight = '150px';
            
            const container = document.querySelector('label[for="image"]').parentNode;
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