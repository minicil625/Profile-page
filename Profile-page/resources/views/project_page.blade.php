<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link rel="stylesheet" href="{{ asset('css/project_page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>
<body>
    <!-- Nav bar -->
    <nav>
        <div class="nav-container">
            <div class="logo">Benediktus Darmawan</div>

             <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="nav-links">
                <li><a href="/">About me</a></li>
                <li><a href="/project">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="page-header">
            <h1>My Projects</h1>
            <p>A collection of my recent work and personal projects</p>
        </div>

        <div class="projects-grid">
            @foreach ($projects as $project)
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-image">🚀</div>
                    <div class="project-content">
                        <h3>{{ $project['name'] }}</h3>
                        <div class="project-tags">
                            <span class="tag">Python</span>
                            <span class="tag">API</span>
                            <span class="tag">NLP</span>
                        </div>
                        <p>{{ $project['description'] }}</p>
                        <div class="project-links">
                            <a href="{{ $project['url'] }}" class="project-link">GitHub →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-content">
            <h3>Contact Me</h3>
            <div class="contact-info">
                <p>📞 {{ $contact['phone'] }}</p>
                <p>📧 {{ $contact['email'] }}</p>
                <p>{{ $contact['location'] }}</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/global.js') }}"></script>
</body>
</html>