<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Portfolio | Creative Professional</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#111318] antialiased">
    <!-- Main Split Layout Container -->
    <div class="flex flex-col lg:flex-row min-h-screen w-full">
        <!-- Left Side: Fixed Profile Panel -->
        <aside
            class="lg:fixed lg:w-[400px] lg:h-screen w-full bg-white dark:bg-background-dark border-r border-[#dbdfe6] dark:border-white/10 z-20">
            <div class="flex flex-col h-full p-8 lg:p-12 justify-between">
                <!-- Profile Header -->
                <div class="flex flex-col gap-8">
                    <div class="relative w-32 h-32 lg:w-40 lg:h-40">
                        <div class="w-full h-full rounded-2xl bg-center bg-cover shadow-xl border-4 border-white dark:border-gray-800"
                            data-alt="Professional headshot of a creative man wearing a blazer"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCNQQPQZO3hWreA1uCHL68yTu0QyDU1CU3e0svr44h9OMCI6PjNNnq_ekYRTypFsFWtcn23_oMOSAmP5pJW7aS0qV1tJcSZIZXh2_CXwGGSMkiLUB9FgMOUki_R7JN60xn4HBbTX0Y4EXagb5MrTwf6g7oRg4f6PVLvQOkQMq519rXwyKdhn-BeSGfdrGPb4FbnLsDO8o3eeQMOW8sYGGRKPubuCLHVmxCNeSXaq-05ij8U5oyTmXzuL4z0MlpiM05I9vkUpbAuu0FJ')">
                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-primary text-white p-2 rounded-lg shadow-lg">
                            <i class="fas fa-certificate text-sm"></i>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1 class="text-3xl font-bold tracking-tight text-[#111318] dark:text-white">Muhammad Irvan</h1>
                        <p class="text-lg text-primary font-medium">Mahasiswa Informatika</p>
                        <p class="text-[#616f89] dark:text-gray-400 mt-2 leading-relaxed">
                            1% a day is way more better. in 1 year accordionly you will be 37 times better.
                        </p>
                    </div>
                    <!-- Social & Quick Links -->
                    <div class="flex flex-col gap-3">
                        <div class="flex gap-2">
                            <a class="p-4  flex align-items-center justify-center rounded-lg bg-background-light dark:bg-white/5 hover:bg-primary hover:text-white transition-all text-[#111318] dark:text-white"
                                href="https://www.instagram.com/i.m_1rvnn/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a class="p-4 flex align-items-center justify-center rounded-lg bg-background-light dark:bg-white/5 hover:bg-primary hover:text-white transition-all text-[#111318] dark:text-white"
                                href="https://github.com/xrtvann" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a class="p-4 flex align-items-center justify-center rounded-lg bg-background-light dark:bg-white/5 hover:bg-primary hover:text-white transition-all text-[#111318] dark:text-white"
                                href="https://www.linkedin.com/in/muhammad-irvan-825543262/" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Footer / CTA -->
                <div class="mt-12 flex flex-col gap-4">
                    <button
                        class="w-full bg-primary text-white py-4 rounded-xl font-bold tracking-wide hover:shadow-lg hover:shadow-primary/20 transition-all active:scale-95 flex items-center justify-center gap-2">
                        <i class="fas fa-download"></i>
                        Download CV
                    </button>
                </div>
            </div>
        </aside>
        <!-- Right Side: Scrollable Content Area -->
        <main class="lg:ml-[400px] flex-1 bg-white dark:bg-background-dark">
            <!-- Sticky Navigation Tabs -->
            <nav
                class="sticky top-0 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-[#dbdfe6] dark:border-white/10 z-10 px-6 lg:px-12">
                <div class="flex gap-8 overflow-x-auto no-scrollbar">
                    <button
                        class="tab-button flex items-center py-6 border-b-2 border-primary text-primary font-bold text-sm tracking-wide transition-all whitespace-nowrap active"
                        data-tab="about">
                        ABOUT
                    </button>
                    <button
                        class="tab-button flex items-center py-6 border-b-2 border-transparent text-[#616f89] dark:text-gray-400 hover:text-[#111318] dark:hover:text-white font-bold text-sm tracking-wide transition-all whitespace-nowrap"
                        data-tab="projects">
                        PROJECTS
                    </button>
                </div>
            </nav>
            <!-- Main Content Container -->
            <div class="p-6 lg:p-12 max-w-5xl">
                <!-- Section: About -->
                <section class="tab-content active pb-12" id="about">
                    <h2 class="text-4xl font-bold mb-8 dark:text-white">About Me</h2>
                    <div class="space-y-4">
                        <p class="text-[#111318] dark:text-gray-300 text-lg leading-relaxed">
                            I am Muhammad Irvan, a passionate Informatics Engineering student dedicated to building
                            innovative digital solutions. I thrive on exploring new technologies and tackling complex
                            challenges. Outside of the coding world, I enjoy the discipline of learning new things, such
                            as mastering the guitar, which keeps my creativity and curiosity alive.
                        </p>
                        <p class="text-[#616f89] dark:text-gray-400 leading-relaxed">
                            Love to meet fellow tech enthusiasts and creators, so feel free to reach out—let’s be
                            friends and build something great!
                        </p>
                    </div>
                    <!-- Experience Section -->
                    <div class="mt-12">
                        <h3 class="text-2xl font-bold mb-6 dark:text-white">Experience</h3>
                        <div class="space-y-4">
                            <!-- Experience Item 1 -->
                            <div class="border border-[#dbdfe6] dark:border-white/10 rounded-xl overflow-hidden">
                                <button
                                    class="experience-toggle w-full flex items-center justify-between p-6 bg-background-light dark:bg-white/5 hover:bg-primary/5 transition-colors text-left"
                                    data-target="exp1">
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-[#111318] dark:text-white">Gatherloop Member
                                        </h4>
                                        <p class="text-sm text-[#616f89]  dark:text-gray-400 mt-1">IT Community
                                            Probolinggo •
                                            Jan 2023 - Present</p>
                                    </div>
                                    <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                                </button>
                                <div class="experience-content  bg-background-light dark:bg-white/5 hover:bg-primary/5 transition-colors hidden"
                                    id="exp1">
                                    <div class="p-6 pt-0 space-y-3">
                                        <p class="text-[#616f89] dark:text-gray-400">
                                            Contributed to various Events, focusing on Upgrading soft skill and hard
                                            skill.
                                        </p>
                                        <ul class="list-disc list-inside space-y-2 text-[#616f89] dark:text-gray-400">
                                            <li>Participate Event on Gatherloop</li>
                                            <li>Collaborating Project With Other Member</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Experience Item 2 -->
                            <div class="border border-[#dbdfe6] dark:border-white/10 rounded-xl overflow-hidden">
                                <button
                                    class="experience-toggle w-full flex items-center justify-between p-6 bg-background-light dark:bg-white/5 hover:bg-primary/5 transition-colors text-left"
                                    data-target="exp2">
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-[#111318] dark:text-white">Internship at
                                            Onlenkan</h4>
                                        <p class="text-sm text-[#616f89] dark:text-gray-400 mt-1">Software House
                                            Probolinggo • Jan 2023 - May 2023</p>
                                    </div>
                                    <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                                </button>
                                <div class="experience-content  bg-background-light dark:bg-white/5 hover:bg-primary/5 transition-colors hidden"
                                    id="exp2">
                                    <div class="p-6 pt-0 space-y-3">
                                        <p class="text-[#616f89] dark:text-gray-400">
                                            Collaborating in backend projects, gaining hands-on experience with
                                            server-side technologies and database management.
                                        </p>
                                        <ul class="list-disc list-inside space-y-2 text-[#616f89] dark:text-gray-400">
                                            <li>Tech Stack Using Golang</li>
                                            <li>Build REST FULL API for bookshelf management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Tech Stack Section -->
                    <div class="mt-12">
                        <h3 class="text-2xl font-bold mb-6 dark:text-white">Tech Stack</h3>

                        <!-- Frontend Technologies -->
                        <div class="mb-8">
                            <h4 class="text-lg font-semibold mb-4 text-primary">Frontend</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-html5 text-4xl text-orange-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">HTML5</span>
                                </div>
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-css3-alt text-4xl text-blue-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">CSS3</span>
                                </div>
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-js text-4xl text-yellow-500 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">JavaScript</span>
                                </div>
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-react text-4xl text-cyan-500 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">React</span>
                                </div>

                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-bootstrap text-4xl text-purple-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">Bootstrap</span>
                                </div>

                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fas fa-wind text-4xl text-sky-500 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">Tailwind</span>
                                </div>
                            </div>
                        </div>

                        <!-- Backend Technologies -->
                        <div class="mb-8">
                            <h4 class="text-lg font-semibold mb-4 text-primary">Backend</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-node-js text-4xl text-green-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">Node.js</span>
                                </div>
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-php text-4xl text-indigo-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">PHP</span>
                                </div>
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-laravel text-4xl text-red-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">Laravel</span>
                                </div>

                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-golang text-4xl text-cyan-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">Golang</span>
                                </div>
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fas fa-database text-4xl text-gray-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">MySQL</span>
                                </div>
                            </div>
                        </div>

                        <!-- Tools & Others -->
                        <div>
                            <h4 class="text-lg font-semibold mb-4 text-primary">Tools & Others</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-git-alt text-4xl text-orange-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">Git</span>
                                </div>
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-github text-4xl text-gray-800 dark:text-white mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">GitHub</span>
                                </div>

                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-figma text-4xl text-purple-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">Figma</span>
                                </div>
                                <div
                                    class="flex flex-col items-center p-4 bg-background-light dark:bg-white/5 rounded-xl hover:shadow-lg transition-all group">
                                    <i
                                        class="fab fa-npm text-4xl text-red-600 mb-2 group-hover:scale-110 transition-transform"></i>
                                    <span class="text-sm font-medium text-[#111318] dark:text-white">NPM</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Projects -->
                <section class="tab-content pb-12" id="projects">
                    <div class="flex justify-between items-end mb-12">
                        <h2 class="text-4xl font-bold dark:text-white">Selected Projects</h2>
                        <a class="text-primary font-bold text-sm hover:underline" href="#">View All</a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Project Card 1 -->
                        <div
                            class="group bg-white dark:bg-white/5 rounded-2xl overflow-hidden border border-[#dbdfe6] dark:border-white/10 hover:shadow-2xl hover:shadow-primary/10 transition-all duration-300">
                            <div class="aspect-[4/3] overflow-hidden bg-gray-100 dark:bg-gray-800 relative">
                                <img alt="Dashboard interface"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Screenshot of a modern data visualization dashboard"
                                    src="images/himapro.png" />
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="px-3 py-1 bg-primary/90 text-white text-xs font-bold uppercase tracking-wider rounded-full backdrop-blur-sm">Web
                                        App</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-3">
                                    <h3
                                        class="text-xl font-bold group-hover:text-primary transition-colors dark:text-white flex-1">
                                        Himapro Landing Page</h3>
                                    <span class="text-xs font-bold text-[#616f89] dark:text-gray-400">2026</span>
                                </div>
                                <p class="text-[#616f89] dark:text-gray-400 text-sm leading-relaxed mb-4">
                                    A comprehensive landing page for Himapro organization, showcasing events,
                                    activities, and member highlights with a modern and responsive design.
                                </p>
                                <div class="flex gap-3">
                                    <a href="https://himapro-landing-page.vercel.app/" target="_blank"
                                        class="flex-1 flex items-center justify-center gap-2 px-4 py-2.5 bg-primary text-white rounded-lg hover:bg-primary/90 transition-all font-semibold text-sm">
                                        <i class="fas fa-globe"></i>
                                        <span>Website</span>
                                    </a>
                                    <a href="https://github.com/xrtvann/himapro-landing-page" target="_blank"
                                        class="flex-1 flex items-center justify-center gap-2 px-4 py-2.5 bg-gray-800 dark:bg-white/10 text-white rounded-lg hover:bg-gray-700 dark:hover:bg-white/20 transition-all font-semibold text-sm">
                                        <i class="fab fa-github"></i>
                                        <span>GitHub</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
                <!-- Section: Contact -->


                <!-- Small Footer -->
                <footer
                    class="py-12 px-6 lg:px-12 border-t border-[#dbdfe6] dark:border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#616f89] dark:text-gray-400">
                    <p>© 2026 Muhammad Irvan. All rights reserved.</p>
                </footer>
            </div>
        </main>
    </div>

    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');

                    // Remove active class from all buttons
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active', 'border-primary', 'text-primary');
                        btn.classList.add('border-transparent', 'text-[#616f89]');
                        btn.classList.add('dark:text-gray-400');
                    });

                    // Add active class to clicked button
                    this.classList.add('active', 'border-primary', 'text-primary');
                    this.classList.remove('border-transparent', 'text-[#616f89]');
                    this.classList.remove('dark:text-gray-400');

                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                    });

                    // Show target tab content
                    const targetContent = document.getElementById(targetTab);
                    if (targetContent) {
                        targetContent.classList.add('active');
                    }
                });
            });

            // Experience expand/collapse functionality
            const experienceToggles = document.querySelectorAll('.experience-toggle');

            experienceToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const content = document.getElementById(targetId);
                    const icon = this.querySelector('i');

                    // Toggle content visibility
                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        content.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    }
                });
            });
        });
    </script>
</body>

</html>
