<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('content')?>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 data-aos="fade-up">Our Portfolio</h1>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Portfolio Filter -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="portfolio-filter">
                <button class="active" data-filter="*">All Projects</button>
                <?php foreach ($categories as $category): ?>
                    <button data-filter=".<?= esc(strtolower(str_replace(' ', '-', $category['category']))) ?>">
                        <?= esc($category['category']) ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <?php if (!empty($projects)): ?>
                    <?php foreach ($projects as $index => $project): ?>
                        <?php 
                        $categoryClass = strtolower(str_replace(' ', '-', $project['category']));
                        $animationDelay = ($index % 3) * 100; // Stagger animation delays in rows
                        ?>
                        <div class="col-md-6 col-lg-4 portfolio-item <?= esc($categoryClass) ?>" 
                             data-aos="fade-up" data-aos-delay="<?= $animationDelay ?>">
                            <div class="portfolio-card h-100">
                                <?php if (!empty($project['featured_image'])): ?>
                                    <img src="<?= base_url('uploads/portfolio/' . esc($project['featured_image'])) ?>" 
                                         alt="<?= esc($project['title']) ?>" class="portfolio-img">
                                <?php else: ?>
                                    <img src="https://via.placeholder.com/600x400" 
                                         alt="<?= esc($project['title']) ?>" class="portfolio-img">
                                <?php endif; ?>
                                <div class="p-4">
                                    <span class="portfolio-category"><?= esc($project['category']) ?></span>
                                    <h3><?= esc($project['title']) ?></h3>
                                    <p><?= esc(character_limiter(strip_tags(html_entity_decode($project['description'])), 100)) ?></p>
                                    <a href="<?= base_url('portfolio/' . esc($project['slug'])) ?>" 
                                       class="text-primary text-decoration-none fw-bold">View Details →</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center py-5">
                        <p class="lead">No projects found. Please check back later.</p>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- Pagination -->
            <?php if ($pager): ?>
                <nav aria-label="Page navigation" class="mt-5">
                    <?= $pager->links() ?>
                </nav>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div data-aos="fade-up">
                <h2 class="cta-title">Have a Project in Mind?</h2>
                <p class="cta-subtitle">Let's discuss how we can help you achieve your goals with our innovative IT solutions.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="<?= base_url('contact') ?>" class="btn btn-light btn-lg">Get in Touch</a>
                    <a href="tel:+1234567890" class="btn btn-outline-light btn-lg">Call Us</a>
                </div>
            </div>
        </div>
    </section>
<?=$this->endSection()?>