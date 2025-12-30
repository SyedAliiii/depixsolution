# Depix Solution CMS - Admin Manual

Welcome to the Content Management System (CMS) for Depix Solution. This guide explains how to manage your website's content.

## Accessing the Admin Panel

1.  **Login URL**: Navigate to `/admin/login` (e.g., `http://localhost/depixsolution/admin/login`).
2.  **Credentials**: Use the email and password set up in your database (default admin created via seeder).

---

## Dashboard

The dashboard provides a quick overview of your site's content:
*   Total number of Sliders
*   Total number of Portfolio items
*   Total number of Blog Posts

---

## Managing Content

### 1. Sliders (Homepage)
**Location**: `Sidebar > Sliders`

*   **View All**: IDs, Images, Titles, and Order.
*   **Add New**: Click "Create New Slider".
    *   **Title/Subtitle**: Text displayed on the slider.
    *   **Button Text/Link**: Call to action button.
    *   **Image**: Upload a background image.
    *   **Order**: Determines the sequence of sliders (1 shows first).
*   **Edit/Delete**: Use the Action buttons in the list.

### 2. Portfolios (Projects)
**Location**: `Sidebar > Portfolios`

*   **View All**: List of all projects with their main image and category.
*   **Add New**: Click "Create New Portfolio".
    *   **Title**: Project name.
    *   **Category**: Project category (e.g., Design, Development). This is used for filtering on the frontend.
    *   **Description**: Details about the project.
    *   **Client/Date/Website**: Optional metadata.
    *   **Main Image**: The thumbnail shown in the grid.
    *   **Gallery**: Upload multiple images for the single project detail page.
*   **Edit/Delete**: Use the Action buttons.

### 3. Blog Posts
**Location**: `Sidebar > Posts`

*   **View All**: List of blog articles.
*   **Add New**: "Create New Post".
    *   **Title**: Article headline.
    *   **Category**: Article category.
    *   **Content**: Full text of the article (supports rich text if enabled, otherwise HTML/Text).
    *   **Image**: Featured image for the list and details page.
    *   **Status**: `Draft` (hidden) or `Published` (visible).
*   **Edit/Delete**: Use the Action buttons.

### 4. Site Settings
**Location**: `Sidebar > Settings`

Manage global website information here. Values updated here trigger updates across the Header, Footer, and Contact pages.

*   **General**: Site Name, Logo.
*   **Social Links**: URLs for Twitter, Facebook, Instagram, etc. (Leave empty to hide the icon).
*   **Contact Info**: Phone number, Email address, Physical address.
*   **SEO**: Default Meta keywords/descriptions (if implemented).

---

## Technical Notes

*   **Images**: Stored in `public/storage`.
*   **Users**: Managed via database. Currently, only admins can log in.
*   **Troubleshooting**:
    *   If you see "Route not defined" errors, ensure you are logged in as admin.
    *   If images don't load, ensure the `php artisan storage:link` command has been run.
