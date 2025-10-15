<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="{{ asset('css/profile_page.css') }}">
</head>
<body>
    <!-- Nav bar -->
    <nav>
        <div class="nav-container">
            <div class="logo">Benediktus Darmawan</div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <main>
        <!-- Short description -->
        <section id="about" class="hero">            
            <img class = "profile-image" src="{{ asset('img/profPic.jpg') }}" >
            <div class="hero-text">
                <h1>Hello, I'm Ben</h1>
                <p>I'm a passionate developer and mentor with expertise in both backend and frontend technologies. I love creating innovative solutions and sharing knowledge with others. My journey in technology has been driven by curiosity and a desire to make a positive impact through code.</p>
            </div>
        </section>

        <!-- Education & Experience -->
        <div class="edu-exp-section">
            <section id="education" class="section-card">
                <h2>🎓 Education</h2>
                <div class="university-info">
                    <img class="university-logo" src="{{ asset('img/logo.png') }}" alt="">
                    <div>
                        <h3>Bachelor of Computer Science</h3>
                        <p>Binus University</p>
                        <p>2023 - 2027</p>
                    </div>
                </div>
            </section>

            <section id="experience" class="section-card">
                <h2><span class="mentor-icon">👨‍🏫</span> Experience</h2>
                <div>
                    <h3>Mentor</h3>
                    <p>2024 - 2025</p>
                    <p>Mentoring students in academics, help in improving specific fields.</p>
                </div>
            </section>
        </div>

        <!-- Skills -->
        <section id="skills" class="skills-section">
            <h2>💻 Skills</h2>
            
            <div class="skills-dropdown">
                <div class="dropdown-header" onclick="toggleDropdown('backend')">
                    <span>Backend & AI</span>
                    <span class="arrow" id="backend-arrow">▼</span>
                </div>
                <div class="dropdown-content" id="backend-content">
                    <div class="skill-item">Python</div>
                    <div class="skill-item">Machine Learning</div>
                </div>
            </div>

            <div class="skills-dropdown">
                <div class="dropdown-header" onclick="toggleDropdown('frontend')">
                    <span>Frontend Development</span>
                    <span class="arrow" id="frontend-arrow">▼</span>
                </div>
                <div class="dropdown-content" id="frontend-content">
                    <div class="skill-item">HTML5</div>
                    <div class="skill-item">CSS3</div>
                    <div class="skill-item">JavaScript</div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-content">
            <h3>Contact Me</h3>
            <div class="contact-info">
                <p>📞 +62 811-227-336</p>
                <p>📧 benediktus.darmawan001@binus.ac.id</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/profile_page.js') }}"></script>
</body>
</html>