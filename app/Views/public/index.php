<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('content')?>


<!-- Hero Section -->
<section class="hero-section">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center hero-content">
                <h1 class="hero-title">Innovative IT Solutions for Your Business</h1>
                <p class="lead">Transforming Ideas into Digital <span class="typed-text"></span></p>
                <div class="text-center mt-5 w-100">
                    <a href="/about_us" class="btn btn-primary">Learn More</a>
                    <a href="/contact" class="btn btn-outline-light">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links Section -->
<section class="quick-links">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="quick-link-card text-center" data-aos="fade-up" data-aos-delay="0">
                    <div class="quick-link-icon mx-auto">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h3>Custom Software</h3>
                    <p>Tailored solutions to streamline business processes and improve efficiency.</p>
                    <a href="/services#software" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="quick-link-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="quick-link-icon mx-auto">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Modern, responsive websites that engage audiences and drive growth.</p>
                    <a href="/services#web" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="quick-link-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="quick-link-icon mx-auto">
                        <i class="bi bi-database"></i>
                    </div>
                    <h3>Database Management</h3>
                    <p>Secure and optimized database systems to manage your critical data.</p>
                    <a href="/services#database" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="video-preview-container" data-aos="fade-right" onclick="openVideoModal('dQw4w9WgXcQ')">
                    <img src="/public_assets/img/home/kansongo.png" alt="About KT-NEXUS" class="img-fluid about-img">
                    <div class="video-play-button">
                        <i class="bi bi-play-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <h2 class="section-title">About KT-NEXUS Technologies</h2>
                <p class="lead">Founded in 2018, KT-NEXUS Technologies delivers innovative IT solutions that help businesses thrive in the digital age. From custom software and web development to secure database systems, we provide scalable solutions built for growth.</p>
                <p>We are committed to being a trusted partner—combining technology, creativity, and collaboration to transform ideas into results that drive efficiency and competitive advantage.</p>
                <h4 class="mt-3">Our Core Values</h4>
                <ul>
                    <li><strong>Innovation:</strong> Driving progress with new ideas and technologies.</li>
                    <li><strong>Collaboration:</strong> Partnering with clients for tailored solutions.</li>
                    <li><strong>Excellence:</strong> Delivering quality with precision and care.</li>
                </ul>
                <a href="/about_us" class="btn btn-primary mt-3">Read More</a>
            </div>
        </div>
    </div>
</section>


<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4 mb-md-0">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="0">
                    <div class="stat-number" data-count="50">0</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-number" data-count="120">0</div>
                    <div class="stat-label">Happy Clients</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-number" data-count="35">0</div>
                    <div class="stat-label">Team Members</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-number" data-count="5">0</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Our Portfolio</h2>
                <p class="section-subtitle">Explore our latest projects and creative works across technology and infrastructure.</p>
            </div>
        </div>

        <div class="portfolio-carousel owl-carousel owl-theme">
            <?php if (!empty($projects)): ?>
                <?php foreach ($projects as $index => $project): ?>
                    <?php 
                        $categoryClass = strtolower(str_replace(' ', '-', $project['category']));
                        $animationDelay = ($index % 3) * 100; // stagger animation
                    ?>
                    <div class="portfolio-item <?= esc($categoryClass) ?>" 
                         data-aos="fade-up" data-aos-delay="<?= $animationDelay ?>">
                        <div class="portfolio-card h-100 card-body py-4 shadow-sm">
                            <?php if (!empty($project['featured_image'])): ?>
                                <img src="<?= base_url('uploads/portfolio/' . esc($project['featured_image'])) ?>" 
                                     alt="<?= esc($project['title']) ?>" class="portfolio-img mb-3">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/600x400" 
                                     alt="<?= esc($project['title']) ?>" class="portfolio-img mb-3">
                            <?php endif; ?>

                            <div class="p-3">
                                <span class="portfolio-category"><?= esc($project['category']) ?></span>
                                <h4 class="mt-2"><?= esc($project['title']) ?></h4>
                                <p><?= esc(character_limiter(strip_tags(html_entity_decode($project['description'])), 100)) ?></p>
                               
                            </div>
                        </div>
                          <a href="<?= base_url('portfolio/' . esc($project['slug'])) ?>"
                                style="z-index:1000"
                                   class="text-primary text-decoration-none fw-bold">View Details →</a>
                    </div>
                   
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <p class="lead">No projects found. Please check back later.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('portfolio') ?>" class="btn btn-primary">View All Projects</a>
        </div>
    </div>
</section>


