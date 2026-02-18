#!/usr/bin/env python3
"""
Enhance resume section with modern CSS and updated HTML structure
"""

# Read the original file
with open('index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Define the enhanced CSS for skill progress bars and resume cards
enhanced_css = """
                /* Skill Progress Bar Animation */
                @keyframes fillProgress {
                  from { width: 0%; }
                  to { width: var(--progress); }
                }

                .skill-progress-bar {
                  height: 6px;
                  background: rgba(255, 255, 255, 0.1);
                  border-radius: 10px;
                  overflow: hidden;
                  margin-top: 8px;
                  position: relative;
                }

                .skill-fill {
                  height: 100%;
                  border-radius: 10px;
                  animation: fillProgress 1.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
                  background: linear-gradient(90deg, #57B5E7, #8B45C1, #14B8A6);
                  box-shadow: 0 0 15px rgba(87, 181, 231, 0.5);
                }

                .skill-item {
                  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .skill-item:hover {
                  transform: translateX(4px);
                }

                /* Enhanced Resume Cards */
                .resume-card {
                  padding: 20px;
                  border-radius: 16px;
                  background: linear-gradient(135deg, rgba(87, 181, 231, 0.1) 0%, rgba(139, 69, 193, 0.05) 100%);
                  backdrop-filter: blur(10px);
                  border: 1px solid rgba(87, 181, 231, 0.2);
                  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                  position: relative;
                  overflow: hidden;
                }

                .resume-card::before {
                  content: '';
                  position: absolute;
                  top: 0;
                  left: -100%;
                  width: 100%;
                  height: 100%;
                  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
                  transition: left 0.5s ease;
                }

                .resume-card:hover::before {
                  left: 100%;
                }

                .resume-card:hover {
                  transform: translateY(-8px);
                  border-color: rgba(87, 181, 231, 0.5);
                  box-shadow: 0 15px 40px rgba(87, 181, 231, 0.15);
                }

                .resume-card-icon {
                  width: 48px;
                  height: 48px;
                  border-radius: 12px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  font-size: 24px;
                  background: linear-gradient(135deg, rgba(87, 181, 231, 0.2), rgba(139, 69, 193, 0.2));
                  margin-bottom: 12px;
                  transition: all 0.3s ease;
                }

                .resume-card:hover .resume-card-icon {
                  transform: scale(1.1) rotate(5deg);
                }
"""

# Find where to insert the CSS (after .rotate-y-180 definition)
find_str = "                .rotate-y-180 { transform: rotateY(180deg); }\n\n\n        </style>"
replace_str = "                .rotate-y-180 { transform: rotateY(180deg); }"
if find_str in content:
    content = content.replace(find_str, replace_str + enhanced_css + "\n        </style>")
    print("✓ Added enhanced CSS styles")
else:
    print("! Could not find CSS insertion point")

# Now replace the resume section
old_resume = """   <section id="resume" class="py-20">
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
</section>"""

new_resume = """   <section id="resume" class="py-20 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Decorative elements -->
    <div class="absolute top-10 right-0 w-96 h-96 bg-secondary/10 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-primary/10 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>

    <!-- Title -->
    <h2 class="text-5xl font-extrabold text-center mb-4 text-gradient relative z-10"
        style="font-family: 'Orbitron', monospace;">
      MY RESUME
    </h2>
    <p class="text-center text-gray-300 mb-16 text-lg">Complete professional profile & credentials</p>

    <!-- 2 Columns -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-10">

      <!-- LEFT COLUMN -->
      <div class="space-y-8">

        <!-- Summary Card -->
        <div class="resume-card animate-fade-in">
          <div class="flex items-start gap-4 mb-4">
            <div class="resume-card-icon text-primary">
              <i class="ri-user-line"></i>
            </div>
            <div>
              <h3 class="text-2xl font-bold text-white">Profile</h3>
              <p class="text-xs text-primary font-semibold uppercase tracking-wider">Personal Information</p>
            </div>
          </div>
          <p class="text-sm text-primary font-bold mb-3">BOYET A. DEDAL</p>
          <p class="text-gray-300 leading-relaxed text-sm mb-4">
            A hardworking Information Technology student who is eager to learn and improve. Passionate about using technical skills to create useful solutions and contribute to real projects.
          </p>
          <div class="space-y-2 text-sm text-gray-400">
            <div class="flex items-center gap-2"><i class="ri-user-6-line text-primary"></i> Age: <span class="text-white">22</span></div>
            <div class="flex items-center gap-2"><i class="ri-map-pin-line text-primary"></i> Hindang, Leyte, Philippines</div>
            <div class="flex items-center gap-2"><i class="ri-phone-line text-primary"></i> <span class="text-white">0991 652 9335</span></div>
            <div class="flex items-center gap-2"><i class="ri-mail-line text-primary"></i> <span class="text-white">dedalboyet16@gmail.com</span></div>
          </div>
        </div>

        <!-- Education Card -->
        <div class="resume-card animate-fade-in" style="animation-delay: 0.1s;">
          <div class="flex items-center gap-3 mb-4">
            <div class="resume-card-icon text-secondary">
              <i class="ri-book-line"></i>
            </div>
            <h3 class="text-2xl font-bold text-white">Education</h3>
          </div>
          
          <!-- Primary -->
          <div class="mb-4 pl-2 border-l-2 border-secondary/40">
            <p class="text-xs text-secondary font-bold uppercase tracking-wider mb-1">PRIMARY</p>
            <p class="text-gray-300 font-semibold text-sm">Baldoza Elementary School</p>
            <p class="text-gray-400 text-xs">2006 – 2007 • Hindang, Leyte</p>
          </div>

          <!-- Secondary -->
          <div class="mb-4 pl-2 border-l-2 border-secondary/40">
            <p class="text-xs text-secondary font-bold uppercase tracking-wider mb-1">SECONDARY</p>
            <p class="text-gray-300 font-semibold text-sm">2017 – 2020</p>
            <ul class="text-gray-400 text-xs space-y-1 mt-1">
              <li>• Hindang National High School (JHS)</li>
              <li>• Hindang Stand Alone Senior High School (SHS)</li>
            </ul>
          </div>

          <!-- Tertiary -->
          <div class="pl-2 border-l-2 border-secondary/40">
            <p class="text-xs text-secondary font-bold uppercase tracking-wider mb-1">TERTIARY</p>
            <p class="text-gray-300 font-semibold text-sm">Bachelor of Science in Information Technology</p>
            <p class="text-gray-400 text-xs">2021 – 2025</p>
          </div>
        </div>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="space-y-8">

        <!-- Work Experience Card -->
        <div class="resume-card animate-fade-in" style="animation-delay: 0.2s;">
          <div class="flex items-center gap-3 mb-4">
            <div class="resume-card-icon text-pink-400">
              <i class="ri-briefcase-line"></i>
            </div>
            <h3 class="text-2xl font-bold text-white">Experience</h3>
          </div>
          
          <div class="pl-2 border-l-2 border-pink-400/40">
            <p class="text-xs text-pink-400 font-bold uppercase tracking-wider mb-1">Web Developer</p>
            <p class="text-gray-300 font-semibold text-sm">Creative Dev Labs Company</p>
            <p class="text-gray-400 text-xs mb-3">October 2023 – 2024 • Project-Based Employee</p>
            <ul class="text-gray-300 text-sm space-y-2">
              <li class="flex items-start gap-2"><i class="ri-check-line text-primary mt-0.5"></i> CDL block upgrades & system enhancements</li>
              <li class="flex items-start gap-2"><i class="ri-check-line text-primary mt-0.5"></i> Data Mining & analytics</li>
              <li class="flex items-start gap-2"><i class="ri-check-line text-primary mt-0.5"></i> Web development & technical support</li>
            </ul>
          </div>
        </div>

        <!-- Skills Card -->
        <div class="resume-card animate-fade-in" style="animation-delay: 0.3s;">
          <div class="flex items-center gap-3 mb-4">
            <div class="resume-card-icon text-purple-400">
              <i class="ri-code-box-line"></i>
            </div>
            <h3 class="text-2xl font-bold text-white">Skills</h3>
          </div>

          <div class="space-y-4">
            <!-- Skill 1 -->
            <div class="skill-item">
              <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-semibold text-gray-200">Web Development</span>
                <span class="text-xs text-primary font-bold">95%</span>
              </div>
              <div class="skill-progress-bar">
                <div class="skill-fill" style="--progress: 95%;"></div>
              </div>
              <p class="text-xs text-gray-400 mt-1">HTML, CSS, PHP, Laravel, JavaScript</p>
            </div>

            <!-- Skill 2 -->
            <div class="skill-item">
              <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-semibold text-gray-200">Database Design</span>
                <span class="text-xs text-secondary font-bold">88%</span>
              </div>
              <div class="skill-progress-bar">
                <div class="skill-fill" style="--progress: 88%;"></div>
              </div>
              <p class="text-xs text-gray-400 mt-1">MySQL, Data Modeling, CRUD Operations</p>
            </div>

            <!-- Skill 3 -->
            <div class="skill-item">
              <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-semibold text-gray-200">Responsive Design</span>
                <span class="text-xs text-pink-400 font-bold">92%</span>
              </div>
              <div class="skill-progress-bar">
                <div class="skill-fill" style="--progress: 92%;"></div>
              </div>
              <p class="text-xs text-gray-400 mt-1">Bootstrap, Tailwind CSS, Mobile-First</p>
            </div>

            <!-- Skill 4 -->
            <div class="skill-item">
              <div class="flex justify-between items-center mb-2">
                <span class="text-sm font-semibold text-gray-200">Time Management</span>
                <span class="text-xs text-indigo-400 font-bold">90%</span>
              </div>
              <div class="skill-progress-bar">
                <div class="skill-fill" style="--progress: 90%;"></div>
              </div>
              <p class="text-xs text-gray-400 mt-1">Project Organization, Deadline Management</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>"""

if old_resume in content:
    content = content.replace(old_resume, new_resume)
    print("✓ Replaced resume section with enhanced version")
else:
    print("! Could not find resume section to replace")
    print("! Trying alternative approach...")
    # Try partial match
    if '<section id="resume"' in content:
        print("! Found resume section, but exact match failed")
        print("! Please review manually")

# Write the updated file
with open('index.php', 'w', encoding='utf-8') as f:
    f.write(content)
    
print("\n✅ Resume enhancement complete!")
print("   - Added animated skill progress bars")
print("   - Enhanced card design with hover effects")  
print("   - Improved visual hierarchy and spacing")
print("   - Added decorative floating elements")
print("   - Better typography and color coding")
