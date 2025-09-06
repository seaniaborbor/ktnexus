<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('content')?>
<!-- Page Header -->
<section class="page-header bg-light py-5">
    <div class="container text-center">
        <h1 data-aos="fade-up">Our Team</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
            <ol class="breadcrumb justify-content-center bg-transparent p-0">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Team</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <!-- Big Profile Column -->
        <div class="col-md-8">
            <div id="profile-card" class="card shadow-sm border-0 p-4 position-relative overflow-hidden">
                <?php if($selectedMember): ?>
                    <div class="text-center animate__animated animate__fadeInRight">
                        <div class="position-relative d-inline-block mb-3">
                            <img src="<?= base_url('public_assets/img/team/' . $selectedMember['image']) ?>" 
                                 class="rounded-circle border border-3 border-primary" width="180" height="180" 
                                 alt="<?= esc($selectedMember['name']) ?>">
                        </div>

                        <h2 class="fw-bold"><?= esc($selectedMember['name']) ?></h2>
                        <p class="text-primary fst-italic"><?= esc($selectedMember['position']) ?></p>
                        <p class="text-muted"><?= esc($selectedMember['bio']) ?></p>

                        <div class="mt-3">
                            <?php if($selectedMember['linkedin_url']): ?>
                                <a href="<?= esc($selectedMember['linkedin_url']) ?>" target="_blank" class="me-2 text-decoration-none text-primary">
                                    <i class="fab fa-linkedin fa-lg"></i>
                                </a>
                            <?php endif; ?>
                            <?php if($selectedMember['twitter_url']): ?>
                                <a href="<?= esc($selectedMember['twitter_url']) ?>" target="_blank" class="me-2 text-decoration-none text-info">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                            <?php endif; ?>
                            <?php if($selectedMember['github_url']): ?>
                                <a href="<?= esc($selectedMember['github_url']) ?>" target="_blank" class="me-2 text-decoration-none text-dark">
                                    <i class="fab fa-github fa-lg"></i>
                                </a>
                            <?php endif; ?>
                            <?php if($selectedMember['email']): ?>
                                <a href="mailto:<?= esc($selectedMember['email']) ?>" class="text-decoration-none text-danger">
                                    <i class="fas fa-envelope fa-lg"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Default animated guide -->
                    <div class="text-center text-muted py-5 animate__animated animate__fadeIn">
                        <div class="spinner-border text-primary mb-3" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <h5>Click on a team member’s photo or name to view their profile</h5>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Team List Column -->
        <div class="col-md-4">
            <div class="list-group shadow-sm">
                <?php foreach($team as $member): ?>
                    <a href="<?= base_url('team?member=' . $member['teamId']) ?>" 
                       class="list-group-item list-group-item-action d-flex align-items-center justify-content-start 
                       <?= ($selectedMember && $selectedMember['teamId'] == $member['teamId']) ? 'active bg-primary text-white' : '' ?>">
                        <img src="<?= base_url('public_assets/img/team/' . $member['image']) ?>" 
                             class="rounded-circle me-3" width="50" height="50" alt="<?= esc($member['name']) ?>">
                        <div>
                            <div class="fw-bold"><?= esc($member['name']) ?></div>
                            <small class="text-muted"><?= esc($member['position']) ?></small>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Animations & Hover Effects -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    #profile-card .spinner-border {
        width: 3rem;
        height: 3rem;
    }
    .list-group-item:hover {
        background-color: #f0f8ff !important;
        transform: scale(1.03);
        transition: transform 0.2s, background-color 0.2s;
    }
    .list-group-item img {
        transition: transform 0.3s;
    }
    .list-group-item:hover img {
        transform: scale(1.2);
    }
</style>
<?=$this->endSection()?>
