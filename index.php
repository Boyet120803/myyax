    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Boyet Dedal Portfolio</title>
        <script src="https://cdn.tailwindcss.com/3.4.16"></script>
        <script>
        tailwind.config = {
            theme: {
            extend: {
                colors: {
                primary: "#57B5E7",
                secondary: "#8DD3C7",
                },
                borderRadius: {
                none: "0px",
                sm: "4px",
                DEFAULT: "8px",
                md: "12px",
                lg: "16px",
                xl: "20px",
                "2xl": "24px",
                "3xl": "32px",
                full: "9999px",
                button: "8px",
                },
            },
            },
        };
        </script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
        />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
        />
        <style>
            :where([class^="ri-"])::before { content: "\f3c2"; }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Exo 2', sans-serif;
                background: #0a0a0a;
                color: #ffffff;
                overflow-x: hidden;
            }

            .glass-morphism {
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .neon-glow {
                box-shadow: 0 0 20px rgba(87, 181, 231, 0.3), 0 0 40px rgba(87, 181, 231, 0.1);
            }

            .hero-bg {
                background: radial-gradient(circle at 30% 40%, rgba(87, 181, 231, 0.15) 0%, transparent 50%),
                            radial-gradient(circle at 80% 20%, rgba(139, 69, 193, 0.15) 0%, transparent 50%),
                            radial-gradient(circle at 40% 80%, rgba(20, 184, 166, 0.1) 0%, transparent 50%),
                            linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
            }

            .particle {
                position: absolute;
                width: 2px;
                height: 2px;
                background: #57B5E7;
                border-radius: 50%;
                animation: float 6s ease-in-out infinite;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.4; }
                50% { transform: translateY(-20px) rotate(180deg); opacity: 1; }
            }

            .circuit-line {
                position: absolute;
                height: 1px;
                background: linear-gradient(90deg, transparent, #57B5E7, transparent);
                animation: pulse-line 3s ease-in-out infinite;
            }

            @keyframes pulse-line {
                0%, 100% { opacity: 0.3; transform: scaleX(1); }
                50% { opacity: 1; transform: scaleX(1.1); }
            }

            .holographic-card {
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
                backdrop-filter: blur(15px);
                border: 1px solid rgba(87, 181, 231, 0.2);
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .holographic-card:hover {
                transform: translateY(-10px) rotateX(5deg);
                box-shadow: 0 20px 40px rgba(87, 181, 231, 0.2);
                border-color: rgba(87, 181, 231, 0.5);
            }

            .magnetic-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .magnetic-hover:hover {
                transform: scale(1.05) translateZ(0);
            }

            .text-gradient {
                background: linear-gradient(135deg, #57B5E7, #8B45C1, #14B8A6);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .loading-bar {
                height: 2px;
                background: linear-gradient(90deg, transparent, #57B5E7, transparent);
                animation: loading-sweep 2s ease-in-out infinite;
            }

            @keyframes loading-sweep {
                0% { transform: translateX(-100%); }
                100% { transform: translateX(100%); }
            }

            .glitch-text {
                position: relative;
                animation: glitch 2s ease-in-out infinite;
            }

            @keyframes glitch {
                0%, 90%, 100% { transform: translate(0); }
                20% { transform: translate(-2px, 2px); }
                40% { transform: translate(-2px, -2px); }
                60% { transform: translate(2px, 2px); }
                80% { transform: translate(2px, -2px); }
            }

            .smooth-scroll {
                scroll-behavior: smooth;
            }

            .fade-in-up {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .fade-in-up.visible {
                opacity: 1;
                transform: translateY(0);
            }

            .nav-item {
                position: relative;
                overflow: hidden;
            }

            .nav-item::before {
                content: '';
                position: absolute;
                bottom: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, #57B5E7, #8B45C1);
                transition: left 0.3s ease;
            }

            .nav-item:hover::before {
                left: 0;
            }

            .timeline-line {
                background: linear-gradient(180deg, transparent, #57B5E7, transparent);
                animation: timeline-glow 4s ease-in-out infinite;
            }

            @keyframes timeline-glow {
                0%, 100% { opacity: 0.5; }
                50% { opacity: 1; }
            }
        
            .project-card {
                perspective: 1000px;
            }

              .project-inner {
              transform-style: preserve-3d;
              transition: transform 0.7s;
              position: relative;
            }

            .project-card:hover .project-inner {
                transform: rotateY(180deg);
            }
            .project-front,
            .project-back {
              backface-visibility: hidden;
              position: absolute;
              width: 100%;
              height: 100%;
              top: 0;
              left: 0;
            }

            .project-back {
                transform: rotateY(180deg);
                position: absolute;
                pointer-events: auto;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .cursor-trail {
                position: fixed;
                width: 4px;
                height: 4px;
                background: #57B5E7;
                border-radius: 50%;
                pointer-events: none;
                z-index: 9999;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            @media (max-width: 768px) {
                .particle { display: none; }
                .circuit-line { display: none; }
            }
        </style>
      <!-- Add these animations in your CSS -->
        <style>
            @keyframes fade-in {
                  from {opacity: 0; transform: translateY(20px);}
                  to {opacity: 1; transform: translateY(0);}
                }
                .animate-fade-in {
                  animation: fade-in 1s ease forwards;
                }

                @keyframes slide-up {
                  from {opacity: 0; transform: translateY(40px);}
                  to {opacity: 1; transform: translateY(0);}
                }
                .animate-slide-up {
                  animation: slide-up 1s ease forwards;
                }

                @keyframes pulse-slow {
                  0%, 100% { transform: scale(1); opacity: 0.3; }
                  50% { transform: scale(1.1); opacity: 0.5; }
                }
                .animate-pulse-slow {
                  animation: pulse-slow 6s ease-in-out infinite;
                }
                @keyframes bounce {
                  0%, 100% { transform: translateY(0); }
                  50% { transform: translateY(-10px); }
                }
                .animate-bounce {
                  animation: bounce 2s infinite;
                }

                .rotate-y-180 { transform: rotateY(180deg); }


        </style>
        <!-- Tailwind CSS (for reference) -->
        <style>
          .perspective { perspective: 1000px; }
          .backface-hidden { backface-visibility: hidden; }
          .transform-style-preserve-3d { transform-style: preserve-3d; }
        </style>

        <style>
          .main-container {
              display: flex;
              justify-content: center;
              align-items: center;
              height: 100%;
              width: 100%;
              background-color: black; /* Para consistent sa dati mong loader */
            }

            .loader {
              width: 100%;
            }

            .trace-bg {
              stroke: #333;
              stroke-width: 1.8;
              fill: none;
            }

            .trace-flow {
              stroke-width: 1.8;
              fill: none;
              stroke-dasharray: 40 400;
              stroke-dashoffset: 438;
              filter: drop-shadow(0 0 6px currentColor);
              animation: flow 3s cubic-bezier(0.5, 0, 0.9, 1) infinite;
            }

            .yellow { stroke: #ffea00; color: #ffea00; }
            .blue { stroke: #00ccff; color: #00ccff; }
            .green { stroke: #00ff15; color: #00ff15; }
            .purple { stroke: #9900ff; color: #9900ff; }
            .red { stroke: #ff3300; color: #ff3300; }

            @keyframes flow {
              to { stroke-dashoffset: 0; }
            }

        </style>
        
    </head>
    <body class="smooth-scroll">
 
      <!-- Loading Screen -->
        <div id="loading-screen" class="fixed inset-0 z-50 flex items-center justify-center bg-black">
          <div class="main-container">
            <div class="loader">
              <svg viewBox="0 0 800 500" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="chipGradient" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#2d2d2d"></stop>
                    <stop offset="100%" stop-color="#0f0f0f"></stop>
                  </linearGradient>

                  <linearGradient id="textGradient" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#eeeeee"></stop>
                    <stop offset="100%" stop-color="#888888"></stop>
                  </linearGradient>

                  <linearGradient id="pinGradient" x1="1" y1="0" x2="0" y2="0">
                    <stop offset="0%" stop-color="#bbbbbb"></stop>
                    <stop offset="50%" stop-color="#888888"></stop>
                    <stop offset="100%" stop-color="#555555"></stop>
                  </linearGradient>
                </defs>

                <g id="traces">
                  <path d="M100 100 H200 V210 H326" class="trace-bg"></path>
                  <path d="M100 100 H200 V210 H326" class="trace-flow purple"></path>

                  <path d="M80 180 H180 V230 H326" class="trace-bg"></path>
                  <path d="M80 180 H180 V230 H326" class="trace-flow blue"></path>

                  <path d="M60 260 H150 V250 H326" class="trace-bg"></path>
                  <path d="M60 260 H150 V250 H326" class="trace-flow yellow"></path>

                  <path d="M100 350 H200 V270 H326" class="trace-bg"></path>
                  <path d="M100 350 H200 V270 H326" class="trace-flow green"></path>

                  <path d="M700 90 H560 V210 H474" class="trace-bg"></path>
                  <path d="M700 90 H560 V210 H474" class="trace-flow blue"></path>

                  <path d="M740 160 H580 V230 H474" class="trace-bg"></path>
                  <path d="M740 160 H580 V230 H474" class="trace-flow green"></path>

                  <path d="M720 250 H590 V250 H474" class="trace-bg"></path>
                  <path d="M720 250 H590 V250 H474" class="trace-flow red"></path>

                  <path d="M680 340 H570 V270 H474" class="trace-bg"></path>
                  <path d="M680 340 H570 V270 H474" class="trace-flow yellow"></path>
                </g>

                <rect
                  x="330"
                  y="190"
                  width="140"
                  height="100"
                  rx="20"
                  ry="20"
                  fill="url(#chipGradient)"
                  stroke="#222"
                  stroke-width="3"
                  filter="drop-shadow(0 0 6px rgba(0,0,0,0.8))"
                ></rect>

                <g>
                  <rect x="322" y="205" width="8" height="10" fill="url(#pinGradient)" rx="2"></rect>
                  <rect x="322" y="225" width="8" height="10" fill="url(#pinGradient)" rx="2"></rect>
                  <rect x="322" y="245" width="8" height="10" fill="url(#pinGradient)" rx="2"></rect>
                  <rect x="322" y="265" width="8" height="10" fill="url(#pinGradient)" rx="2"></rect>
                </g>

                <g>
                  <rect x="470" y="205" width="8" height="10" fill="url(#pinGradient)" rx="2"></rect>
                  <rect x="470" y="225" width="8" height="10" fill="url(#pinGradient)" rx="2"></rect>
                  <rect x="470" y="245" width="8" height="10" fill="url(#pinGradient)" rx="2"></rect>
                  <rect x="470" y="265" width="8" height="10" fill="url(#pinGradient)" rx="2"></rect>
                </g>

                <text
                  x="400"
                  y="240"
                  font-family="Arial, sans-serif"
                  font-size="22"
                  fill="url(#textGradient)"
                  text-anchor="middle"
                  alignment-baseline="middle"
                >
                  Loading 
                </text>
              </svg>
            </div>
          </div>
        </div>


        <!-- Cursor Trail -->
        <div class="cursor-trail"></div>
            <nav class="fixed top-0 w-full z-40 glass-morphism">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                <div
                    class="text-xl font-bold text-gradient"
                    style="font-family: 'Orbitron', monospace;"
                >
                    BOYET.DEDAL
                </div>

                <!-- DESKTOP MENU -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="nav-item px-4 py-2 text-sm font-medium hover:text-primary transition-colors">HOME</a>
                    <a href="#about" class="nav-item px-4 py-2 text-sm font-medium hover:text-primary transition-colors">ABOUT</a>
                    <a href="#resume" class="nav-item px-4 py-2 text-sm font-medium hover:text-primary transition-colors">RESUME</a>
                    <a href="#projects" class="nav-item px-4 py-2 text-sm font-medium hover:text-primary transition-colors">PROJECTS</a>
                    <a href="#experience" class="nav-item px-4 py-2 text-sm font-medium hover:text-primary transition-colors">EXPERIENCE</a>
                    <a href="#contact" class="nav-item px-4 py-2 text-sm font-medium hover:text-primary transition-colors">CONTACT</a>
                </div>

                <!-- HAMBURGER BUTTON -->
                <button id="menu-btn" class="md:hidden w-10 h-10 flex items-center justify-center z-50 relative">
                    <i class="ri-menu-line text-2xl"></i>
                </button>
                </div>

                <!-- MOBILE MENU -->
                <div
                id="mobile-menu"
                class="hidden flex-col mt-4 space-y-4 md:hidden glass-morphism p-4 rounded-lg"
                >
                <a href="#home" class="block py-2">HOME</a>
                <a href="#about" class="block py-2">ABOUT</a>
                <a href="#resume" class="block py-2">RESUME</a>
                <a href="#projects" class="block py-2">PROJECTS</a>
                <a href="#experience" class="block py-2">EXPERIENCE</a>
                <a href="#contact" class="block py-2">CONTACT</a>
                </div>
            </div>
            </nav>

        <!-- Hero Section -->
        <section
        id="home"
        class="min-h-screen hero-bg relative overflow-hidden flex items-center"
        >
        <!-- Animated Particles -->
        <div class="absolute inset-0">
            <div
            class="particle"
            style="top: 20%; left: 10%; animation-delay: 0s;"
            ></div>
            <div
            class="particle"
            style="top: 60%; left: 80%; animation-delay: 1s;"
            ></div>
            <div
            class="particle"
            style="top: 40%; left: 30%; animation-delay: 2s;"
            ></div>
            <div
            class="particle"
            style="top: 80%; left: 60%; animation-delay: 3s;"
            ></div>
            <div
            class="particle"
            style="top: 15%; left: 70%; animation-delay: 4s;"
            ></div>
        </div>

        <!-- Circuit Lines -->
        <div
            class="circuit-line"
            style="top: 32%; left: 3%; width: 200px; animation-delay: 0.5s;"
        ></div>
        <div
            class="circuit-line"
            style="top: 80%; right: 15%; width: 300px; animation-delay: 1.5s;"
        ></div>
        <div
            class="circuit-line"
            style="top: 46%; left: 0%; width: 500px; transform: rotate(45deg); animation-delay: 2.5s;"
        ></div>

        <div class="w-full max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                <div
                    class="text-sm font-medium text-primary tracking-wider"
                    style="font-family: 'Orbitron', monospace;"
                >
                    JUNIOR DEVELOPER
                </div>
                <h1
                    class="text-5xl lg:text-7xl font-black text-gradient leading-tight"
                    style="font-family: 'Orbitron', monospace;"
                >
                    B. DEDAL
                </h1>
                <p class="text-xl text-gray-300 leading-relaxed max-w-lg">
                    I'm a Junior Developer from Hindang, Leyte, passionate about building creative and functional digital solutions.
                </p>
                </div>
                <div class="flex flex-wrap gap-4">
                  <a
                  href="#projects"
                    class="!rounded-button whitespace-nowrap px-8 py-4 glass-morphism neon-glow magnetic-hover text-white font-semibold"
                  >
                    Explore Portfolio
                  </a>
                </div>
            </div>
              <div class="relative">
                  <div class="w-80 h-80 mx-auto relative">
                      <!-- Digital Avatar -->
                      <div class="absolute inset-0 rounded-full glass-morphism neon-glow flex items-center justify-center">                     
                          <div class="w-75 h-85 rounded-full overflow-hidden flex items-center justify-center 
                          shadow-[0_0_30px_10px_rgba(186,85,255,0.7)]">
                              <img src="assets/img/boy.png" alt="User" class="w-full h-full object-cover" />
                          </div>
                      </div>
                      <!-- Orbiting Elements -->
                      <div class="absolute inset-0 animate-spin" style="animation-duration: 20s;">
                          <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-2 w-4 h-4 bg-primary rounded-full opacity-60"></div>
                          <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-2 w-3 h-3 bg-secondary rounded-full opacity-80"></div>
                          <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-2 w-2 h-2 bg-purple-400 rounded-full opacity-70"></div>
                          <div class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-2 w-3 h-3 bg-cyan-400 rounded-full opacity-60"></div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        </section>

        <!-- About Section -->
      <section id="about" class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">

          <!-- Header -->
          <div class="text-center mb-16 fade-in-up">
            <h2 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 mb-6" style="font-family: 'Orbitron', monospace;">
              ABOUT ME
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto animate-fade-in">
              Information Technology Student & Aspiring Developer. Hands-on experience in system development with projects like Student Profile Registration System, Voting System, and ID Maker System (MLG & HNVS). Constantly eager to learn and improve skills in software and web development.
            </p>
          </div>

          <!-- Skills / Projects -->
          <div class="grid lg:grid-cols-3 gap-8 animate-fade-in">
            <div class="p-8 bg-white/5 backdrop-blur-md shadow-lg border border-white/10 hover:scale-105 transition-transform duration-500 flex flex-col items-start gap-4">
              <div class="w-12 h-12 flex items-center justify-center text-3xl text-purple-400 animate-bounce">
                <i class="ri-code-s-slash-line"></i>
              </div>
              <h3 class="text-xl font-bold mb-2 text-white">Web Development</h3>
              <p class="text-gray-300">
                HTML, CSS, JavaScript, Bootstrap, Tailwind CSS, PHP, Laravel
              </p>
            </div>
            <div class="p-8 bg-white/5 backdrop-blur-md shadow-lg border border-white/10 hover:scale-105 transition-transform duration-500 flex flex-col items-start gap-4">
              <div class="w-12 h-12 flex items-center justify-center text-3xl text-indigo-400 animate-bounce">
                <i class="ri-database-line"></i>
              </div>
              <h3 class="text-xl font-bold mb-2 text-white">Database Management</h3>
              <p class="text-gray-300">
                MySQL, CRUD operations, data organization, and optimization
              </p>
            </div>
            <div class="p-8 bg-white/5 backdrop-blur-md shadow-lg border border-white/10 hover:scale-105 transition-transform duration-500 flex flex-col items-start gap-4">
              <div class="w-12 h-12 flex items-center justify-center text-3xl text-pink-400 animate-bounce">
                <i class="ri-briefcase-line"></i>
              </div>
              <h3 class="text-xl font-bold mb-2 text-white">Projects</h3>
              <p class="text-gray-300">
                Student Profile Registration System, Voting System, ID Maker System (MLG & HNVS)
              </p>
            </div>
          </div>
        </div>
        <!-- Optional floating shapes for modern look -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
      </section>
   <section id="resume" class="py-20">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Title -->
    <h2 class="text-4xl font-bold text-center mb-16 text-gradient"
        style="font-family: 'Orbitron', monospace;">
      MY RESUME
    </h2>

    <!-- 2 Columns -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16">

      <!-- LEFT COLUMN -->
      <div>

        <!-- Summary -->
        <h3 class="text-2xl font-bold mb-4">Summary</h3>
        <div class="border-l-2 border-primary pl-4 space-y-3">
          <p class="text-sm text-primary font-semibold">BOYET A. DEDAL</p>
          <p class="text-gray-300 leading-relaxed">
            A hardworking Information Technology student who is eager to learn and improve. Passionate about using technical skills to create useful solutions and contribute to real projects.
          </p>

          <ul class="text-gray-400 space-y-1">
            <li>• Age: 22</li>
            <li>• Hindang, Leyte, Philippines</li>
            <li>• 0991 652 9335</li>
            <li>• dedalboyet16@gmail.com</li>
          </ul>
        </div>

        <!-- Education -->
        <h3 class="text-2xl font-bold mt-10 mb-4">Education</h3>
      <div class="border-l-2 border-primary pl-4 space-y-3">

    
        <!-- Primary -->
        <div class="mb-6 ">
          <p class="text-sm text-primary font-semibold">PRIMARY</p>
          <p class="text-gray-400 text-sm">2006 – 2007</p>
          <p class="text-gray-300">Baldoza Elementary School, Hindang Leyte</p>
        </div>

        <!-- Secondary -->
        <div class="mb-6">
          <p class="text-sm text-primary font-semibold">SECONDARY</p>
          <p class="text-gray-400 text-sm">2017 – 2020</p>

          <ul class="text-gray-300 space-y-1">
            <li>Junior High School</li>
            <li><p class="text-gray-400 text-sm">• Hindang National High School</p></li>
            <li>Senior High School</li>
            <li><p class="text-gray-400 text-sm">• Hindang Stand Alone Senior High School</p></li>
          </ul>
        </div>

        <!-- Tertiary -->
        <div class="mb-6">
          <p class="text-sm text-primary font-semibold">TERTIARY</p>
          <p class="text-gray-400 text-sm">2021 – 2025</p>

          <p class="text-gray-400 text-sm">• Bachelor of Science in Information Technology</p>
        </div>
      </div>
      </div>
      <!-- RIGHT COLUMN -->
      <div>

        <!-- Work Experience -->
        <h3 class="text-2xl font-bold mb-4">Work Experience</h3>

      <div class="border-l-2 border-primary pl-4 space-y-3 fade-in-up">
        <p class="text-primary text-sm font-semibold">WORK EXPERIENCE</p>
        <p class="text-gray-400 text-sm">Web Developer (2022 – 2024)</p>
        <p class="text-gray-400 text-sm">Creative Dev Labs Company (October 31, 2023 – 2024)</p>
        <p class="text-gray-400 text-sm">Project Based Employee</p>

        <ul class="text-gray-300 space-y-2 mt-2">
          <li>• CDL upgrade to blocks</li>
          <li>• Data Mining</li>
        </ul>
      </div>

        <!-- Skills -->
        <h3 class="text-2xl font-bold mt-10 mb-4">Skills</h3>

        <div class="border-l-2 border-primary pl-4">
          <ul class="text-gray-300 space-y-2">
            <li>• HTML, CSS,PHP,Laravel,Filament and JavaScript</li>
            <li>• Responsive Web Design</li>
            <li>• Time Management</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- Projects Section -->
<section id="projects" class="py-20 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Header -->
    <div class="text-center mb-16 fade-in-up">
      <h2 class="text-4xl font-bold text-gradient mb-6" style="font-family: 'Orbitron', monospace;">
        PROJECTS
      </h2>
    <p class="text-xl text-gray-300">
      Showcasing initiatives that combine expertise, creativity, and technology to solve real problems effectively.
    </p>
    </div>

    <!-- Projects Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Project Card 1 -->
      <div class="project-card perspective h-80 fade-in-up">
        <div class="project-inner relative w-full h-full duration-700 transform-style-preserve-3d transition-transform">
          
          <!-- Front -->
          <div class="project-front relative w-full h-full backface-hidden p-6 rounded-2xl flex flex-col bg-cover bg-center shadow-lg border border-white/10 pointer-events-none" 
              style="background-image: url('assets/img/hnvs-id.png');">
            
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/75 rounded-2xl pointer-events-none"></div>
            
            <!-- Content -->
            <div class="relative z-10 flex flex-col flex-1">
              <div class="w-full h-32 flex items-center justify-center mb-4 animate-bounce">
                <i class="ri-id-card-line text-4xl text-primary"></i>
              </div>
              <h3 class="text-xl font-bold mb-2 text-white">HNVS ID Maker</h3>
              <p class="text-white text-sm flex-1">
                A user-friendly system for creating student and staff IDs efficiently with image upload, QR code integration, and PDF export.
              </p>
              <div class="flex flex-wrap gap-2 mt-4">
                <span class="px-3 py-1 text-xs bg-primary/20 text-primary rounded-full">ID System</span>
                <span class="px-3 py-1 text-xs bg-purple-500/20 text-purple-400 rounded-full">QR Code</span>
                <span class="px-3 py-1 text-xs bg-pink-500/20 text-pink-400 rounded-full">PDF Export</span>
              </div>
            </div>
          </div>

          <!-- Back -->
          <div class="project-back absolute w-full h-full backface-hidden rotate-y-180 p-6 bg-white/5 backdrop-blur-md shadow-lg rounded-2xl flex flex-col justify-center pointer-events-auto">
            <h3 class="text-xl font-bold mb-4">Technical Details</h3>
            <ul class="text-sm text-gray-300 space-y-2">
              <li>• Image upload for student/staff photos</li>
              <li>• Automatic QR code generation</li>
              <li>• Export IDs as PDF</li>
              <li>• Drag-and-drop image upload for easy ID creation</li>
            </ul>
            <a href="https://hnvs-id.creativedevlabs.com" target="_blank" 
              class="!rounded-button whitespace-nowrap mt-4 px-6 py-2 bg-primary text-black font-semibold text-center">
              View Project
            </a>
          </div>

        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="project-card perspective h-80 fade-in-up" style="animation-delay: 0.2s;">
        <div class="project-inner relative w-full h-full duration-700 transform-style-preserve-3d transition-transform">

          <!-- Front -->
          <div class="project-front relative w-full h-full backface-hidden p-6 rounded-2xl flex flex-col bg-cover bg-center shadow-lg border border-white/10 pointer-events-none" 
              style="background-image: url('assets/img/idmakermlgcl.png');">
            <div class="absolute inset-0 bg-black/80 rounded-2xl pointer-events-none"></div>
            <div class="relative z-10 flex flex-col flex-1">
              <div class="w-full h-32 flex items-center justify-center mb-4 animate-bounce">
                <i class="ri-id-card-line text-4xl text-secondary"></i>
              </div>
              <h3 class="text-xl font-bold mb-2 text-white">MLG ID Maker</h3>
              <p class="text-white text-sm flex-1">
                A comprehensive ID creation system for MLG, featuring user-friendly interface, image upload, and PDF export.
              </p>
              <div class="flex flex-wrap gap-2 mt-4">
                <span class="px-3 py-1 text-xs bg-secondary/20 text-secondary rounded-full">ID System</span>
                <span class="px-3 py-1 text-xs bg-cyan-500/20 text-cyan-400 rounded-full">PDF Export</span>
                <span class="px-3 py-1 text-xs bg-pink-500/20 text-pink-400 rounded-full">Image Upload</span>
              </div>
            </div>
          </div>

          <!-- Back -->
          <div class="project-back absolute w-full h-full backface-hidden rotate-y-180 p-6 bg-white/5 backdrop-blur-md shadow-lg border border-white/10 rounded-2xl flex flex-col justify-center pointer-events-auto">
            <h3 class="text-xl font-bold mb-4">Technical Details</h3>
            <ul class="text-sm text-gray-300 space-y-2">
              <li>• Drag-and-drop image upload for ID creation</li>
              <li>• Export IDs as PDF</li>
              <li>• User-friendly interface</li>
              <li>• Secure access and management</li>
            </ul>
            <a href="https://idmaker.creativedevlabs.com" target="_blank" 
              class="!rounded-button whitespace-nowrap mt-4 px-6 py-2 bg-primary text-black font-semibold text-center">
              View Project
            </a>
          </div>

        </div>
      </div>

          <!-- Project Card 3 -->
      <div class="project-card perspective h-80 fade-in-up" style="animation-delay: 0.4s;">
        <div class="project-inner relative w-full h-full duration-700 transform-style-preserve-3d transition-transform">
          <!-- Front -->
          <div class="project-front relative w-full h-full backface-hidden p-6 rounded-2xl flex flex-col bg-cover bg-center shadow-lg border border-black/10 pointer-events-none"
              style="background-image: url('assets/img/taskmanagement.png');">
            <div class="absolute inset-0 bg-black/80 rounded-2xl pointer-events-none"></div>
            <div class="relative z-10 flex flex-col flex-1">
              <div class="w-full h-32 flex items-center justify-center mb-4 animate-bounce">
                <i class="ri-task-line text-4xl text-purple-400"></i>
              </div>
              <h3 class="text-xl font-bold mb-2 text-white">Task Management System</h3>
              <p class="text-white text-sm flex-1">
                A comprehensive system to manage tasks efficiently with roles, assignments, notifications, and progress tracking.
              </p>
              <div class="flex flex-wrap gap-2 mt-4">
                <span class="px-3 py-1 text-xs bg-purple-500/20 text-purple-400 rounded-full">Tasks</span>
                <span class="px-3 py-1 text-xs bg-pink-500/20 text-pink-400 rounded-full">CRUD</span>
                <span class="px-3 py-1 text-xs bg-indigo-500/20 text-indigo-400 rounded-full">Notifications</span>
              </div>
            </div>
          </div>
          <!-- Back -->
          <div class="project-back absolute w-full h-full backface-hidden rotate-y-180 p-6 bg-white/5 backdrop-blur-md shadow-lg border border-white/10 rounded-2xl flex flex-col justify-center pointer-events-auto">
            <h3 class="text-xl font-bold mb-4">Technical Details</h3>
            <ul class="text-sm text-gray-300 space-y-2">
              <li>• Role-based task assignment</li>
              <li>• Task CRUD functionality</li>
              <li>• Real-time notifications</li>
              <li>• Progress tracking for teams</li>
            </ul>
            <a href="https://bdedal.online/" target="_blank" 
              class="!rounded-button whitespace-nowrap mt-4 px-6 py-2 bg-primary text-black font-semibold text-center">
              View Project
            </a>
          </div>
        </div>
      </div>

      <!-- Project Card 4 -->
      <div class="project-card perspective h-80 fade-in-up" style="animation-delay: 0.4s;">
        <div class="project-inner relative w-full h-full duration-700 transform-style-preserve-3d transition-transform">
          <!-- Front -->
          <div class="project-front relative w-full h-full backface-hidden p-6 rounded-2xl flex flex-col bg-cover bg-center shadow-lg overflow-hidden border border-black/10 pointer-events-none"
              style="background-image: url('assets/img/stdprofile.png');">
            <div class="absolute inset-0 bg-black/80 rounded-2xl pointer-events-none"></div>
            <div class="relative z-10 flex flex-col flex-1">
              <div class="w-full h-32 flex items-center justify-center mb-4 animate-bounce">
                <i class="ri-profile-line text-4xl text-purple-400"></i>
              </div>
              <h3 class="text-xl font-bold mb-2 text-white">Student Profile Registration System</h3>
              <p class="text-white text-sm flex-1">
                A system to manage student records with full CRUD functionality, image uploads, search, and responsive design.
              </p>
              <div class="flex flex-wrap gap-2 mt-4">
                <span class="px-3 py-1 text-xs bg-purple-500/20 text-purple-400 rounded-full">CRUD</span>
                <span class="px-3 py-1 text-xs bg-pink-500/20 text-pink-400 rounded-full">Image Upload</span>
                <span class="px-3 py-1 text-xs bg-indigo-500/20 text-indigo-400 rounded-full">Responsive</span>
              </div>
            </div>
          </div>
          <!-- Back -->
          <div class="project-back absolute w-full h-full backface-hidden rotate-y-180 p-6 bg-white/5 backdrop-blur-md shadow-lg border border-white/10 rounded-2xl flex flex-col justify-center pointer-events-auto">
            <h3 class="text-xl font-bold mb-4">Technical Details</h3>
            <ul class="text-sm text-gray-300 space-y-2">
              <li>• Add, edit, delete student records</li>
              <li>• Upload student profile pictures</li>
              <li>• Search and filter students</li>
              <li>• Mobile-friendly responsive layout</li>
            </ul>
            <a href="https://stdprofile.webactivities.online/login.form.php?/" target="_blank" 
              class="!rounded-button whitespace-nowrap mt-4 px-6 py-2 bg-primary text-black font-semibold text-center">
              View Project
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

     <!-- Experience Timeline -->
<section id="experience" class="py-20">
  <div class="max-w-4xl mx-auto px-6">
    <div class="text-center mb-16 fade-in-up">
      <h2
        class="text-4xl font-bold text-gradient mb-6"
        style="font-family: 'Orbitron', monospace;"
      >
        TIMELINE
      </h2>
      <p class="text-xl text-gray-300">
        A professional journey through web development, project execution, and data-driven innovation.
      </p>
    </div>

    <div class="relative">
      <div
        class="timeline-line absolute left-1/2 transform -translate-x-1/2 w-1 h-full"
      ></div>

      <div class="space-y-12">
       <!-- Work Experience -->
<div class="flex items-center fade-in-up">
  <div class="w-1/2 pr-8 text-right">
    <div class="holographic-card p-6">
      <div class="text-sm text-primary font-semibold mb-2">
        October 2023 – 2024
      </div>
      <h3 class="text-xl font-bold mb-2">Project-Based Employee</h3>
      <p class="text-gray-300 mb-3">Creative Dev Labs Company</p>
      <p class="text-sm text-gray-400">
        Contributed to upgrading CDL blocks and performing data mining tasks. Assisted in various web development projects, providing technical support and innovative solutions.
      </p>
    </div>
  </div>
  <div
    class="w-8 h-8 bg-primary rounded-full flex items-center justify-center relative z-10"
  >
    <i class="ri-briefcase-line text-black text-sm"></i>
  </div>
  <div class="w-1/2 pl-8"></div>
</div>


        <!-- You can keep older experiences if needed -->
        <!-- Example placeholder -->
        <div
          class="flex items-center fade-in-up"
          style="animation-delay: 0.2s;"
        >
          <div class="w-1/2 pr-8"></div>
          <div
            class="w-8 h-8 bg-secondary rounded-full flex items-center justify-center relative z-10"
          >
            <i class="ri-rocket-fill text-black text-sm"></i>
          </div>
          <div class="w-1/2 pl-8">
            <div class="holographic-card p-6">
              <div class="text-sm text-secondary font-semibold mb-2">
                2024 – 2025
              </div>
              <h3 class="text-xl font-bold mb-2">Junior Web Developer</h3>
              <p class="text-gray-300 mb-3">Internship / Freelance</p>
              <p class="text-sm text-gray-400">
                Assisted in front-end development, testing, and maintenance of web projects.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


        <!-- Contact Section -->
        <section id="contact" class="py-20">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-up">
            <h2
                class="text-4xl font-bold text-gradient mb-6"
                style="font-family: 'Orbitron', monospace;"
            >
                CONTACT ME
            </h2>
            <p class="text-xl text-gray-300">
                Let’s connect! I’m available for projects, collaborations, or to share insights in web and software development.
            </p>

            </div>

            <div class="grid md:grid-cols-2 gap-12">
            <div class="space-y-8 fade-in-up">
                <div class="holographic-card p-6 magnetic-hover">
                <div class="flex items-center space-x-4">
                    <div
                    class="w-12 h-12 flex items-center justify-center bg-primary/20 rounded-full"
                    >
                    <i class="ri-mail-line text-primary text-xl"></i>
                    </div>
                    <div>
                    <h3 class="font-semibold mb-1">Boyet's Mail</h3>
                    <p class="text-gray-300">dedalboyet16@gmail.com</p>
                    </div>
                </div>
                </div>

                <div class="holographic-card p-6 magnetic-hover">
                <div class="flex items-center space-x-4">
                    <div
                    class="w-12 h-12 flex items-center justify-center bg-secondary/20 rounded-full"
                    >
                    <i class="ri-phone-line text-secondary text-xl"></i>
                    </div>
                    <div>
                    <h3 class="font-semibold mb-1">Phone Number</h3>
                    <p class="text-gray-300">0991 652 9335</p>
                    </div>
                </div>
                </div>

                <div class="holographic-card p-6 magnetic-hover">
                <div class="flex items-center space-x-4">
                    <div
                    class="w-12 h-12 flex items-center justify-center bg-purple-500/20 rounded-full"
                    >
                    <i class="ri-map-pin-line text-purple-400 text-xl"></i>
                    </div>
                    <div>
                    <h3 class="font-semibold mb-1">Address</h3>
                    <p class="text-gray-300">Brgy.Baldoza Hindang Leyte</p>
                    </div>
                </div>
                </div>
            </div>

            <div class="fade-in-up" style="animation-delay: 0.2s;">
                <form class="space-y-6">
                <div>
                    <input
                    type="text"
                    placeholder="Full Name"
                    class="w-full px-4 py-3 glass-morphism border-none text-white placeholder-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                    />
                </div>
                <div>
                    <input
                    type="text"
                    placeholder="Address"
                    class="w-full px-4 py-3 glass-morphism border-none text-white placeholder-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                    />
                </div>
                <div>
                    <textarea
                    rows="4"
                    placeholder="Message"
                    class="w-full px-4 py-3 glass-morphism border-none text-white placeholder-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-primary resize-none"
                    ></textarea>
                </div>
                <button
                    type="submit"
                    class="!rounded-button whitespace-nowrap w-full py-3 bg-primary text-black font-semibold magnetic-hover"
                >
                    Submit
                </button>
                </form>
            </div>
            </div>
        </div>
        </section>

        <!-- Footer -->
        <footer class="py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
            <div
                class="text-gradient font-bold text-xl mb-4 md:mb-0"
                style="font-family: 'Orbitron', monospace;"
            >
                BOYET.DEDAL
            </div>
            <div class="flex space-x-6">
              <a
                href="https://www.facebook.com/dedalyaxay05"
                target="_blank"
                class="w-10 h-10 flex items-center justify-center glass-morphism rounded-full magnetic-hover"
              >
                <i class="ri-facebook-fill text-lg"></i>
              </a>

                <a
                href="https://www.linkedin.com/in/boyet-dedal-936484359/"
                target="_blank"
                class="w-10 h-10 flex items-center justify-center glass-morphism rounded-full magnetic-hover"
                >
                <i class="ri-linkedin-line text-lg"></i>
                </a>
            </div>
            </div>
            <div class="text-center mt-8 text-gray-400 text-sm">
            © 2025 Boyet Dedal. All rights reserved. Designed by Yax.
            </div>
        </div>
        </footer>

        <script id="loading-animation">
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(() => {
            document.getElementById("loading-screen").style.opacity = "0";
            setTimeout(() => {
                document.getElementById("loading-screen").style.display = "none";
            }, 500);
            }, 3000);
        });
        </script>

        <script id="scroll-animations">
        document.addEventListener("DOMContentLoaded", function () {
            const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px",
            };

            const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                }
            });
            }, observerOptions);

            document.querySelectorAll(".fade-in-up").forEach((el) => {
            observer.observe(el);
            });
        });
        </script>

        <script id="cursor-trail">
        document.addEventListener("DOMContentLoaded", function () {
            const trail = document.querySelector(".cursor-trail");
            let mouseX = 0,
            mouseY = 0;
            let trailX = 0,
            trailY = 0;

            document.addEventListener("mousemove", (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            trail.style.opacity = "1";
            });

            function animateTrail() {
            trailX += (mouseX - trailX) * 0.1;
            trailY += (mouseY - trailY) * 0.1;

            trail.style.left = trailX + "px";
            trail.style.top = trailY + "px";

            requestAnimationFrame(animateTrail);
            }
            animateTrail();

            document.addEventListener("mouseleave", () => {
            trail.style.opacity = "0";
            });
        });
        </script>

        <script id="smooth-navigation">
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
                }
            });
            });
        });
        </script>

        <script id="magnetic-effects">
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".magnetic-hover").forEach((element) => {
            element.addEventListener("mouseenter", function () {
                this.style.transform = "scale(1.05) translateZ(0)";
            });

            element.addEventListener("mouseleave", function () {
                this.style.transform = "scale(1) translateZ(0)";
            });
            });
        });
        </script>
    <script>
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");
        const mobileLinks = mobileMenu.querySelectorAll("a");
        let isOpen = false;

        menuBtn.addEventListener("click", () => {
            isOpen = !isOpen;

            if (isOpen) {
            mobileMenu.classList.remove("hidden");
            menuBtn.innerHTML = `<i class="ri-close-line text-2xl"></i>`;
            } else {
            mobileMenu.classList.add("hidden");
            menuBtn.innerHTML = `<i class="ri-menu-line text-2xl"></i>`;
            }
        });

        // ✅ AUTO CLOSE PAG PININDOT ANG LINK
        mobileLinks.forEach(link => {
            link.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
            menuBtn.innerHTML = `<i class="ri-menu-line text-2xl"></i>`;
            isOpen = false;
            });
        });
        </script>
<script>
document.querySelectorAll('.project-card').forEach(card => {
  const inner = card.querySelector('.project-inner');

  card.addEventListener('click', (e) => {
    // Skip flip if clicked on button or link
    if (e.target.closest('button') || e.target.closest('a')) return;

    inner.classList.toggle('rotate-y-180');
  });
});
</script>
   
     

    </body>
    </html>
