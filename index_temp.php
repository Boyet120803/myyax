
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

            html {
              width: 100%;
              overflow-x: hidden; /* Clamp layout to viewport to stop horizontal scroll */
            }

            body {
                font-family: 'Exo 2', sans-serif;
              background: #311E4C;
                color: #ffffff;
                overflow-x: hidden;
              transition: background-color 0.3s ease, color 0.3s ease;
            }

            body.theme-light {
              background: #E1EBED;
              color: #0f172a;
            }

            body.theme-light .hero-bg {
              background: radial-gradient(circle at 20% 30%, rgba(14, 165, 233, 0.18) 0%, transparent 55%),
                    radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.12) 0%, transparent 60%),
                    radial-gradient(circle at 40% 80%, rgba(244, 114, 182, 0.12) 0%, transparent 55%),
                    linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #dbeafe 100%);
            }

            body.theme-light .glass-morphism {
              background: rgba(255, 255, 255, 0.75);
              border-color: rgba(15, 23, 42, 0.1);
            }

            body.theme-light .text-white {
              color: #0f172a !important;
            }

            body.theme-light .text-gray-300,
            body.theme-light .text-gray-400 {
              color: #475569 !important;
            }

            body.theme-light .text-gray-200 {
              color: #334155 !important;
            }

            body.theme-light .stats-number {
              color: #0f172a !important;
            }

            body.theme-light .nav-item {
              color: #0f172a;
            }

            body.theme-light .nav-item:hover {
              color: #0ea5e9;
            }

            .theme-toggle {
              color: #ffffff;
              border: 1px solid rgba(255, 255, 255, 0.2);
              background: rgba(255, 255, 255, 0.06);
              transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
            }

            body.theme-light .theme-toggle {
              color: #0f172a;
              border-color: rgba(15, 23, 42, 0.15);
              background: rgba(255, 255, 255, 0.9);
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

            .float-in-left,
            .float-in-right {
              opacity: 0;
              transition: opacity 0.9s ease, transform 0.9s ease;
            }

            .float-in-left {
              transform: translateX(-32px);
            }

            .float-in-right {
              transform: translateX(32px);
            }

            .float-in-left.visible,
            .float-in-right.visible {
              opacity: 1;
              transform: translateX(0);
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

            .site-nav {
              position: fixed;
              top: 0;
              left: 0;
              right: 0;
              z-index: 60;
              width: 100%;
              max-width: 100vw;
              overflow-x: hidden;
            }

            .site-nav .nav-shell {
              width: 100%;
            }

            .site-nav .nav-bar {
              display: grid;
              grid-template-columns: auto 1fr auto;
              align-items: center;
              gap: 0.75rem;
            }

            .site-nav .nav-brand {
              justify-self: center;
            }

            .site-nav .nav-controls {
              display: flex;
              align-items: center;
              justify-content: flex-end;
              gap: 0.75rem;
            }

            @media (min-width: 768px) {
              .site-nav .nav-bar {
                display: flex;
                flex-wrap: wrap;
              }

              .site-nav .nav-brand {
                justify-self: flex-start;
              }
            }

            .site-nav .nav-brand,
            .site-nav .nav-controls {
              min-width: 0;
            }

            .site-nav .nav-controls {
              justify-content: flex-end;
            }

            .site-nav #mobile-menu {
              width: 100%;
              max-width: 100%;
            }

            @media (max-width: 640px) {
              .site-nav .nav-shell {
                padding-left: 1rem;
                padding-right: 1rem;
              }

              .site-nav .nav-brand {
                text-align: center;
              }

              .site-nav .nav-controls {
                width: 100%;
                justify-content: space-between;
              }
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

            .scroll-top {
              position: fixed;
              right: 24px;
              bottom: 24px;
              width: 44px;
              height: 44px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 9999px;
              background: rgba(255, 255, 255, 0.08);
              border: 1px solid rgba(255, 255, 255, 0.2);
              color: #ffffff;
              opacity: 0;
              visibility: hidden;
              transform: translateY(8px);
              transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
              z-index: 60;
            }

            .scroll-top.active {
              opacity: 1;
              visibility: visible;
              transform: translateY(0);
            }

            body.theme-light .scroll-top {
              background: rgba(255, 255, 255, 0.9);
              border-color: rgba(15, 23, 42, 0.15);
              color: #0f172a;
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
