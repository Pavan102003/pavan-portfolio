@extends('layouts.app')

@section('content')

<!-- ==========================================
     HERO SECTION
     ========================================== -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <span style="color: var(--text-muted); font-size: 1.15rem; font-weight: 500;">Hello, I'm</span>
                <h1 class="hero-title" style="margin-top: 0.2rem; margin-bottom: 0.8rem; font-size: 3.8rem;">
                    <span class="gradient-text">Pavan K</span>
                </h1>

                <h3 class="gradient-accent" style="font-size: 1.35rem; font-weight: 600; margin-bottom: 1.25rem; line-height: 1.4;">
                    Passionate about Building Governed AI Systems & Scalable Backend Architectures
                </h3>

                <div style="display: flex; flex-wrap: wrap; gap: 1.25rem; color: var(--text-muted); font-size: 0.92rem; margin-bottom: 2rem;">
                    <span><i class="fas fa-map-marker-alt" style="color: var(--accent-cyan);"></i> Sringeri, Karnataka, India</span>
                    <span><i class="fas fa-phone" style="color: var(--accent-cyan);"></i> +91-9483106380</span>
                    <span><i class="fas fa-envelope" style="color: var(--accent-cyan);"></i> pavanacharya451@gmail.com</span>
                </div>

                <div class="hero-actions" style="margin-bottom: 2rem;">
                    <a href="https://drive.google.com/file/d/1U6GrEi5gF4E6_sdlRZjr-ALRL5KpmorO/view?usp=drivesdk" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                        Download CV <i class="fas fa-external-link-alt" style="font-size: 0.85rem;"></i>
                    </a>
                    <a href="#contact" class="btn btn-glass">
                        Contact Me <i class="fas fa-envelope"></i>
                    </a>
                </div>

                <div class="social-links">
                    <a href="https://github.com/in/pavan" target="_blank" class="social-link" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/pavan" target="_blank" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="mailto:pavanacharya451@gmail.com" class="social-link" title="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <!-- Hero Profile Photo -->
            <div style="display: flex; justify-content: center; align-items: center;">
                <div class="hero-avatar-wrapper">
                    <img src="{{ asset('images/avatar.jpg') }}" alt="Pavan K Profile Photo" class="hero-avatar-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     ABOUT ME SECTION
     ========================================== -->
<section id="about" class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-user"></i> About Me</div>
            <h2 class="section-title">Engineering Safe AI & Robust Backend Systems</h2>
            <p class="section-subtitle">Dedicated to creating reliable software solutions with precision and technical rigor.</p>
        </div>

        <div class="about-grid">
            <div class="about-card glass-card">
                <h3 class="gradient-text" style="font-size: 1.6rem; margin-bottom: 1rem;">Summary</h3>
                <p class="about-text">
                    I am an engineer passionate about Artificial Intelligence and Software Development. Eager to contribute as a resourceful, innovative, and flexible backend engineer while continuously learning and growing in a professional IT environment.
                </p>
                <p class="about-text">
                    My experience spans designing governed backend platforms for AI decision execution, building CNN deep learning diagnosis tools, crafting structured REST APIs, and implementing automated workflows with full auditability and trace logging.
                </p>
            </div>

            <div class="highlights-grid">
                <div class="highlight-box glass-card">
                    <div class="highlight-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="highlight-title">AI Governance & Control</div>
                    <div class="highlight-desc">Constraint engines, risk threshold evaluation, and execution authorization gates.</div>
                </div>

                <div class="highlight-box glass-card">
                    <div class="highlight-icon"><i class="fas fa-brain"></i></div>
                    <div class="highlight-title">Deep Learning & CNNs</div>
                    <div class="highlight-desc">Retinal image analysis and medical diagnostic classifier achieving up to 93% accuracy.</div>
                </div>

                <div class="highlight-box glass-card">
                    <div class="highlight-icon"><i class="fas fa-server"></i></div>
                    <div class="highlight-title">Python & Cloud Backend</div>
                    <div class="highlight-desc">Google Cloud Functions, Firestore state tracking, Django, Flask, and REST APIs.</div>
                </div>

                <div class="highlight-box glass-card">
                    <div class="highlight-icon"><i class="fas fa-code"></i></div>
                    <div class="highlight-title">Full-Stack Web Dev</div>
                    <div class="highlight-desc">HTML/CSS/JS, Laravel 11/12, Oracle SQL*Plus, SQLite, and responsive UI design.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     TECHNICAL SKILLS SECTION
     ========================================== -->
