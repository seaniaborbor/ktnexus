<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('main')?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Manage Portfolio</h6>
                    <a href="<?= base_url('dashboard/projects') ?>" class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-circle"></i> Add New Project
                    </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2 mt-5">
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
                        <?php if (empty($projects)): ?>
                            <div class="alert alert-info text-center">
                                No projects found. <a href="<?= base_url('dashboard/projects') ?>">Add your first project</a>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <?php foreach ($projects as $project): ?>
                                    <div class="col-md-6 col-lg-4 mb-4">
                                        <div class="card h-100">
                                            <!-- Project Image -->
                                            <?php if ($project['featured_image']): ?>
                                                <img src="<?= base_url('uploads/portfolio/' . $project['featured_image']) ?>" 
                                                     class="card-img-top" 
                                                     alt="<?= esc($project['title']) ?>"
                                                     style="height: 200px; object-fit: cover;">
                                            <?php else: ?>
                                                <div class="card-img-top bg-light d-flex align-items-center justify-content-center" 
                                                     style="height: 200px;">
                                                    <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                                                </div>
                                            <?php endif; ?>

                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <a href="#" class="text-decoration-none status-change-btn" 
                                                       data-bs-toggle="modal" data-bs-target="#statusModal"
                                                       data-project-id="<?= $project['projectId'] ?>"
                                                       data-current-status="<?= $project['status'] ?>">
                                                        <span class="badge bg-<?= 
                                                            $project['status'] == 'published' ? 'success' : 
                                                            ($project['status'] == 'draft' ? 'warning' : 'secondary')
                                                        ?>">
                                                            <?= ucfirst($project['status']) ?>
                                                        </span>
                                                    </a>
                                                    <span class="badge bg-info">
                                                        <?= ucfirst($project['category']) ?>
                                                    </span>
                                                </div>

                                                <h5 class="card-title"><?= esc($project['title']) ?></h5>
                                                
                                                <?php if ($project['client_name']): ?>
                                                    <p class="card-text mb-1">
                                                        <small class="text-muted">Client: <?= esc($project['client_name']) ?></small>
                                                    </p>
                                                <?php endif; ?>

                                                <?php if ($project['project_date']): ?>
                                                    <p class="card-text">
                                                        <small class="text-muted">
                                                            <?= date('M Y', strtotime($project['project_date'])) ?>
                                                        </small>
                                                    </p>
                                                <?php endif; ?>
                                            </div>

                                            <!-- Card Footer -->
                                            <div class="card-footer bg-transparent border-top-0">
                                                <div class="d-flex justify-content-between">
                                                    <a href="<?= base_url('dashboard/portfolio/edit/' . $project['projectId']) ?>" 
                                                       class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-pencil"></i> Edit
                                                    </a>
                                                    
                                                    <form action="<?= base_url('dashboard/portfolio/delete/' . $project['projectId']) ?>" 
                                                          method="post" class="d-inline">
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="_method" value="post">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                                onclick="return confirm('Are you sure you want to delete this project?')">
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

<!-- Status Change Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Project Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="statusForm" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="post">
                    
                    <div class="mb-3">
                        <label class="form-label">Select Status</label>
                        <select class="form-select" name="status" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function() {
    const statusModal = document.getElementById('statusModal');
    const statusForm = document.getElementById('statusForm');
    let currentProjectId = null;

    statusModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        currentProjectId = button.getAttribute('data-project-id');
        const currentStatus = button.getAttribute('data-current-status');
        
        const statusSelect = statusForm.querySelector('select[name="status"]');
        statusSelect.value = currentStatus;
    });

    statusForm.addEventListener('submit', function(e) {
        const statusSelect = statusForm.querySelector('select[name="status"]');
        const selectedStatus = statusSelect.value;

        // Dynamically set form action
        statusForm.action = `/dashboard/portfolio/status/${selectedStatus}/${currentProjectId}`;
    });
});
</script>


<?=$this->endSection()?>