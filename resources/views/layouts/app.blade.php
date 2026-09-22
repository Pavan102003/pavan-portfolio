<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Pavan K | AI & Backend Engineer Portfolio</title>
    <meta name="description" content="Portfolio of Pavan K - Backend Engineer & AI Systems Developer specializing in governed AI decision platforms, Python, Flask, Django, Laravel, CNN deep learning, and cloud backend architecture.">
    <meta name="author" content="Pavan K">
    <meta name="keywords" content="Pavan K, Backend Engineer, AI Developer, Python, Laravel, Django, Flask, Deep Learning, CNN, Questaron, Sringeri, Karnataka">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Pavan K | AI & Backend Engineer Portfolio">
    <meta property="og:description" content="Backend Engineer & AI Systems Developer specializing in governed AI platforms, deep learning, and cloud microservices.">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90' fill='%236366f1'>PK</text></svg>">

    <!-- FontAwesome 6 Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom Glassmorphic Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    <!-- STICKY GLASS NAVBAR -->
    <nav class="navbar glass-panel">
        <a href="#home" class="nav-brand">
            <div class="brand-badge">PK</div>
            <span>Pavan <span class="gradient-accent">K</span></span>
        </a>

        <ul class="nav-links">
            <li><a href="#home" class="nav-link active">Home</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#skills" class="nav-link">Skills</a></li>
            <li><a href="#education" class="nav-link">Education</a></li>
            <li><a href="#experience" class="nav-link">Experience</a></li>
            <li><a href="#projects" class="nav-link">Projects</a></li>
            <li><a href="#certifications" class="nav-link">Certifications</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>

        <div class="nav-actions">
            <a href="https://drive.google.com/file/d/1U6GrEi5gF4E6_sdlRZjr-ALRL5KpmorO/view?usp=drivesdk" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                <i class="fas fa-download"></i> Download CV
            </a>
            <button class="mobile-toggle" aria-label="Toggle Menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-content">
            <div class="nav-brand">
                <div class="brand-badge">PK</div>
                <span>Pavan K</span>
            </div>
            <p>&copy; {{ date('Y') }} Pavan K. Built with Laravel & Glassmorphic UI.</p>
            <div class="social-links">
                <a href="https://github.com/in/pavan" target="_blank" class="social-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/in/pavan" target="_blank" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="mailto:pavanacharya451@gmail.com" class="social-link" title="Email"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <!-- PROJECT DETAIL MODAL OVERLAY -->
    <div class="modal-overlay" id="projectModal">
        <div class="modal-container glass-card">
            <button class="modal-close" id="modalClose">&times;</button>
            <div class="section-badge" id="modalCategory">Project Details</div>
            <h2 class="section-title gradient-text" id="modalTitle">Project Title</h2>
            <p class="about-text" id="modalDescription" style="margin-top: 1rem;"></p>
            
            <h4 style="color: var(--text-bright); margin-top: 1.5rem; margin-bottom: 0.75rem;">Key Architecture & Highlights</h4>
            <ul class="bullet-list" id="modalHighlights"></ul>

            <h4 style="color: var(--text-bright); margin-top: 1.5rem; margin-bottom: 0.75rem;">Technologies & Tools</h4>
            <div class="tech-pills" id="modalTechStack"></div>
        </div>
    </div>

    <!-- JavaScript Interactivity -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
