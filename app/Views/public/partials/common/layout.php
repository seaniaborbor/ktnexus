
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RISE Liberia - Innovative Solutions for Excellence</title>
<meta name="description" content="Rigorous Innovative Solutions for Excellence - Empowering Liberia's Youth and Creativity through technology, entertainment, and infrastructure">
<meta name="keywords" content="RISE Liberia, technology, entertainment, infrastructure, Liberia youth empowerment, IT solutions">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-gradient: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            --secondary-color: #10b981;
            --accent-color: #3b82f6;
            --dark-color: #0f172a;
            --light-color: #f8fafc;
            --text-color: #334155;
            --text-light: #64748b;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
            overflow-x: hidden;
            background-color: #f8fafc;
        }
        

        h1, h2, h3, h4, h5, .futuristic {
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        letter-spacing: 0.5px;
        }

        body, p, a, li {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        }

        /* Navbar Styles */
        .navbar {
            padding: 1rem 2rem;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .navbar-brand img {
            height: 40px;
            transition: all 0.3s ease;
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 0.5rem;
            color: var(--text-color);
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: var(--primary-gradient);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .btn-primary {
            background: var(--primary-gradient);
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(37, 99, 235, 0.2);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(37, 99, 235, 0.3);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 8rem 0 6rem;
            position: relative;
            overflow: hidden;
            color: white;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(37, 99, 235, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.15) 0%, transparent 50%);
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero-title {
    font-weight: 800;
    font-size: 3.5rem;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #fff 0%, #cbd5e1 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}
        
        .hero-subtitle {
            font-size: 1.25rem;
            color: #cbd5e1;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .typed-text {
            color: var(--secondary-color);
            font-weight: 600;
        }
        
        .hero-cta-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        /* Particle Animation */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }
        
        /* Quick Links Section */
        .quick-links {
            padding: 5rem 0;
            background: white;
        }
        
        .quick-link-card {
            background: white;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            height: 100%;
            border: 1px solid rgba(226, 232, 240, 0.8);
            position: relative;
            overflow: hidden;
        }
        
        .quick-link-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        
        .quick-link-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .quick-link-card:hover::before {
            transform: scaleX(1);
        }
        
        .quick-link-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            width: 80px;
            height: 80px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* About Section */
        .about-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            position: relative;
            overflow: hidden;
        }
        
        .about-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.1) 0%, transparent 70%);
            z-index: 0;
        }
        
        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark-color);
            position: relative;
        }
        
      .section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%; /* Center horizontally */
    transform: translateX(-50%); /* Offset to truly center the element */
    width: 60px;
    height: 4px;
    background: var(--primary-gradient);
    border-radius: 2px;
}

