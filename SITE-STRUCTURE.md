# SAVE-Ghana Website Structure

## 📁 Complete File Structure

```
SAVE-Ghana-Website/
│
├── 📄 index.html                          ← HOMEPAGE
│   ├── Hero Section (full-screen)
│   ├── Impact Statistics (4 cards)
│   ├── About Preview
│   ├── Mission & Vision
│   ├── Featured Projects (3 cards)
│   ├── Call to Action
│   └── Footer
│
├── 📄 about.html                          ← ABOUT US PAGE
│   ├── Page Header
│   ├── Our Story
│   ├── Vision & Mission Cards
│   ├── Focus Areas (6 cards)
│   ├── Organizational Capacity
│   ├── Human Resources
│   ├── Governance
│   ├── Development Partners
│   └── Call to Action
│
├── 📄 projects.html                       ← PROJECTS PAGE
│   ├── Page Header
│   ├── Featured Project (Fulbe Inclusion)
│   │   ├── Challenge
│   │   ├── Approach
│   │   ├── Impact Statistics (4 cards)
│   │   └── Testimonials
│   ├── Other Projects Grid (6 cards)
│   ├── Implementation Approach (4 steps)
│   └── Call to Action
│
├── 📄 blog.html                           ← BLOG LISTING
│   ├── Page Header
│   ├── Featured Blog Post (large)
│   ├── Blog Grid (6+ posts)
│   ├── Pagination
│   ├── Newsletter Signup
│   └── Footer
│
├── 📄 blog-detail-template.html           ← BLOG TEMPLATE (Copy This!)
│   ├── Hero Image
│   ├── Breadcrumb Navigation
│   ├── Article Header
│   │   ├── Category Badge
│   │   ├── Title
│   │   ├── Meta Info (date, author, time)
│   │   └── Share Buttons
│   ├── Article Content
│   │   ├── Lead Paragraph
│   │   ├── Sections with H2 headings
│   │   ├── Images with captions
│   │   ├── Blockquotes
│   │   └── Lists
│   ├── Tags
│   ├── Author Bio
│   ├── Related Posts (3 cards)
│   └── Call to Action
│
├── 📄 blog-detail-fulbe-inclusion.html    ← EXAMPLE BLOG POST
│   └── (Same structure as template, filled with real content)
│
├── 📄 contact.html                        ← CONTACT PAGE
│   ├── Page Header
│   ├── Two Column Layout:
│   │   ├── Left: Contact Information
│   │   │   ├── Office Details
│   │   │   ├── Office Hours
│   │   │   └── Social Links
│   │   └── Right: Contact Form
│   │       ├── Name (required)
│   │       ├── Email (required)
│   │       ├── Phone
│   │       ├── Subject dropdown (required)
│   │       └── Message (required)
│   ├── Map Section (placeholder)
│   └── Call to Action
│
├── 📁 css/
│   ├── styles.css                         ← MAIN STYLES (used on all pages)
│   │   ├── Reset & Base
│   │   ├── Buttons
│   │   ├── Navigation
│   │   ├── Hero Section
│   │   ├── Stats
│   │   ├── Sections
│   │   ├── Projects
│   │   ├── Call to Action
│   │   ├── Footer
│   │   └── Responsive Media Queries
│   │
│   ├── about.css                          ← About page specific
│   ├── projects.css                       ← Projects page specific
│   ├── blog.css                          ← Blog listing specific
│   ├── blog-detail.css                   ← Blog detail specific
│   └── contact.css                       ← Contact page specific
│
├── 📁 js/
│   └── script.js                         ← ALL JAVASCRIPT
│       ├── Mobile Menu Toggle
│       ├── Navbar Scroll Effect
│       ├── Smooth Scrolling
│       ├── Scroll Animations
│       ├── Counter Animations
│       ├── Form Validation & Submission
│       ├── Back to Top Button
│       └── Lazy Loading
│
├── 📁 php/
│   └── contact.php                       ← EMAIL HANDLER
│       ├── Form Validation
│       ├── Email Sending
│       ├── Auto-reply Function
│       └── JSON Response
│
├── 📁 images/                            ← YOUR IMAGES GO HERE
│   └── README-IMAGES.md                  ← Image requirements guide
│
├── 📄 README.md                          ← FULL DOCUMENTATION
└── 📄 QUICK-START.md                     ← THIS GUIDE
```

## 🎯 Page Navigation Flow