<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-subtitle">Hear from our satisfied clients and partners about their experience working with KT-NEXUS Technologies.</p>
            </div>
        </div>
        
        <div class="testimonial-carousel owl-carousel owl-theme">
            <!-- Testimonial 1 -->
            <div class="testimonial-card" data-aos="fade-up">
                <p class="testimonial-text">KT-NEXUS Technologies modernized our internal systems, making our operations more efficient and reliable. Their team was professional and delivered exceptional results.</p>
                <div class="testimonial-author">James T. Smith</div>
                <div class="testimonial-role">Director, Government Agency</div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <p class="testimonial-text">Their web development and software solutions perfectly aligned with our business needs. KT-NEXUS helped us achieve seamless digital transformation.</p>
                <div class="testimonial-author">Sarah Johnson</div>
                <div class="testimonial-role">CEO, Startup Company</div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <p class="testimonial-text">KT-NEXUS Technologies provided innovative IT solutions that improved our database management and workflow efficiency. Timely delivery and top-notch quality!</p>
                <div class="testimonial-author">Robert K. Mensah</div>
                <div class="testimonial-role">Operations Manager, SME</div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                <p class="testimonial-text">Working with KT-NEXUS has transformed how we approach technology. Their custom solutions have streamlined our processes and enhanced productivity.</p>
                <div class="testimonial-author">Elizabeth B. Davies</div>
                <div class="testimonial-role">Business Owner</div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section" id="team">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-subtitle mx-auto">Our diverse team of experts brings together talent from technology, business, and infrastructure sectors.</p>
        </div>

        <!-- Owl Carousel for Team -->
        <div class="team-carousel owl-carousel owl-theme">
            <?php if (!empty($team)): ?>
                <?php $delay = 0; ?>
                <?php foreach ($team as $member): ?>
                    <div class="team-card text-center" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <?php if (!empty($member['image'])): ?>
                            <img src="<?= base_url('public_assets/img/team/' . esc($member['image'])) ?>" 
                                 alt="<?= esc($member['name']) ?>" class="team-img" style="min-height:350px !important">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/400x300" 
                                 alt="<?= esc($member['name']) ?>" class="team-img">
                        <?php endif; ?>
                        
                        <div class="p-4">
                            <h4><?= esc($member['name']) ?></h4>
                            <p class="text-primary"><?= esc($member['position']) ?></p>
                            <p><?= esc(character_limiter($member['bio'], 100)) ?></p>
                            <div class="team-social">
                                <?php if (!empty($member['linkedin_url'])): ?>
                                    <a href="<?= esc($member['linkedin_url']) ?>" target="_blank"><i class="bi bi-linkedin"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($member['twitter_url'])): ?>
                                    <a href="<?= esc($member['twitter_url']) ?>" target="_blank"><i class="bi bi-twitter"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($member['github_url'])): ?>
                                    <a href="<?= esc($member['github_url']) ?>" target="_blank"><i class="bi bi-github"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 100; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center">
                    <p>Our team profiles are coming soon.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('team') ?>" class="btn btn-primary">View All Team</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="cta-title">Ready to Start Your Next Project?</h2>
                <p class="cta-subtitle">Contact us today to discuss how KT-NEXUS Technologies can help bring your vision to life with our innovative solutions.</p>
                <div class="cta-buttons">
                    <a href="/contact" class="btn btn-light">Get In Touch</a>
                    <a href="/portfolio" class="btn btn-outline-light">View Our Work</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Contact Us Now</h2>
                    <p class="section-subtitle mx-auto">We’re here to answer your questions and assist you promptly.</p>
                </div>
                <div class="row mt-5 g-4">
                    <div class="col-md-6">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <h3>Email</h3>
                            <p>info@ktnexus.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <h3>Phone</h3>
                            <p>(+231) 776077575</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3>Office</h3>
                            <p>New Georgia Estate, Monrovia, LR</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <form id="contactForm" method="post" action="<?= site_url('send_message') ?>">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required 
                                           value="<?= old('name') ?>">
                                    <?php if (isset($errors['name'])): ?>
                                        <small class="text-danger"><?= $errors['name'] ?></small>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                           value="<?= old('email') ?>">
                                    <?php if (isset($errors['email'])): ?>
                                        <small class="text-danger"><?= $errors['email'] ?></small>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" required
                                       value="<?= old('subject') ?>">
                                <?php if (isset($errors['subject'])): ?>
                                    <small class="text-danger"><?= $errors['subject'] ?></small>
                                <?php endif; ?>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required><?= old('message') ?></textarea>
                                <?php if (isset($errors['message'])): ?>
                                    <small class="text-danger"><?= $errors['message'] ?></small>
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                            
                            <?php if (session()->getFlashdata('success')): ?>
                                <div class="alert alert-success mt-3">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger mt-3">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CountUp Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;

    const countUp = (counter) => {
        const target = +counter.getAttribute('data-count');
        const increment = target / speed;
        let count = 0;

        const updateCount = () => {
            count += increment;
            if (count < target) {
                counter.textContent = Math.ceil(count);
                requestAnimationFrame(updateCount);
            } else {
                counter.textContent = target;
            }
        };
        updateCount();
    };

    const options = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                countUp(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, options);

    counters.forEach(counter => {
        observer.observe(counter);
    });
});
</script>

<?=$this->endSection()?>
