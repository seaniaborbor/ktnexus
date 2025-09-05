<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('content')?>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 data-aos="fade-up"><?= esc($project['title']) ?></h1>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('portfolio') ?>">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= esc(character_limiter($project['title'], 20)) ?></li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Portfolio Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php if (!empty($project['featured_image'])): ?>
                        <img src="<?= base_url('uploads/portfolio/' . esc($project['featured_image'])) ?>" alt="<?= esc($project['title']) ?>" class="img-fluid rounded-3 portfolio-details-img" data-aos="fade-up">
                    <?php else: ?>
                        <img src="https://via.placeholder.com/1200x600" alt="<?= esc($project['title']) ?>" class="img-fluid rounded-3 portfolio-details-img" data-aos="fade-up">
                    <?php endif; ?>
                    
                    <h2 data-aos="fade-up"><?= esc($project['title']) ?></h2>
                    <p class="lead" data-aos="fade-up"><?= esc(character_limiter(strip_tags(html_entity_decode($project['description'])), 150)) ?></p>
                    
                    <div data-aos="fade-up">
                        <h3>Project Overview</h3>
                        <?= html_entity_decode($project['description']) ?>
                    </div>
                    
                    <?php if (!empty($related_projects)): ?>
                    <div class="mt-5" data-aos="fade-up">
                        <h3>Related Projects</h3>
                        <div class="row g-4">
                            <?php foreach ($related_projects as $related): ?>
                            <div class="col-md-6">
                                <div class="related-project-card h-100">
                                    <?php if (!empty($related['featured_image'])): ?>
                                        <img src="<?= base_url('uploads/portfolio/' . esc($related['featured_image'])) ?>" alt="<?= esc($related['title']) ?>" class="related-project-img img-fluid">
                                    <?php else: ?>
                                        <img src="https://via.placeholder.com/600x400" alt="<?= esc($related['title']) ?>" class="related-project-img">
                                    <?php endif; ?>
                                    <div class="p-3">
                                        <h4><?= esc($related['title']) ?></h4>
                                        <p><?= esc(character_limiter(strip_tags(html_entity_decode($related['description'])), 80)) ?></p>
                                        <a href="<?= base_url('portfolio/' . esc($related['slug'])) ?>" class="text-primary text-decoration-none fw-bold">View Project →</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="col-lg-4">
                    <div class="portfolio-details-info sticky-top" style="top: 100px;" data-aos="fade-left">
                        <h3 class="mb-4">Project Information</h3>
                        <div class="info-item">
                            <span class="info-label">Client:</span>
                            <span><?= !empty($project['client_name']) ? esc($project['client_name']) : 'Confidential' ?></span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Category:</span>
                            <span><?= esc($project['category']) ?></span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Date:</span>
                            <span><?= !empty($project['project_date']) ? date('F j, Y', strtotime($project['project_date'])) : 'Ongoing' ?></span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Status:</span>
                            <span class="badge <?= $project['status'] === 'completed' ? 'bg-success' : 'bg-warning' ?>">
                                <?= ucfirst(esc($project['status'])) ?>
                            </span>
                        </div>
                        <?php if (!empty($project['client_url'])): ?>
                        <div class="info-item">
                            <span class="info-label">Website:</span>
                            <span>
                                <a href="<?= esc($project['client_url']) ?>" target="_blank" rel="noopener noreferrer">
                                    <?= esc(parse_url($project['client_url'], PHP_URL_HOST)) ?>
                                </a>
                            </span>
                        </div>
                        <?php endif; ?>
                        
                        <a href="#contact" class="btn btn-primary w-100 mt-4">Request Similar Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?=$this->endSection()?>