```
                         HOMEPAGE (index.html)
                               │
        ┌──────────────────────┼──────────────────────┐
        │                      │                      │
    ABOUT US              PROJECTS                 BLOG
  (about.html)         (projects.html)          (blog.html)
        │                      │                      │
        │                      │                      ├─→ Blog Post 1
        │                      │                      ├─→ Blog Post 2
        │                      │                      └─→ Blog Post 3
        │                      │
        └──────────────────────┴──────────────────────┐
                               │
                          CONTACT
                       (contact.html)
```

## 🎨 Color Scheme

```
Primary Green:    #2E7D32  ████  Main brand color
Dark Green:       #1B5E20  ████  Buttons, headers
Light Green:      #4CAF50  ████  Accents, hover states
Orange:           #FF6F00  ████  Secondary, badges
Dark Text:        #212121  ████  Main text
Light Text:       #757575  ████  Subtitles, meta
Light Background: #F5F5F5  ████  Section backgrounds
```

## 📱 Responsive Breakpoints

```
Mobile:     0px  ─────→  640px   (Single column)
Tablet:   640px  ─────→  968px   (2 columns)
Desktop:  968px  ─────→ 1200px+  (3+ columns)
```

## 🔄 Component Reusability

### Reusable Components in styles.css:
- ✅ `.btn` classes (primary, secondary, outline, white)
- ✅ `.section-title` and `.section-subtitle`
- ✅ `.card` variations (stat-card, project-card, blog-card)
- ✅ `.cta` section (used on every page)
- ✅ `.footer` (identical on all pages)
- ✅ Navigation bar (responsive, same everywhere)

### How to Use:
Copy the HTML structure from any page and paste into your new page!

## 📧 Contact Form Workflow

```
User fills form
     ↓
JavaScript validation
     ↓
Submit to contact.php
     ↓
PHP validates & sanitizes
     ↓
Send email to SAVE-Ghana ────→ You receive inquiry
     ↓
Send auto-reply to user ─────→ User gets confirmation
     ↓
Return JSON response
     ↓
Show success/error message
```

## 🎯 Key Features by Page

### Homepage
- ✨ Full-screen hero with gradient overlay
- 📊 Animated statistics counters
- 🎴 Featured project cards
- 💚 Mission/Vision cards with gradients

### About Page
- 🏢 Organizational capacity showcase
- 👥 Team information
- 🤝 Partners grid
- 📈 Visual focus areas

### Projects Page
- 🌟 Featured project with testimonials
- 📉 Impact statistics
- 🗂 Project grid with categories
- 📝 Implementation approach

### Blog Pages
- 📰 Featured post with large image
- 🔍 Easy-to-scan blog cards
- 📝 Rich content formatting
- 👤 Author bio sections

### Contact Page
- 📍 Contact information cards
- 📧 Professional form
- 🕐 Office hours
- 🔗 Social media links

## 🚀 Quick Customization Guide

### Change Logo/Brand:
Edit `.logo-text` in all HTML files and navigation CSS

### Update Colors:
Edit `:root` variables in `css/styles.css`

### Add New Page:
1. Copy an existing HTML file
2. Update content
3. Add navigation link
4. Test responsiveness

### Modify Footer:
Footer is identical across all pages - edit once, copy to all

### Change Fonts:
Update Google Fonts link and font-family in CSS

## 📝 Content Areas to Customize

### Priority 1 (Before Launch):
- [ ] Add real images
- [ ] Update email addresses in contact.php
- [ ] Review all text content
- [ ] Test contact form
- [ ] Add phone numbers

### Priority 2 (Soon After):
- [ ] Create blog posts
- [ ] Add team photos
- [ ] Update project details
- [ ] Add more testimonials
- [ ] Optimize images

### Priority 3 (Ongoing):
- [ ] Regular blog updates
- [ ] Add new projects
- [ ] Update statistics
- [ ] Refresh images
- [ ] Add new pages

## 🎨 Design Philosophy

This website follows:
- **Clean**: Minimal clutter, lots of white space
- **Professional**: Business-appropriate styling
- **Warm**: Green colors representing growth
- **Accessible**: High contrast, readable fonts
- **Modern**: Contemporary design trends
- **Trustworthy**: Professional photography emphasis

## 💡 Best Practices Implemented

- ✅ Semantic HTML5
- ✅ Mobile-first responsive design
- ✅ Fast loading (optimized code)
- ✅ SEO-friendly structure
- ✅ Accessible (ARIA labels)
- ✅ Cross-browser compatible
- ✅ Form validation
- ✅ Security (input sanitization)
- ✅ Professional animations
- ✅ Consistent branding

---

**Your website structure at a glance!**
All files work together to create a cohesive, professional experience.
