# Righteous Projects Plugin

A custom WordPress plugin that displays and filters projects using AJAX and ACF fields.  
Built as part of my developer portfolio to demonstrate plugin architecture, dynamic queries, and clean UI integration.

---

# Features
- Registers a custom post type project
- Uses ACF fields for:
  - Tech Used
  - Project Links (GitHub / Live Demo)
- AJAX-based category filtering
- Responsive and clean layout
- Easily customizable via shortcode

---

# Technologies Used
- PHP  
- WordPress  
- Advanced Custom Fields (ACF)  
- JavaScript (AJAX / jQuery)  
- HTML5 / CSS3

---

# Folder Structure
- my-tasks-plugin/
-my-projects.php  # Main plugin file
assets/
 style.css #plugin styles
 ajax-filter.js #ajax filter

---

# 📸 Screenshots

### 1. Plugin Dashboard
Shows the plugin inside the WordPress admin area.  
![Dashboard](assets/screenshot-dashboard.png)

### 2. Projects Page
Displays added projects with featured images and ACF fields.  
![Projects Page](assets/Screenshot-projects.png)

### 3. Frontend Display
Shows how the projects appear using the shortcode `[righteous_projects]`.  
![Frontend View](assets/Screenshot-backend.png)

# Installation
1. Download or clone this repository.  
2. Copy the righteous-projects folder into your /wp-content/plugins/ directory.  
3. Activate Righteous Projects Plugin from your WordPress dashboard.  
4. Add projects via Dashboard → Projects.  
5. Use the shortcode [righteous_projects] on any page.

---

# Links
- [GitHub Repository](https://github.com/francisrighteous539/righteous-projects-plugin)
- Live Demo: *Coming soon*

---

# Author
Francis Righteous  
WordPress and Developer  
[GitHub Profile](https://github.com/francisrighteous539)
