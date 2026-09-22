<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Certification;
use App\Models\Internship;
use App\Models\Achievement;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate existing records
        Experience::truncate();
        Project::truncate();
        Skill::truncate();
        Education::truncate();
        Certification::truncate();
        Internship::truncate();
        Achievement::truncate();

        // 1. Experiences
        Experience::create([
            'company' => 'Questaron',
            'role' => 'Backend Developer Intern',
            'period' => 'Jan 2026 – Jun 2026 (6 Months)',
            'location' => 'Sringeri / Remote',
            'tech_stack' => ['Python', 'Firebase/Firestore', 'Google Cloud Functions', 'REST APIs', 'AI Governance'],
            'responsibilities' => [
                'Built backend systems for a governed AI decision platform focused on safe and auditable workflow execution.',
                'Designed and implemented structured decision records to represent agent actions with confidence scores, risk levels, and lifecycle states.',
                'Developed a centralized constraint evaluation engine to enforce policy checks, risk thresholds, and execution rules before approval.',
                'Implemented strict execution gates ensuring external automation tools cannot perform actions without backend authorization.',
                'Built escalation and clarification workflows for low-confidence or high-risk decisions, improving system safety and human oversight.',
                'Integrated backend logic with Firestore and cloud services for state management, audit trails, and execution tracking.',
                'Created detailed logging and traceability systems to make every action and non-action explainable and auditable.',
                'Worked on workflow orchestration using Python, focusing on system correctness, reliability, and predictable behavior.',
                'Collaborated with cross-functional teams to support AI agent orchestration, governance logic, and safe automation execution.'
            ],
            'order' => 1
        ]);

        // 2. Projects
        Project::create([
            'title' => 'Questaron – AI Decision & Automation Platform',
            'subtitle' => 'Governed AI Workflow Execution Engine',
            'description' => 'A backend-driven AI decision system designed to evaluate and control workflow execution using structured decision records, constraint validation, and risk-based approval mechanisms.',
            'category' => 'AI & ML',
            'metric_badge' => 'Governed AI',
            'tech_stack' => ['Python', 'Firestore', 'GCP Cloud Functions', 'REST APIs', 'Make.com'],
            'highlights' => [
                'Developed a backend-driven AI decision system to evaluate and control workflow execution using structured decision records, constraint validation, and risk-based approval mechanisms.',
                'Integrated Make.com automation workflows with backend execution gates to ensure all actions are authorized, traceable, and follow strict governance rules before execution.',
                'Implemented end-to-end workflow orchestration including escalation, logging, and audit trails, enabling safe, reliable, and explainable AI-driven automation across external systems.'
            ],
            'github_url' => 'https://github.com/in/pavan',
            'is_featured' => true,
            'order' => 1
        ]);

        Project::create([
            'title' => 'Glaucoma Detection using Deep Learning',
            'subtitle' => 'Medical Retinal Image Classifier',
            'description' => 'A CNN-powered medical imaging diagnostic system built using Python, Flask, HTML/CSS, and JavaScript to detect glaucoma from retinal images with clinical accuracy.',
            'category' => 'AI & ML',
            'metric_badge' => '93% Accuracy',
            'tech_stack' => ['Python', 'CNN', 'TensorFlow', 'Keras', 'Flask', 'HTML/CSS/JS'],
            'highlights' => [
                'Built a glaucoma detection system using Python, Flask, HTML/CSS, and JavaScript using CNN and image processing to detect glaucoma from medical retinal images.',
                'Achieved up to 93% accuracy by combining clinical data with image analysis.',
                'Designed for cost-effective, large-scale screening in remote and underserved areas.'
            ],
            'github_url' => 'https://github.com/in/pavan',
            'is_featured' => true,
            'order' => 2
        ]);

        Project::create([
            'title' => 'Laravel Dynamic Portfolio Web Platform',
            'subtitle' => 'High-Performance Glassmorphic Personal Hub',
            'description' => 'Full-stack dynamic portfolio application built with Laravel 11/12, featuring a SQLite database backend, Blade templating engine, dark-mode glassmorphic styling, and interactive AJAX handlers.',
            'category' => 'Web Apps',
            'metric_badge' => 'Laravel 11/12',
            'tech_stack' => ['Laravel', 'PHP 8.3', 'SQLite', 'Blade', 'Vanilla CSS', 'JavaScript'],
            'highlights' => [
                'Engineered backend controllers, Eloquent ORM models, and database seeders to render resume data dynamically.',
                'Designed an obsidian dark glassmorphism user interface inspired by modern web design standards.',
                'Implemented AJAX contact form handling with database persistence and real-time response toast notifications.'
            ],
            'github_url' => 'https://github.com/in/pavan',
            'is_featured' => true,
            'order' => 3
        ]);

        // 3. Skills
        $skills = [
            ['category' => 'Programming & Core', 'name' => 'Python', 'level' => 95, 'icon' => 'fab fa-python', 'order' => 1],
            ['category' => 'Programming & Core', 'name' => 'HTML5 & CSS3', 'level' => 90, 'icon' => 'fab fa-html5', 'order' => 2],
            ['category' => 'Programming & Core', 'name' => 'JavaScript (ES6+)', 'level' => 88, 'icon' => 'fab fa-js-square', 'order' => 3],
            ['category' => 'Web & Frameworks', 'name' => 'Django Framework', 'level' => 85, 'icon' => 'fas fa-cubes', 'order' => 4],
            ['category' => 'Web & Frameworks', 'name' => 'Laravel Framework', 'level' => 85, 'icon' => 'fab fa-laravel', 'order' => 5],
            ['category' => 'Web & Frameworks', 'name' => 'RESTful APIs', 'level' => 90, 'icon' => 'fas fa-network-wired', 'order' => 6],
            ['category' => 'AI & Data Science', 'name' => 'Machine Learning & CNNs', 'level' => 88, 'icon' => 'fas fa-brain', 'order' => 7],
            ['category' => 'AI & Data Science', 'name' => 'TensorFlow & Keras', 'level' => 82, 'icon' => 'fas fa-microchip', 'order' => 8],
            ['category' => 'AI & Data Science', 'name' => 'NumPy, Pandas & Matplotlib', 'level' => 90, 'icon' => 'fas fa-chart-line', 'order' => 9],
            ['category' => 'AI & Data Science', 'name' => 'Power BI & Data Viz', 'level' => 82, 'icon' => 'fas fa-chart-pie', 'order' => 10],
            ['category' => 'Databases & Cloud', 'name' => 'Firebase / Firestore', 'level' => 90, 'icon' => 'fas fa-fire', 'order' => 11],
            ['category' => 'Databases & Cloud', 'name' => 'Google Cloud Functions & GCP', 'level' => 85, 'icon' => 'fab fa-google', 'order' => 12],
            ['category' => 'Databases & Cloud', 'name' => 'Oracle SQL*Plus & SQLite', 'level' => 88, 'icon' => 'fas fa-database', 'order' => 13],
            ['category' => 'Databases & Cloud', 'name' => 'Microsoft Azure', 'level' => 80, 'icon' => 'fab fa-microsoft', 'order' => 14],
            ['category' => 'Developer Tools', 'name' => 'VS Code & Google Colab', 'level' => 95, 'icon' => 'fas fa-code', 'order' => 15],
            ['category' => 'Developer Tools', 'name' => 'Git & GitHub Version Control', 'level' => 92, 'icon' => 'fab fa-github', 'order' => 16],
            ['category' => 'Developer Tools', 'name' => 'SDLC & Agile Development', 'level' => 88, 'icon' => 'fas fa-cogs', 'order' => 17]
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // 4. Education
        Education::create([
            'institution' => 'Adichunchanagiri Institute Of Technology',
            'degree' => 'Bachelor of Engineering in Computer Science and Engineering',
            'period' => '2021 - 2025',
            'score' => 'CGPA: 8.1 / 10',
            'location' => 'Chikkamagaluru, Karnataka',
            'order' => 1
        ]);

        Education::create([
            'institution' => 'BGS PU College Sringeri',
            'degree' => 'Pre-University Course (Science - PCMB)',
            'period' => '2018 - 2020',
            'score' => 'Percentage: 84.66%',
            'location' => 'Sringeri, Karnataka',
            'order' => 2
        ]);

        Education::create([
            'institution' => 'Government High School Thorehadlu',
            'degree' => 'Secondary School Leaving Certificate (SSLC)',
            'period' => '2017 - 2018',
            'score' => 'Percentage: 84.32%',
            'location' => 'Karnataka',
            'order' => 3
        ]);

        // 5. Certifications
        Certification::create([
            'title' => 'Python Full Stack Development Course',
            'issuer' => 'PySpiders, Bengaluru',
            'date' => '2024',
            'description' => 'Comprehensive certification course with intensive hands-on training in Python, SQL, HTML, CSS, JavaScript, and Django Framework.',
            'credential_url' => 'https://drive.google.com/file/d/1KVNGSm3ZCNblmXDciatmQHxbEia4fHwh/view?usp=drivesdk',
            'order' => 1
        ]);

        Certification::create([
            'title' => 'IEEE Paper Presentation Certificate',
            'issuer' => 'IEEE 3rd ICKECS Conference (IEEE Bangalore Section)',
            'date' => 'April 2025',
            'description' => 'Certificate awarded for paper presentation at IEEE 3rd ICKECS Conference held at SJC Institute of Technology, Chikkaballapur.',
            'credential_url' => 'https://drive.google.com/file/d/1KqmXZdFfO46FUlnh_YgmLRg61DSjiaBd/view?usp=drivesdk',
            'order' => 2
        ]);

        // 6. Internships
        Internship::create([
            'company' => 'ROBOWAVES (A UNIT OF TEST YANTRA SOLUTIONS)',
            'role' => 'Web Technology Intern along with Python and SQL',
            'period' => 'May 2025 (15 Weeks)',
            'location' => 'Bangalore',
            'achievements' => [
                'Completed 15-week internship focusing on HTML, CSS, JavaScript, and Frontend Frameworks.',
                'Solves complex algorithmic problems using Python.',
                'Performed database management and optimization using Oracle SQL.'
            ],
            'certificate_url' => 'https://drive.google.com/file/d/1_boSXGgkNi8OXr2ewD863oUfyjxfSDFT/view?usp=drivesdk',
            'order' => 1
        ]);

        Internship::create([
            'company' => 'ZESTECH Global Pvt.Ltd',
            'role' => 'Basic and Advanced Python Intern',
            'period' => 'October 2024 (1 Month)',
            'location' => 'Chikkamagaluru',
            'achievements' => [
                'Worked as a Python Intern at ZESTECH Global Pvt.Ltd for one month.',
                'Gained hands-on experience in basic and advanced Python concepts.'
            ],
            'certificate_url' => 'https://drive.google.com/file/d/1OM8Wn08epXsXlkws7pTbr6nMRkY_jXM8/view?usp=drivesdk',
            'order' => 2
        ]);

        // 7. Achievements
        Achievement::create([
            'title' => 'IEEE Conference Paper Presentation',
            'organization' => 'IEEE 3rd ICKECS Conference',
            'date' => 'April 2025',
            'description' => 'Presented research paper in association with IEEE Bangalore Section at SJC Institute of Technology.',
            'badge' => 'IEEE Author',
            'credential_url' => 'https://drive.google.com/file/d/1l6KST-zYJDyAl88uipH0dFBP5khgvZj-/view?usp=drivesdk',
            'order' => 1
        ]);

        Achievement::create([
            'title' => 'Web Development Project - 2nd Place',
            'organization' => 'Add-On Course Showcase',
            'date' => '2024',
            'description' => 'Completed add-on course in Web Development and secured 2nd place for the associated capstone project.',
            'badge' => '2nd Place',
            'credential_url' => 'https://drive.google.com/file/d/1Bar3schrQCozB5MgRgiXTrvspWbQGgGl/view?usp=drivesdk',
            'order' => 2
        ]);

        Achievement::create([
            'title' => 'Social Connect & Responsibility - 4th Place',
            'organization' => 'Social Connect Food Walk Initiative',
            'date' => '2024',
            'description' => 'Participated in a food walk initiative as part of social connect and responsibility, awarded 4th place.',
            'badge' => 'Social Connect',
            'credential_url' => 'https://drive.google.com/file/d/1NuZTref0snzoJMTy77SdP7Q_6Zj3iExI/view?usp=drivesdk',
            'order' => 3
        ]);

        Achievement::create([
            'title' => 'Intercollege & VTU Level Sports',
            'organization' => 'Visvesvaraya Technological University (VTU)',
            'date' => '2023 - 2025',
            'description' => 'Represented institute in Intercollege and VTU Level Sports tournaments.',
            'badge' => 'VTU Athlete',
            'order' => 4
        ]);
    }
}
