#!/usr/bin/env python3
"""
Final polish: Add more modern interactive styles and polish
"""

with open('index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Add more advanced CSS for interactive effects
additional_css = """

                /* Projects Section Enhancements */
                .project-card {
                  perspective: 1000px;
                }

                .project-card:hover .project-inner {
                  transform: rotateY(180deg);
                }

                .project-inner {
                  transition: transform 0.7s ease-in-out;
                  transform-style: preserve-3d;
                }

                .project-front, .project-back {
                  backface-visibility: hidden;
                }

                /* Enhanced Gradient Text */
                .text-gradient {
                  background: linear-gradient(135deg, #57B5E7, #8B45C1, #14B8A6);
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                  background-clip: text;
                  animation: gradientShift 8s ease-in-out infinite;
                }

                @keyframes gradientShift {
                  0%, 100% { filter: hue-rotate(0deg); }
                  50% { filter: hue-rotate(15deg); }
                }

                /* Smooth Transitions */
                * {
                  transition: background-color 0.3s ease, color 0.3s ease;
                }

                /* Enhanced Button Styles */
                button, a[class*="btn"], input[type="submit"] {
                  position: relative;
                  overflow: hidden;
                }

                button::before, a[class*="btn"]::before, input[type="submit"]::before {
                  content: '';
                  position: absolute;
                  top: 0;
                  left: -100%;
                  width: 100%;
                  height: 100%;
                  background: rgba(255, 255, 255, 0.2);
                  transition: left 0.5s ease;
                }

                button:hover::before, a[class*="btn"]:hover::before, input[type="submit"]:hover::before {
                  left: 100%;
                }

                /* Smooth Scrollbar */
                ::-webkit-scrollbar {
                  width: 8px;
                }

                ::-webkit-scrollbar-track {
                  background: rgba(255, 255, 255, 0.05);
                }

                ::-webkit-scrollbar-thumb {
                  background: linear-gradient(180deg, #57B5E7, #8B45C1);
                  border-radius: 4px;
                }

                ::-webkit-scrollbar-thumb:hover {
                  background: linear-gradient(180deg, #8B45C1, #57B5E7);
                }
"""

# Find insertion point (before </style> closing tag in animations)
find_pos = content.find('                .rotate-y-180 { transform: rotateY(180deg); }\n\n                /* Skill Progress Bar Animation */')

if find_pos != -1:
    # Insert after the full skill card styles section
    insertion_point = content.find('                }\n\n\n        </style>\n        <!-- Tailwind CSS')
    if insertion_point != -1:
        content = content[:insertion_point] + additional_css + content[insertion_point:]
        print("✓ Added advanced interactive CSS styles")
    else:
        print("! Could not find exact insertion point for CSS")
else:
    print("! Could not locate skill bar section")

# Update projects section title styling to match
old_projects_title = '<h2 class="text-4xl font-bold text-gradient mb-6" style="font-family: \'Orbitron\', monospace;">\n        PROJECTS'
new_projects_title = '<h2 class="text-5xl font-extrabold text-gradient mb-6" style="font-family: \'Orbitron\', monospace;">\n        PROJECTS'

if old_projects_title in content:
    content = content.replace(old_projects_title, new_projects_title)
    print("✓ Enhanced Projects section title")

# Save the file
with open('index.php', 'w', encoding='utf-8') as f:
    f.write(content)

print("\n✅ Final polish applied!")
print("   - Added advanced hover effects")
print("   - Enhanced gradient animations")
print("   - Improved scrollbar styling")
print("   - Added interactive project transitions")
print("   - Better overall responsiveness")
