/**
 * PAVAN K - LARAVEL PORTFOLIO INTERACTIVITY SCRIPT
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Navbar Scroll Blur Listener
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 2. Active Link Scroll Detection
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        const scrollY = window.pageYOffset;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 120;
            const sectionId = current.getAttribute('id');

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });

    // 3. Project Filter Tabs
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');

                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // 4. Project Modal Handler
    const modalOverlay = document.getElementById('projectModal');
    const modalCloseBtn = document.getElementById('modalClose');
    const modalTitle = document.getElementById('modalTitle');
    const modalCategory = document.getElementById('modalCategory');
    const modalDescription = document.getElementById('modalDescription');
    const modalHighlights = document.getElementById('modalHighlights');
    const modalTechStack = document.getElementById('modalTechStack');

    document.querySelectorAll('.open-project-modal').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const projectDataRaw = btn.getAttribute('data-project');
            if (!projectDataRaw) return;

            const project = JSON.parse(projectDataRaw);

            modalTitle.textContent = project.title;
            modalCategory.textContent = project.subtitle || project.category;
            modalDescription.textContent = project.description;

            // Render Highlights
            modalHighlights.innerHTML = '';
            if (project.highlights && project.highlights.length) {
                project.highlights.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    modalHighlights.appendChild(li);
                });
            }

            // Render Tech Stack
            modalTechStack.innerHTML = '';
            if (project.tech_stack && project.tech_stack.length) {
                project.tech_stack.forEach(tech => {
                    const span = document.createElement('span');
                    span.className = 'tech-pill';
                    span.textContent = tech;
                    modalTechStack.appendChild(span);
                });
            }

            modalOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    if (modalCloseBtn) {
        modalCloseBtn.addEventListener('click', () => {
            modalOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    }

    if (modalOverlay) {
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                modalOverlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    }

    // 5. Contact Form AJAX Submission
    const contactForm = document.getElementById('contactForm');
    const toastAlert = document.getElementById('toastAlert');
    const submitBtn = document.getElementById('submitBtn');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);
            const actionUrl = contactForm.getAttribute('action');

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

            try {
                const response = await fetch(actionUrl, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': formData.get('_token')
                    },
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    toastAlert.className = 'toast-alert success';
                    toastAlert.innerHTML = `<i class="fas fa-check-circle"></i> <span>${result.message}</span>`;
                    toastAlert.style.display = 'flex';

                    contactForm.reset();
                } else {
                    alert('Could not submit form. Please check your inputs.');
                }
            } catch (err) {
                console.error(err);
                alert('An error occurred. Please try again later.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
            }
        });
    }
});