<section id="skills" class="section-padding" style="background: rgba(255,255,255,0.01);">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-laptop-code"></i> Technical Stack</div>
            <h2 class="section-title">Core Skills & Expertise</h2>
            <p class="section-subtitle">Categorized technologies and tools utilized in projects and production engineering.</p>
        </div>

        <div class="skills-grid">
            @foreach($skills as $category => $categorySkills)
            <div class="skill-category-card glass-card">
                <div class="category-header">
                    <div class="category-icon"><i class="fas fa-layer-group"></i></div>
                    <h3 class="category-title">{{ $category }}</h3>
                </div>

                <div class="skill-items">
                    @foreach($categorySkills as $skill)
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name">
                                @if($skill->icon)<i class="{{ $skill->icon }}"></i>@endif
                                {{ $skill->name }}
                            </span>
                            <span class="skill-percentage">{{ $skill->level }}%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: {{ $skill->level }}%;"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     WORK EXPERIENCE & TIMELINE SECTION
     ========================================== -->
<section id="experience" class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-briefcase"></i> Experience</div>
            <h2 class="section-title">Professional Work & Internships</h2>
            <p class="section-subtitle">Real-world production engineering and software development internships.</p>
        </div>

        <div class="timeline">
            <!-- Full-Time Experience -->
            @foreach($experiences as $exp)
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="experience-card glass-card">
                    <div class="exp-header">
                        <div>
                            <h3 class="company-title">{{ $exp->company }}</h3>
                            <div class="role-title">{{ $exp->role }}</div>
                        </div>
                        <span class="exp-period"><i class="far fa-calendar-alt"></i> {{ $exp->period }}</span>
                    </div>

                    @if($exp->tech_stack)
                    <div class="tech-pills">
                        @foreach($exp->tech_stack as $tech)
                        <span class="tech-pill">{{ $tech }}</span>
                        @endforeach
                    </div>
                    @endif

                    <ul class="bullet-list">
                        @foreach($exp->responsibilities as $resp)
                        <li>{{ $resp }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach

            <!-- Internships -->
            @foreach($internships as $intern)
            <div class="timeline-item">
                <div class="timeline-dot" style="border-color: var(--accent-cyan);"></div>
                <div class="experience-card glass-card">
                    <div class="exp-header">
                        <div>
                            <h3 class="company-title">{{ $intern->company }}</h3>
                            <div class="role-title">{{ $intern->role }}</div>
                        </div>
                        <span class="exp-period"><i class="far fa-calendar-alt"></i> {{ $intern->period }}</span>
                    </div>

                    <ul class="bullet-list">
                        @foreach($intern->achievements as $ach)
                        <li>{{ $ach }}</li>
                        @endforeach
                    </ul>

                    @if($intern->certificate_url)
                    <div style="margin-top: 1.25rem;">
                        <a href="{{ $intern->certificate_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-glass" style="padding: 0.35rem 0.85rem; font-size: 0.82rem;">
                            <i class="fas fa-external-link-alt"></i> View Certificate
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     FEATURED PROJECTS SECTION
     ========================================== -->
<section id="projects" class="section-padding" style="background: rgba(255,255,255,0.01);">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-folder-open"></i> Portfolio</div>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">Key engineering projects across AI decision systems, deep learning, and web apps.</p>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="AI & ML">AI & Machine Learning</button>
            <button class="filter-btn" data-filter="Web Apps">Web Apps</button>
        </div>

        <!-- Projects Grid -->
        <div class="projects-grid">
            @foreach($projects as $project)
            <div class="project-card-item" data-category="{{ $project->category }}" style="transition: all 0.3s;">
                <div class="project-card glass-card">
                    <div class="project-card-banner">
                        @if($project->category == 'AI & ML')
                            <i class="fas fa-brain project-banner-icon"></i>
                        @else
                            <i class="fas fa-code project-banner-icon"></i>
                        @endif

                        @if($project->metric_badge)
                        <span class="project-metric-badge">{{ $project->metric_badge }}</span>
                        @endif
                    </div>

                    <div class="project-content">
                        <h3 class="project-title">{{ $project->title }}</h3>
                        <div class="project-subtitle">{{ $project->subtitle }}</div>
                        <p class="project-desc">{{ Str::limit($project->description, 130) }}</p>

                        <div class="tech-pills" style="margin-bottom: 1.25rem;">
                            @foreach($project->tech_stack as $tech)
                            <span class="tech-pill">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <div class="project-footer">
                            <a href="#" class="btn btn-glass open-project-modal" data-project="{{ json_encode($project) }}" style="padding: 0.5rem 1rem; font-size: 0.85rem;">
                                <i class="fas fa-expand-alt"></i> Architecture & Details
                            </a>
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="social-link" style="width: 36px; height: 36px; font-size: 0.95rem;" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     EDUCATION SECTION
     ========================================== -->
<section id="education" class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-graduation-cap"></i> Academic Background</div>
            <h2 class="section-title">Education</h2>
            <p class="section-subtitle">Academic qualifications and computer science engineering degree.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem;">
            @foreach($education as $edu)
            <div class="info-box-card glass-card">
                <div class="info-box-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="info-box-content">
                    <h4 class="info-box-title">{{ $edu->institution }}</h4>
                    <div class="info-box-sub">{{ $edu->degree }}</div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 0.5rem;">
                        <span style="font-size: 0.85rem; color: var(--text-dark);"><i class="far fa-calendar"></i> {{ $edu->period }}</span>
                        <span class="info-box-score">{{ $edu->score }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     CERTIFICATIONS SECTION
     ========================================== -->
<section id="certifications" class="section-padding" style="background: rgba(255,255,255,0.01);">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-certificate"></i> Credentials & Honors</div>
            <h2 class="section-title">Certifications & Achievements</h2>
            <p class="section-subtitle">Professional certifications, IEEE paper presentations, and competition honors.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 1.5rem;">
            @foreach($certifications as $cert)
            <div class="info-box-card glass-card">
                <div class="info-box-icon" style="background: rgba(6, 182, 212, 0.15); border-color: rgba(6, 182, 212, 0.3); color: var(--accent-cyan);"><i class="fas fa-award"></i></div>
                <div class="info-box-content">
                    <h4 class="info-box-title">{{ $cert->title }}</h4>
                    <div class="info-box-sub">{{ $cert->issuer }} ({{ $cert->date }})</div>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-top: 0.4rem;">{{ $cert->description }}</p>
                    @if($cert->credential_url)
                    <div style="margin-top: 0.85rem;">
                        <a href="{{ $cert->credential_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-glass" style="padding: 0.35rem 0.85rem; font-size: 0.82rem;">
                            <i class="fas fa-external-link-alt"></i> View Certificate
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach

            @foreach($achievements as $ach)
            <div class="info-box-card glass-card">
                <div class="info-box-icon" style="background: rgba(168, 85, 247, 0.15); border-color: rgba(168, 85, 247, 0.3); color: var(--accent-purple);"><i class="fas fa-trophy"></i></div>
                <div class="info-box-content">
                    <h4 class="info-box-title">{{ $ach->title }}</h4>
                    <div class="info-box-sub">{{ $ach->organization }} @if($ach->date)({{ $ach->date }})@endif</div>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-top: 0.4rem;">{{ $ach->description }}</p>
                    @if($ach->credential_url)
                    <div style="margin-top: 0.85rem;">
                        <a href="{{ $ach->credential_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-glass" style="padding: 0.35rem 0.85rem; font-size: 0.82rem;">
                            <i class="fas fa-external-link-alt"></i> View Certificate
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     CONTACT ME SECTION
     ========================================== -->
<section id="contact" class="section-padding" style="background: rgba(255,255,255,0.01);">
    <div class="container">
        <div class="section-header">
            <div class="section-badge"><i class="fas fa-envelope"></i> Contact</div>
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Feel free to reach out for backend engineering, AI projects, or collaboration opportunities.</p>
        </div>

        <div class="contact-grid">
            <!-- Contact Details Card -->
            <div class="contact-info-card glass-card">
                <h3 class="gradient-text" style="font-size: 1.6rem; margin-bottom: 1.5rem;">Let's Connect</h3>
                <p class="about-text" style="margin-bottom: 2rem;">
                    I am actively seeking backend engineering and AI software development roles. Drop me a message or contact me directly via email or phone!
                </p>

                <div class="contact-detail-item">
                    <div class="contact-icon-wrapper"><i class="fas fa-envelope"></i></div>
                    <div>
                        <div class="contact-detail-label">Email</div>
                        <a href="mailto:pavanacharya451@gmail.com" class="contact-detail-value">pavanacharya451@gmail.com</a>
                    </div>
                </div>

                <div class="contact-detail-item">
                    <div class="contact-icon-wrapper"><i class="fas fa-phone"></i></div>
                    <div>
                        <div class="contact-detail-label">Phone</div>
                        <a href="tel:+919483106380" class="contact-detail-value">+91-9483106380</a>
                    </div>
                </div>

                <div class="contact-detail-item">
                    <div class="contact-icon-wrapper"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <div class="contact-detail-label">Location</div>
                        <div class="contact-detail-value">Sringeri, Karnataka, India</div>
                    </div>
                </div>

                <div class="social-links" style="margin-top: 2rem;">
                    <a href="https://linkedin.com/in/pavan" target="_blank" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/in/pavan" target="_blank" class="social-link" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="mailto:pavanacharya451@gmail.com" class="social-link" title="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <!-- AJAX Contact Form -->
            <div class="contact-form-card glass-card">
                <h3 class="gradient-accent" style="font-size: 1.6rem; margin-bottom: 1.5rem;">Send a Message</h3>

                <div id="toastAlert" class="toast-alert"></div>

                <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="e.g. John Doe" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Your Email</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="e.g. john@example.com" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-input" placeholder="e.g. Backend Developer Opportunity" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="message">Message</label>
                        <textarea id="message" name="message" class="form-textarea" placeholder="Write your message here..." required></textarea>
                    </div>

                    <button type="submit" id="submitBtn" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
