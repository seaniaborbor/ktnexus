<?=$this->extend('public/partials/common/layout')?> 

<?=$this->section('content')?>
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 data-aos="fade-up">About KT-NEXUS TECHNOLOGIES</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</section>

<!-- About Content -->
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <img src="/public_assets/img/home/162947308_server_room_400.jpg" alt="About KT-NEXUS TECHNOLOGIES" class="img-fluid w-100 rounded-3 shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title">Our Story</h2>
                <p>Founded in 2018, <strong>KT-NEXUS TECHNOLOGIES</strong> began with a simple mission: to deliver high-quality IT solutions that help businesses thrive in the digital age. What started as a small team of passionate developers has grown into a full-service technology company serving clients across multiple industries.</p>
                <p>Over the years, we've had the privilege of working with startups, SMEs, and large enterprises, helping them solve complex problems through innovative technology solutions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-6" data-aos="fade-up">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100 text-center">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-bullseye fs-4"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To empower businesses through innovative, reliable, and scalable technology solutions that drive growth, efficiency, and competitive advantage.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100 text-center">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-eye fs-4"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be recognized as a leading technology partner that transforms businesses through cutting-edge solutions and exceptional service.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Our Core Values</h2>
            <p class="section-subtitle mx-auto">The principles that guide everything we do</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 text-center">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-lightbulb fs-3"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p>We constantly explore new technologies and approaches to deliver cutting-edge solutions.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 text-center">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-people fs-3"></i>
                    </div>
                    <h4>Collaboration</h4>
                    <p>We work closely with our clients to understand their needs and deliver tailored solutions.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 text-center">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-award fs-3"></i>
                    </div>
                    <h4>Excellence</h4>
                    <p>We're committed to delivering the highest quality solutions with attention to detail.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?=$this->endSection()?>
