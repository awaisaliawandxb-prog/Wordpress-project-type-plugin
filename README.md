# 📁 Projects Post Type Plugin

**Version:** 1.0  
**Author:** Awais Awan 

**Description:** A WordPress plugin that registers a custom post type named **"Project"** with REST API support.  
Use it to create and manage projects, and fetch them in external applications (like Laravel) via the WordPress REST API.

---

## 🚀 Features

- Registers a custom post type **“Project”**
- Supports **Title**, **Excerpt**, **Content**, and **Featured Image**
- **REST API enabled** (`/wp-json/wp/v2/projects`)
- Displays projects in the WordPress admin menu
- Includes optional **sample projects** (auto-created once on activation)
- Easy to integrate with external systems such as **Laravel**, **React**, or **Vue**

---

## ⚙️ Installation

1. **Upload the plugin:**
   - Copy the folder `projects-post-type` into your WordPress directory:
     ```
     wp-content/plugins/projects-post-type/
     ```

2. **Activate the plugin:**
   - Go to your WordPress Admin → **Plugins**
   - Find **Projects Post Type** → Click **Activate**

3. **(Optional)** Sample Projects:
   - The plugin automatically inserts 2 demo projects when first activated.
   - You can remove or edit them from the **Projects** menu in your dashboard.

---

## 🧱 Custom Post Type Details

| Setting | Value |
|----------|-------|
| Post Type Key | `project` |
| REST API Base | `/wp-json/wp/v2/projects` |
| Menu Icon | Portfolio (`dashicons-portfolio`) |
| Supports | Title, Editor, Excerpt, Featured Image |
| Archive Page | `/projects` |

---

## 🧩 REST API Example

Fetch all projects in JSON format:

```bash
GET https://awaisawan.tech/projects/wp-json/wp/v2/projects?_embed
