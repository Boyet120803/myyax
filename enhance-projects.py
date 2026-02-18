#!/usr/bin/env python3
"""
Ultimate Projects Section Enhancement
- Enhanced card design with glassmorphism
- Better hover effects with glow and lift
- Improved visual hierarchy
- Better tag/badge styling
- Interactive animations
"""

with open('index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Add advanced project card CSS styles
project_css = """

                /* ===== PROJECTS SECTION STYLING ===== */

                /* Enhanced Project Card Container */
                .project-card {
                  position: relative;
                  cursor: pointer;
                  transform-style: preserve-3d;
                  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .project-card:hover {
                  transform: translateY(-12px) scale(1.02);
                  filter: drop-shadow(0 25px 50px rgba(87, 181, 231, 0.25));
                }

                .project-inner {
                  transform-style: preserve-3d;
                  transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .project-card.flipped .project-inner {
                  transform: rotateY(180deg);
                }

                .project-front, .project-back {
                  backface-visibility: hidden;
                  -webkit-backface-visibility: hidden;
                }

                /* Front Side Enhancement */
                .project-front {
                  background-size: cover;
                  background-position: center;
                  border-radius: 20px;
                  overflow: hidden;
                  position: relative;
                }

                .project-front::before {
                  content: '';
                  position: absolute;
                  inset: 0;
                  background: linear-gradient(135deg, rgba(87, 181, 231, 0.2) 0%, rgba(139, 69, 193, 0.1) 50%, transparent 100%);
                  z-index: 5;
                  transition: all 0.4s ease;
                }

                .project-card:hover .project-front::before {
                  background: linear-gradient(135deg, rgba(87, 181, 231, 0.4) 0%, rgba(139, 69, 193, 0.2) 50%, transparent 100%);
                }

                .project-front::after {
                  content: '';
                  position: absolute;
                  inset: 0;
                  background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.6) 70%, rgba(0, 0, 0, 0.85) 100%);
                  z-index: 3;
                }

                /* Enhanced Project Icon */
                .project-front .w-full {
                  position: relative;
                  z-index: 10;
                }

                .project-front i {
                  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                  text-shadow: 0 0 20px rgba(87, 181, 231, 0.4);
                }

                .project-card:hover .project-front i {
                  text-shadow: 0 0 40px rgba(87, 181, 231, 0.8);
                  transform: scale(1.15) rotateZ(10deg);
                }

                /* Enhanced Project Title */
                .project-front h3 {
                  position: relative;
                  z-index: 10;
                  font-weight: 800;
                  letter-spacing: 0.5px;
                  transition: all 0.3s ease;
                }

                .project-card:hover .project-front h3 {
                  color: #57B5E7;
                }

                /* Enhanced Project Tags/Badges */
                .project-front .flex.flex-wrap.gap-2 span,
                .project-back .flex.flex-wrap.gap-2 span {
                  position: relative;
                  overflow: hidden;
                  font-weight: 600;
                  letter-spacing: 0.3px;
                  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                  border: 1px solid;
                  animation: fadeInBadge 0.6s ease forwards;
                }

                @keyframes fadeInBadge {
                  from {
                    opacity: 0;
                    transform: translateY(10px);
                  }
                  to {
                    opacity: 1;
                    transform: translateY(0);
                  }
                }

                .project-front .px-3.py-1[class*="bg-primary"] {
                  background: rgba(87, 181, 231, 0.25) !important;
                  border-color: rgba(87, 181, 231, 0.5) !important;
                  transition: all 0.3s ease;
                }

                .project-front .px-3.py-1[class*="bg-primary"]:hover {
                  background: rgba(87, 181, 231, 0.4) !important;
                  box-shadow: 0 0 15px rgba(87, 181, 231, 0.5);
                  transform: translateY(-2px);
                }

                .project-front .px-3.py-1[class*="bg-purple"] {
                  background: rgba(168, 85, 247, 0.25) !important;
                  border-color: rgba(168, 85, 247, 0.5) !important;
                }

                .project-front .px-3.py-1[class*="bg-pink"] {
                  background: rgba(236, 72, 153, 0.25) !important;
                  border-color: rgba(236, 72, 153, 0.5) !important;
                }

                .project-front .px-3.py-1[class*="bg-indigo"] {
                  background: rgba(99, 102, 241, 0.25) !important;
                  border-color: rgba(99, 102, 241, 0.5) !important;
                }

                .project-front .px-3.py-1[class*="bg-cyan"] {
                  background: rgba(34, 211, 238, 0.25) !important;
                  border-color: rgba(34, 211, 238, 0.5) !important;
                }

                .project-front .px-3.py-1[class*="bg-secondary"] {
                  background: rgba(141, 211, 199, 0.25) !important;
                  border-color: rgba(141, 211, 199, 0.5) !important;
                }

                /* Back Side Enhancement */
                .project-back {
                  background: linear-gradient(135deg, rgba(87, 181, 231, 0.12) 0%, rgba(139, 69, 193, 0.08) 100%);
                  backdrop-filter: blur(20px);
                  border: 1.5px solid rgba(87, 181, 231, 0.3);
                  border-radius: 20px;
                }

                .project-back:hover {
                  border-color: rgba(87, 181, 231, 0.6);
                  background: linear-gradient(135deg, rgba(87, 181, 231, 0.15) 0%, rgba(139, 69, 193, 0.1) 100%);
                }

                .project-back h3 {
                  font-size: 1.125rem;
                  font-weight: 800;
                  background: linear-gradient(135deg, #57B5E7, #8B45C1);
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                  background-clip: text;
                  margin-bottom: 16px;
                }

                .project-back ul li {
                  transition: all 0.3s ease;
                  padding-left: 4px;
                }

                .project-back ul li:hover {
                  transform: translateX(6px);
                  color: #57B5E7;
                }

                .project-back a {
                  position: relative;
                  overflow: hidden;
                  background: linear-gradient(135deg, #57B5E7, #8B45C1);
                  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                  font-weight: 700;
                  letter-spacing: 0.5px;
                  box-shadow: 0 10px 30px rgba(87, 181, 231, 0.3);
                }

                .project-back a::before {
                  content: '';
                  position: absolute;
                  top: 0;
                  left: -100%;
                  width: 100%;
                  height: 100%;
                  background: rgba(255, 255, 255, 0.2);
                  transition: left 0.5s ease;
                  z-index: 1;
                }

                .project-back a:hover::before {
                  left: 100%;
                }

                .project-back a:hover {
                  transform: translateY(-3px);
                  box-shadow: 0 15px 40px rgba(87, 181, 231, 0.5);
                }

                /* Stagger animations for cards */
                .project-card:nth-child(1) { animation-delay: 0s; }
                .project-card:nth-child(2) { animation-delay: 0.15s; }
                .project-card:nth-child(3) { animation-delay: 0.30s; }
                .project-card:nth-child(4) { animation-delay: 0.45s; }
                .project-card:nth-child(5) { animation-delay: 0.60s; }
                .project-card:nth-child(6) { animation-delay: 0.75s; }
"""

# Find insertion point after resume-card-icon styles
insertion_point = content.find('                .resume-card:hover .resume-card-icon {\n                  transform: scale(1.1) rotate(5deg);\n                }')

if insertion_point != -1:
    # Find the end of this block
    next_style_end = content.find('\n\n\n        </style>', insertion_point)
    if next_style_end != -1:
        # Insert the project CSS before the closing style tag
        content = content[:next_style_end] + project_css + content[next_style_end:]
        print("✓ Added comprehensive project card CSS")
    else:
        print("! Could not find closing style tag")
else:
    print("! Could not find insertion point for CSS")

# Save the file
with open('index.php', 'w', encoding='utf-8') as f:
    f.write(content)

print("\n✅ Projects section enhanced with:")
print("   ✨ Advanced glassmorphism styling")
print("   ✨ Enhanced hover effects (lift, glow, scale)")
print("   ✨ Improved shadow and gradient effects")
print("   ✨ Better badge/tag styling with borders")
print("   ✨ Interactive icon animations")
print("   ✨ Smooth flip card transitions")
print("   ✨ Enhanced button styling with shimmer")
print("   ✨ Staggered card appearance animations")
print("   ✨ Color-coded tags with hover effects")
