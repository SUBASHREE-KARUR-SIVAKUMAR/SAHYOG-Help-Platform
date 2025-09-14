# SAHYOG - Together We Empower 🤝

SAHYOG is a dynamic web platform designed to bridge the gap between individuals and organizations seeking help, and those willing to provide support. It fosters transparency, accessibility, and community empowerment by connecting needs with resources efficiently.

## ✨ Project Overview

The platform facilitates various forms of assistance including donations (money, goods, services, volunteer time), addresses specific needs, and highlights critical causes like girl child welfare. It aims to build stronger, more interconnected communities through direct and verified support.

## 🚀 Key Features

*   **Need-Based Request System:** Allows individuals to post specific needs (medical, education, food, housing, emergency, etc.), ensuring donations directly address articulated requirements.
*   **Donator & Helpee Registration:** Dedicated forms for users to register as providers of help or seekers of assistance.
*   **Browse Listings:** Separate pages to view current help requests and available donation offers, promoting transparency.
*   **Emergency Mode:** A prioritized system for urgent help requests, especially during critical situations.
*   **Girl Child Welfare Initiative:** A dedicated section featuring success stories, awareness campaigns, and a specialized form to request help for girl children in need (education, protection, child marriage prevention).
*   **Interactive Map:** Utilizes Leaflet.js to display help centers (NGOs, Food Banks, Old Age Homes) across India, with filtering capabilities.
*   **Community Reviews:** A robust review system allowing users to share their experiences, including ratings and media uploads, fostering trust and accountability.
*   **User Recognition System:** (Conceptual) A points and credits system to motivate donors and volunteers.
*   **Responsive Design:** Ensures a seamless user experience across various devices.

## 🛠️ Technologies Used

*   **Backend:** PHP (for server-side logic and database interaction)
*   **Database:** MySQL (using `mysqli` extension)
*   **Frontend:** HTML, CSS, JavaScript
*   **Mapping:** Leaflet.js
*   **Icons:** Font Awesome
*   **Fonts:** Google Fonts (Poppins, Montserrat)
*   **Version Control:** Git, GitHub

## 📂 Project Structure

The project is structured with modular PHP files for different functionalities and includes common header/footer components for consistent navigation and styling.

SAHYOG/
├── connect.php                   # Database connection configuration
├── common_header.php             # Shared header including navigation and general styles
├── common_footer.php             # Shared footer with contact info and copyright
├── index.php                     # Homepage with hero section, map, and core features
├── register_donator.php          # Form for donors to register offers of help
├── submit_donator.php            # PHP script to process donator registrations
├── browse_donators.php           # Page to view registered donators
├── register_helpee.php           # Form for helpees to post their needs
├── submit_helpee.php             # PHP script to process helpee requests
├── browse_needs.php              # Page to view current help requests
├── girl_child_page.php           # Dedicated page for girl child welfare initiative
├── submit_girl_child_request.php # PHP script to process girl child help requests
├── reviews.php                   # Community reviews page with submission modal
├── submit_review.php             # PHP script to process review submissions
├── uploads/                      # Directory for uploaded review media (photos, videos, receipts)
├── sahyog_database_dump.sql      # Database SQL dump for easy setup
├── style.css                     # (If used for global styles, not inline)
└── README.md                     # Project overview and setup instructions


## 🗄️ Database Setup (Using Provided SQL Dump)

The project requires a MySQL database. We have provided an SQL dump for easy setup.

1.  **Create a database:** On your MySQL server (e.g., using phpMyAdmin, MySQL Workbench, or the command line), create a new empty database named `hackathon_db`.
2.  **Import the SQL dump:** Import the `sahyog_database_dump.sql` file (which you should place in your project root) into the newly created `hackathon_db` database. This will create all necessary tables (`donator`, `helpee`, `girl_child_requests`, `map`, `reviews`) and populate them with initial data.
    *   **Using phpMyAdmin:** Select `hackathon_db`, go to the "Import" tab, choose the `sahyog_database_dump.sql` file, and click "Go".
    *   **Using MySQL command line:**
        ```bash
        mysql -u your_username -p hackathon_db < sahyog_database_dump.sql
        ```
        (Replace `your_username` with your MySQL username; you'll be prompted for the password).
3.  **Update `connect.php`:** Ensure the `$host`, `$username`, `$password`, and `$database` variables in your `connect.php` file match your MySQL server configuration. For local development, `localhost` as host, `root` as username, and an empty password (`""`) are common.

## ⚙️ Local Setup and Run

To set up and run this project locally:

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/YOUR_USERNAME/SAHYOG-Help-Platform.git
    cd SAHYOG-Help-Platform
    ```
    (Replace `YOUR_USERNAME` and `SAHYOG-Help-Platform` with your actual GitHub details).
2.  **Set up a local web server:** You will need a web server environment like Apache or Nginx with PHP and MySQL installed (e.g., using XAMPP, MAMP, or Docker).
3.  **Place project files:** Move all the project files (including `index.php`, `about.php`, `connect.php`, etc.) into your web server's document root (e.g., `htdocs` for Apache).
4.  **Configure `connect.php`:** Update the database connection details as described in the "Database Setup" section.
5.  **Create `uploads/` directory:** Create a folder named `uploads` in your project root for review media uploads and ensure it has write permissions for your web server.
6.  **Access the application:** Open your web browser and navigate to the local URL where your web server is hosting the project (e.g., `http://localhost/SAHYOG-Help-Platform/` or `http://localhost/index.php`).

## 🙏 Credits

*   Developed by Subashree.
*   Utilizes various open-source libraries including Font Awesome and Leaflet.js.
*   Images sourced from Unsplash.

---

**© 2025 SAHYOG - Together We Empower. All rights reserved.**
