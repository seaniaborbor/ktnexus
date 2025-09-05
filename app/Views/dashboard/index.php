<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('main')?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard Overview</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $passLink ?></li>
    </ol>
    
    <!-- Stats Cards -->
    <div class="row">
        <!-- Projects Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Published Projects</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $completedProjects ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-project-diagram fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Members Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Team Members</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $teamMembers ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                New Messages</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $messageCount ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Completed Projects -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Unpublished Projects</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $incompletedProjects ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="row">
        <!-- Recent Projects -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Projects</h6>
                </div>
                <div class="card-body">
                    <?php if (!empty($recentProjects)): ?>
                        <div class="list-group">
                            <?php foreach ($recentProjects as $project): ?>
                                <a href="<?= base_url('dashboard/portfolio/edit/'.$project['projectId']) ?>" 
                                   class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1"><?= esc($project['title']) ?></h6>
                                        <small><?= date('M d', strtotime($project['project_date'])) ?></small>
                                    </div>
                                    </small>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <p class="text-muted">No projects found</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Recent Messages -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Messages</h6>
                </div>
                <div class="card-body">
                    <?php if (!empty($recentMessages)): ?>
                        <div class="list-group">
                            <?php foreach ($recentMessages as $message): ?>
                                <a href="<?= base_url('dashboard/inbox') ?>" 
                                   class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1"><?= esc($message['name']) ?></h6>
                                        <small><?= date('M d', strtotime($message['created_at'])) ?></small>
                                    </div>
                                    <p class="mb-1"><?= esc($message['subject']) ?></p>
                                    <small><?= esc(substr($message['message'], 0, 40)) ?></small>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <p class="text-muted">No messages found</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection()?>