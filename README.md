# SAVE-Ghana NGO Website

A beautiful, professional, and responsive website for SAVE-Ghana (Sustainable Aid through Voluntary Establishment), a Ghanaian NGO working to empower communities across Northern Ghana.

## Features

✨ **Modern Design**: Clean, professional, and visually appealing interface
📱 **Fully Responsive**: Works perfectly on desktop, tablet, and mobile devices
🎨 **Custom Styling**: Beautiful color scheme reflecting NGO values
📝 **Blog System**: Easy-to-use blog listing and reusable detail templates
📧 **Contact Form**: PHP-powered contact form with email functionality
🚀 **Performance**: Optimized for fast loading and smooth animations
♿ **Accessible**: Semantic HTML and ARIA labels for better accessibility

## Website Structure

```
/
├── index.html              # Homepage
├── about.html              # About Us page
├── projects.html           # Projects showcase
├── blog.html              # Blog listing page
├── blog-detail-template.html # Reusable blog post template
├── contact.html           # Contact page with form
├── css/
│   ├── styles.css         # Main stylesheet
│   ├── about.css          # About page styles
│   ├── projects.css       # Projects page styles
│   ├── blog.css           # Blog listing styles
│   ├── blog-detail.css    # Blog detail styles
│   └── contact.css        # Contact page styles
├── js/
│   └── script.js          # JavaScript functionality
├── php/
│   └── contact.php        # Contact form handler
└── images/                # Image assets folder
```

## Quick Start

### 1. Setup

1. Download all files to your web server
2. Ensure your server supports PHP (version 5.6 or higher)
3. Make sure the `php` directory has appropriate permissions (755)

### 2. Configure Email

Edit `php/contact.php` and update these lines:

```php
define('RECIPIENT_EMAIL', 'your-email@save-ghana.org');
define('SENDER_EMAIL', 'noreply@your-domain.org');
```

### 3. Add Images

Place your images in the `images/` folder. Required images:

**Homepage:**
- `hero-bg.jpg` - Hero section background
- `about-preview.jpg` - About section image
- `project-fulbe.jpg`, `project-education.jpg`, `project-women.jpg` - Project cards

**About Page:**
- `page-header-bg.jpg` - Page header background
- `our-story.jpg` - Our story section
- `governance.jpg` - Governance section

**Projects Page:**
- `fulbe-project.jpg` - Featured project
- `education-project.jpg`, `women-empowerment.jpg`, etc. - Other projects

**Blog Pages:**
- `blog-fulbe-success.jpg` - Featured blog post
- `blog-women-empowerment.jpg`, `blog-education.jpg`, etc. - Blog thumbnails
- `blog-hero-placeholder.jpg` - Blog detail hero image

**Contact Page:**
- Images are optional for contact page

### 4. Testing

1. Upload files to your web server
2. Navigate to your domain
3. Test the contact form to ensure emails are being sent
4. Check responsive design on different devices

## Creating New Blog Posts

The website includes a reusable blog post template (`blog-detail-template.html`) that makes it easy to create new blog posts.

### Steps:

1. **Duplicate the template file**
   ```
   cp blog-detail-template.html blog-detail-your-post-name.html
   ```

2. **Update the content:**
   - Change the page title in `<head>`
   - Replace the hero image
   - Update the category badge
   - Change the blog title (h1)
   - Update meta information (date, author, read time)
   - Replace all paragraphs with your content
   - Add your images (place in `/images` folder)

3. **Add to blog listing:**
   - Open `blog.html`
   - Add a new blog card with:
     - Thumbnail image
     - Title
     - Excerpt
     - Link to your new blog detail page

## Customization

### Colors

Edit `css/styles.css` to change the color scheme:

```css
:root {
    --primary-color: #2E7D32;      /* Main green */
    --primary-dark: #1B5E20;       /* Darker green */
    --secondary-color: #FF6F00;    /* Orange accent */
    /* ... */
}
```

### Fonts

The website uses Google Fonts (Poppins). To change fonts, update the link in HTML files and CSS:

```html
<link href="https://fonts.googleapis.com/css2?family=Your+Font&display=swap" rel="stylesheet">
```

### Navigation

Edit the navigation menu in each HTML file to add/remove pages:

```html
<ul class="nav-menu">
    <li><a href="index.html">Home</a></li>
    <li><a href="your-new-page.html">New Page</a></li>
    <!-- ... -->
</ul>
```

## Contact Form Setup

The contact form uses PHP to send emails. Make sure:

1. Your server has PHP mail() function enabled
2. You've configured the email addresses in `php/contact.php`
3. Your server allows outgoing mail (check with your hosting provider)

### Alternative: Use a third-party service

If PHP mail() doesn't work, consider:
- **FormSpree**: https://formspree.io
- **Netlify Forms**: https://www.netlify.com/products/forms
- **SendGrid**: https://sendgrid.com

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Tips

1. **Optimize Images**: Compress images before uploading (use tools like TinyPNG)
2. **Enable Caching**: Configure your server to cache static assets
3. **Use CDN**: Consider using a CDN for faster global delivery
4. **Minify CSS/JS**: Use tools to minify CSS and JavaScript for production

## Maintenance

### Regular Updates

- Update copyright year in footer
- Add new blog posts regularly
- Update project information
- Review and update contact information
- Keep images current and relevant

### Content Management

For easier content management, consider:
- Setting up a simple CMS like WordPress or Strapi
- Using a static site generator like Jekyll or Hugo
- Implementing a headless CMS solution

## Security

1. **Keep PHP Updated**: Ensure your server runs the latest PHP version
2. **Validate Input**: The contact form includes basic validation
3. **Use HTTPS**: Always use SSL/TLS certificates (free via Let's Encrypt)
4. **Regular Backups**: Backup your website files and database regularly

## Support

For issues or questions:
- Email: info@save-ghana.org
- Check documentation in this README
- Review comments in the code files

## Credits

- **Design & Development**: Custom built for SAVE-Ghana
- **Fonts**: Google Fonts (Poppins)
- **Icons**: Emoji and custom SVG icons

## License

This website is proprietary to SAVE-Ghana. All rights reserved.

---

**SAVE-Ghana** - Sustainable Aid through Voluntary Establishment
Empowering communities in Northern Ghana since 2004
