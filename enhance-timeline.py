#!/usr/bin/env python3
"""
Further enhance the timeline and improve overall styling
"""

with open('index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Enhance the timeline section header and add better styling
old_timeline_header = """        <!-- Experience Timeline -->
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
    </div>"""

new_timeline_header = """        <!-- Experience Timeline -->
<section id="experience" class="py-20 relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-1/4 left-0 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
    <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-secondary rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
  </div>
  <div class="max-w-4xl mx-auto px-6 relative z-10">
    <div class="text-center mb-16 fade-in-up">
      <h2
        class="text-5xl font-extrabold text-gradient mb-6"
        style="font-family: 'Orbitron', monospace;"
      >
        TIMELINE
      </h2>
      <p class="text-xl text-gray-300">
        A professional journey through web development, project execution, and innovation.
      </p>
    </div>"""

if old_timeline_header in content:
    content = content.replace(old_timeline_header, new_timeline_header)
    print("✓ Enhanced timeline section header")
else:
    print("! Timeline header not found for replacement")

# Close the timeline div wrapper
old_timeline_end = """    </div>\n  </div>\n</section>\n\n\n<!-- Projects Section -->"""
new_timeline_end = """    </div>\n  </div>\n</section>\n\n\n<!-- Projects Section -->"""

# Also update the contact section for consistency
old_contact = '<section id="contact" class="py-20">'
new_contact = '<section id="contact" class="py-20 relative overflow-hidden">'

if old_contact in content:
    content = content.replace(old_contact, new_contact)
    print("✓ Enhanced contact section styling")

# Update contact title to match modern style
old_contact_title = """    <div class="text-center mb-16 fade-in-up">
            <h2
                class="text-4xl font-bold text-gradient mb-6"
                style="font-family: 'Orbitron', monospace;"
            >
                CONTACT ME
            </h2>"""

new_contact_title = """    <div class="text-center mb-16 fade-in-up">
            <h2
                class="text-5xl font-extrabold text-gradient mb-6"
                style="font-family: 'Orbitron', monospace;"
            >
                CONTACT ME
            </h2>"""

if old_contact_title in content:
    content = content.replace(old_contact_title, new_contact_title)
    print("✓ Updated contact title to enhanced style")

# Add decorative background elements to contact section
old_contact_div = "        <div class=\"max-w-4xl mx-auto px-6\">"
new_contact_div = """        <!-- Decorative background -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-1/3 right-0 w-96 h-96 bg-primary/30 rounded-full mix-blend-multiply filter blur-3xl animate-pulse-slow"></div>
      <div class="absolute bottom-1/3 left-0 w-96 h-96 bg-secondary/30 rounded-full mix-blend-multiply filter blur-3xl animate-pulse-slow"></div>
    </div>
    <div class="max-w-4xl mx-auto px-6 relative z-10\">"""

# Find and replace contact container if needed
if """        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-up">""" in content:
    content = content.replace(
        """        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-up">""",
        """        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 fade-in-up">"""
    )
    print("✓ Added relative positioning to contact container")

# Save the updated file
with open('index.php', 'w', encoding='utf-8') as f:
    f.write(content)

print("\n✅ Timeline and Contact sections enhanced!")
print("   - Added modern gradient backgrounds")
print("   - Enhanced typography hierarchy")
print("   - Improved visual consistency")
print("   - Added animated decorative elements")