.section-subtitle {
    color: var(--text-light);
    margin: 0 auto 3rem auto; /* Center horizontally with auto margins */
    max-width: 700px;
    font-size: 1.1rem;
    text-align: center; /* Center text content */
}
        .about-img {
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
        }
        
        .about-img:hover {
            transform: rotate(2deg) scale(1.02);
        }
        
        /* Stats Section */
        .stats-section {
            padding: 5rem 0;
            background: var(--dark-color);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(37, 99, 235, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.15) 0%, transparent 50%);
            z-index: 0;
        }
        
        .stat-item {
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #3b82f6 0%, #10b981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .stat-label {
            color: #cbd5e1;
            font-weight: 500;
        }
        
        /* Portfolio Section */
        .portfolio-section {
            padding: 6rem 0;
            background-color: white;
        }
        
        .portfolio-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
            background: white;
            position: relative;
        }
        
        .portfolio-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        to top,
        rgba(1, 29, 37, 0.78) 0%,       /* Dark Blue */
        rgba(0, 28, 37, 0.7) 35%,       /* Dark Green */
        transparent 90%                /* Fade out */
    );
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
}

        
        .portfolio-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .portfolio-card:hover::before {
            opacity: 1;
        }
        
        .portfolio-img {
            height: 250px;
            object-fit: cover;
            width: 100%;
            transition: all 0.5s ease;
        }
        
        .portfolio-card:hover .portfolio-img {
            transform: scale(1.1);
        }
        
        .portfolio-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 2rem;
            z-index: 2;
            color: white;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }
        
        .portfolio-card:hover .portfolio-content {
            opacity: 1;
            transform: translateY(0);
        }
        
        .portfolio-category {
            color: var(--secondary-color);
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }
        
        /* Testimonial Section */
        .testimonial-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        
        .testimonial-card {
            background: white;
            border-radius: 16px;
            padding: 2.5rem;
            margin: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            position: relative;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 4rem;
            color: rgba(37, 99, 235, 0.1);
            font-family: serif;
            line-height: 1;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: var(--text-color);
            position: relative;
            z-index: 2;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .testimonial-role {
            color: var(--text-light);
            font-size: 0.875rem;
        }
        
        /* Team Section */
        .team-section {
            padding: 6rem 0;
            background-color: white;
        }
        
        .team-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .team-img {
            height: 300px;
            object-fit: cover;
            width: 100%;
            transition: all 0.5s ease;
        }
        
        .team-card:hover .team-img {
            transform: scale(1.1);
        }
        
        .team-content {
            padding: 2rem;
            text-align: center;
        }
        
        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        
        .team-card:hover .team-social {
            opacity: 1;
            transform: translateY(0);
        }
        
        .team-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            transition: all 0.3s ease;
        }
        
        .team-social a:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(37, 99, 235, 0.3);
        }
        
        /* CTA Section */
        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            z-index: 0;
        }
        
        .cta-title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }
        
        .cta-subtitle {
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            z-index: 2;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            position: relative;
            z-index: 2;
        }
        
        .btn-light {
            padding: 0.75rem 2rem;
            font-weight: 600;
            color: var(--primary-color);
            background: white;
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.2);
        }
        
        .btn-light:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(255, 255, 255, 0.3);
        }
        
        .btn-outline-light {
            padding: 0.75rem 2rem;
            font-weight: 600;
            color: white;
            background: transparent;
            border: 2px solid white;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-light:hover {
            background: white;
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        /* Contact Section */
        .contact-section {
            padding: 6rem 0;
            background-color: white;
        }
        
        .contact-card {
            background: #f8fafc;
            border-radius: 16px;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .contact-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Footer */
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 4rem 0 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(37, 99, 235, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.1) 0%, transparent 50%);
            z-index: 0;
        }
        
        .footer-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .footer-links a::before {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -2px;
            left: 0;
            background: var(--secondary-color);
            transition: width 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-links a:hover::before {
            width: 100%;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-links a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }
        
        .social-links a:hover {
            background: var(--primary-gradient);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            margin-top: 3rem;
            color: #94a3b8;
            font-size: 0.875rem;
            position: relative;
            z-index: 2;
        }
        
        /* Page Header */
        .page-header {
            padding: 7rem 0 4rem;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(37, 99, 235, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.15) 0%, transparent 50%);
            z-index: 0;
        }
        
        .page-header h1 {
            position: relative;
            z-index: 2;
            font-size: 3rem;
        }
        
        .breadcrumb {
            justify-content: center;
            background: transparent;
            position: relative;
            z-index: 2;
        }
        
        .breadcrumb-item a {
            color: #cbd5e1;
            text-decoration: none;
        }
        
        .breadcrumb-item.active {
            color: var(--secondary-color);
        }
        
        /* About Page */
        .about-content-section {
            padding: 5rem 0;
            background: white;
        }
        
        .mission-vision-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        
        .values-section {
            padding: 5rem 0;
            background: white;
        }
        
        .icon-box {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            width: 80px;
            height: 80px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .value-card:hover .icon-box {
            transform: rotateY(180deg);
            background: var(--primary-gradient);
            color: white;
        }
        
        /* Portfolio Page */
        .portfolio-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .portfolio-filter button {
            background: transparent;
            border: 2px solid var(--primary-color);
            padding: 0.5rem 1.5rem;
            color: var(--primary-color);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 30px;
        }
        
        .portfolio-filter button.active, 
        .portfolio-filter button:hover {
            background: var(--primary-gradient);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Portfolio Details */
        .portfolio-details-section {
            padding: 5rem 0;
            background: white;
        }
        
        .portfolio-details-img {
            border-radius: 16px;
            margin-bottom: 2rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .portfolio-details-info {
            background: #f8fafc;
            border-radius: 16px;
            padding: 2rem;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        .info-item {
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            padding-bottom: 0.5rem;
        }
        
        .info-label {
            font-weight: 600;
            color: var(--dark-color);
        }
        
        /* Login Page */
        .login-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            padding: 2rem 0;
        }
        
        .login-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        .login-logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .form-control {
            padding: 0.75rem 1rem;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        /* Terms Page */
        .terms-section {
            padding: 5rem 0;
            background: white;
        }
        
        .terms-content {
            background: #f8fafc;
            border-radius: 16px;
            padding: 3rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        /* Team Profile Page */
        .team-profile-section {
            padding: 5rem 0;
            background: white;
        }
        
        .team-profile-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        
        .team-profile-img {
            height: 400px;
            object-fit: cover;
            width: 100%;
        }
        
        .team-profile-content {
            padding: 2.5rem;
        }
        
        .team-profile-details {
            background: #f8fafc;
            border-radius: 16px;
            padding: 2rem;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(37, 99, 235, 0.3);
            transition: all 0.3s ease;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
        }
        
        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(37, 99, 235, 0.4);
        }
        
        /* Animations */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .float-animation {
            animation: float 5s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        .pulse-animation {
            animation: pulse 2s ease-in-out infinite;
        }
        
        /* Video Preview Styles */
        .video-preview-container {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }
        
        .video-preview-container img {
            width: 100%;
            transition: all 0.5s ease;
        }
        
        .video-preview-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }
        
        .video-preview-container:hover::before {
            opacity: 1;
        }
        
        .video-play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            z-index: 2;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .video-preview-container:hover .video-play-button {
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        
        /* Custom Carousel Navigation */
        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            pointer-events: none;
        }
        
        .owl-nav button {
            pointer-events: auto;
            width: 50px;
            height: 50px;
            border-radius: 50% !important;
            background: var(--primary-gradient) !important;
            color: white !important;
            display: flex !important;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        
        .owl-nav button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            background: var(--primary-color) !important;
        }
        
        .owl-dots {
            margin-top: 20px !important;
        }
        
        .owl-dots button.owl-dot span {
            width: 12px;
            height: 12px;
            margin: 5px;
            background: #cbd5e1 !important;
            display: block;
            transition: all 0.3s ease;
            border-radius: 50%;
        }
        
        .owl-dots button.owl-dot.active span {
            background: var(--primary-color) !important;
            transform: scale(1.3);
        }
        
        /* Portfolio Card Hover Effects */
        .portfolio-card-hover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 50%, transparent 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.4s ease;
            color: white;
            border-radius: 16px;
            overflow: hidden;
        }
        
        .portfolio-card:hover .portfolio-card-hover {
            opacity: 1;
            transform: translateY(0);
        }
        
        .portfolio-hover-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .portfolio-hover-category {
            color: var(--secondary-color);
            font-weight: 500;
            margin-bottom: 1rem;
        }
        
        .portfolio-hover-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .portfolio-hover-link:hover {
            color: var(--secondary-color);
            gap: 0.75rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .quick-link-card, .testimonial-card {
                padding: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                padding: 1rem;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-cta-buttons, .cta-buttons {
                flex-direction: column;
                width: 100%;
            }
            
            .hero-cta-buttons .btn, .cta-buttons .btn {
                width: 100%;
                margin-bottom: 1rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-section {
                padding: 6rem 0 4rem;
            }
            
            .section-title {
                font-size: 1.75rem;
            }
            
            .login-card {
                padding: 2rem;
            }
        }

        .portfolio-card-hover {
    z-index: 3; /* Ensure the hover content is above other elements */
    pointer-events: auto; /* Allow interaction with the hover content */
}

.portfolio-hover-link {
    z-index: 4; /* Ensure the link is above the hover overlay */
    pointer-events: auto; /* Ensure the link is clickable */
    position: relative; /* Ensure the link is positioned correctly */
}
    </style>
</head>
<body>
    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Header / Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/public_assets/img/logo/logo.png" alt="RISE Liberia Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about_us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-primary d-block mt-2 mt-lg-0" href="/auth">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <?=$this->renderSection("content")?> 

 <!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h4 class="footer-title">About KT-NEXUS Technologies</h4>
                <p>Delivering innovative IT solutions since 2018. KT-NEXUS Technologies empowers businesses through custom software, web development, and database management to drive growth and efficiency.</p>
                <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="team.php">Our Team</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                <h4 class="footer-title">Services</h4>
                <ul class="footer-links">
                    <li><a href="#">Custom Software</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Database Management</a></li>
                    <li><a href="#">IT Consulting</a></li>
                    <li><a href="#">Maintenance</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4 class="footer-title">Contact Us</h4>
                <ul class="footer-links">
                    <li><i class="bi bi-geo-alt me-2"></i> New Georgia Estate, Monrovia, Liberia</li>
                    <li><i class="bi bi-telephone me-2"></i> +231 7760 77575</li>
                    <li><i class="bi bi-envelope me-2"></i> info@ktnexus.com</li>
                </ul>
            </div>
        </div>
        <div class="text-center copyright">
            <p>&copy; 2023 KT-NEXUS Technologies. All Rights Reserved. | Terms of Service | Privacy Policy</p>
        </div>
    </div>
</footer>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Initialize Particles.js
        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('particles-js')) {
                particlesJS('particles-js', {
                    "particles": {
                        "number": {
                            "value": 80,
                            "density": {
                                "enable": true,
                                "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#3b82f6"
                        },
                        "shape": {
                            "type": "circle",
                            "stroke": {
                                "width": 0,
                                "color": "#000000"
                            }
                        },
                        "opacity": {
                            "value": 0.5,
                            "random": false,
                            "anim": {
                                "enable": false,
                                "speed": 1,
                                "opacity_min": 0.1,
                                "sync": false
                            }
                        },
                        "size": {
                            "value": 3,
                            "random": true,
                            "anim": {
                                "enable": false,
                                "speed": 40,
                                "size_min": 0.1,
                                "sync": false
                            }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#3b82f6",
                            "opacity": 0.4,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 2,
                            "direction": "none",
                            "random": false,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                            "attract": {
                                "enable": false,
                                "rotateX": 600,
                                "rotateY": 1200
                            }
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                            "onhover": {
                                "enable": true,
                                "mode": "grab"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "grab": {
                                "distance": 140,
                                "line_linked": {
                                    "opacity": 1
                                }
                            },
                            "push": {
                                "particles_nb": 4
                            }
                        }
                    },
                    "retina_detect": true
                });
            }
        });
        
        // Back to Top Button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
        
        // Initialize Typed.js
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector('.typed-text')) {
                var typed = new Typed('.typed-text', {
                    strings: ["Success", "Solutions", "Innovation", "Growth", "Reality"],
                    typeSpeed: 100,
                    backSpeed: 60,
                    loop: true
                });
            }
        });
        
        // Initialize Owl Carousels
        $(document).ready(function(){
            // Testimonial Carousel
            $(".testimonial-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
            
            // Portfolio Carousel
            $(".portfolio-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
            
            // Team Carousel
            $(".team-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4500,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        });
        
        // Video Modal Functionality
        function openVideoModal(videoId) {
            // Create modal element
            const modal = document.createElement('div');
            modal.className = 'modal fade';
            modal.id = 'videoModal';
            modal.tabIndex = -1;
            modal.innerHTML = `
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Our Story</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="ratio ratio-16x9">
                                <iframe src="/public_assets/img/home/tmpfp5i7prb.mp4" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            // Add to body and show
            document.body.appendChild(modal);
            const videoModal = new bootstrap.Modal(modal);
            videoModal.show();
            
            // Remove from DOM when hidden
            modal.addEventListener('hidden.bs.modal', function() {
                document.body.removeChild(modal);
            });
        }
    </script>
</body>
</html>