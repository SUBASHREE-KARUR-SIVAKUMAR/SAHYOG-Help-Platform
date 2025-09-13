<?php 
$page_title = "About Us - SAHYOG - Together We Empower";
include 'common_header.php'; 
?>

<style>
    /* General styles for the main content area */
    main.container {
        padding-top: 20px; /* Adjust if needed to clear fixed header */
    }

    .page-header-section {
        background: linear-gradient(rgba(11, 60, 120, 0.8), rgba(11, 60, 120, 0.8)), url('https://images.unsplash.com/photo-1485546246426-74dc88dec4d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 20px;
        text-align: center;
        border-radius: 0 0 20px 20px;
        margin-bottom: 40px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    
    .page-header-section h1 {
        font-size: 3rem;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }
    
    .page-header-section p {
        font-size: 1.3rem;
        max-width: 800px;
        margin: 0 auto;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .mission-section, .features-section, .impact-section, .contact-section {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 40px;
    }
    
    .section-title {
        text-align: center;
        color: #0b3c78;
        margin-bottom: 30px;
        font-size: 2rem;
    }
    
    .mission-content, .impact-content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 30px;
    }
    
    .mission-text, .impact-text {
        flex: 1;
        min-width: 300px;
    }
    
    .mission-image, .impact-image {
        flex: 1;
        min-width: 300px;
        text-align: center;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        background-color: #f0f4ff;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .mission-image img, .impact-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    
    .stats-section {
        background: linear-gradient(135deg, #0b3c78, #123a73);
        color: white;
        padding: 50px 20px;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 40px;
    }
    
    .stats-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-top: 30px;
    }
    
    .stat-box {
        background-color: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 25px;
        border-radius: 10px;
        width: 200px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }
    
    .feature-card {
        background-color: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
    }
    
    .feature-card h3 {
        color: #0b3c78;
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    
    .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: #0b3c78;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-top: 30px;
    }
    
    .contact-card {
        background: linear-gradient(135deg, #0b3c78, #123a73);
        color: white;
        padding: 25px;
        border-radius: 10px;
        text-align: center;
    }
    
    .contact-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: #fbbf24; /* Consistent highlight color */
    }
    
    .contact-card h3 {
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    
    @media (max-width: 768px) {
        .page-header-section h1 {
            font-size: 2.2rem;
        }
        .mission-content, .impact-content {
            flex-direction: column;
        }
        .stat-box {
            width: 100%;
            max-width: 250px;
        }
    }
</style>

<main class="container">
    <div class="page-header-section">
        <h1>About SAHYOG</h1>
        <p>Bridging the gap between those who need help and those who want to help, creating stronger, more transparent communities.</p>
    </div>
    
    <section class="mission-section">
        <h2 class="section-title">Our Mission</h2>
        <div class="mission-content">
            <div class="mission-text">
                <p>SAHYOG aims to enhance transparency and accessibility in donations, volunteering, and local services, directly empowering underserved groups by giving them the visibility and support they need.</p>
                <p>We focus on building stronger communities by creating tools to connect people's needs with the right resources. Our need-based request system ensures that every donation is a direct response to a specific, articulated need, eliminating the guesswork and inefficiency of general donation drives.</p>
                <p>We believe in elevating voices of underserved groups and making support accessible to everyone, regardless of their location or circumstances.</p>
            </div>
            <div class="mission-image">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Community helping each other">
            </div>
        </div>
    </section>
    
    <section class="stats-section">
        <h2 class="section-title" style="color: white;">Our Impact</h2>
        <div class="stats-container">
            <div class="stat-box">
                <div class="stat-number">50,000+</div>
                <div class="stat-label">People Reached</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">15,000+</div>
                <div class="stat-label">Needs Fulfilled</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">2,500+</div>
                <div class="stat-label">Active Volunteers</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">200+</div>
                <div class="stat-label">Partner Organizations</div>
            </div>
        </div>
    </section>
    
    <section class="features-section">
        <h2 class="section-title">How We Make a Difference</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>Need-Based Request System</h3>
                <p>Ensuring every donation directly addresses a specific need, eliminating guesswork and inefficiency.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚨</div>
                <h3>Emergency Mode</h3>
                <p>Prioritized help based on urgency, especially during disasters and critical situations.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h3>Recognition System</h3>
                <p>Points and credits to donors to motivate continued support and community engagement.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🗺️</div>
                <h3>Interactive Maps</h3>
                <p>Showing distance between parties and estimated time for help to reach those in need.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3>Urban &amp; Rural Reach</h3>
                <p>Connecting those in need from both urban areas and rural communities.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🤝</div>
                <h3>Diverse Support Options</h3>
                <p>Help which is not limited to money, but includes food, clothes, shelters and much more.</p>
            </div>
        </div>
    </section>
    
    <section class="impact-section">
        <h2 class="section-title">Transparency &amp; Accessibility</h2>
        <div class="impact-content">
            <div class="impact-text">
                <p>At SAHYOG, we prioritize transparency between sponsors, volunteers, and beneficiaries. Our platform provides comprehensive information about both helpers (NGOs, shelters, volunteers, etc.) and those seeking help.</p>
                <p>We're committed to creating a community where both the helper and those in need of help get connected on one platform, fostering trust and ensuring that support reaches exactly where it's needed most.</p>
                <p>By focusing on direct connections and verified needs, we're transforming how communities support each other, making the process more efficient, transparent, and impactful.</p>
            </div>
            <div class="impact-image">
                <img src="https://images.unsplash.com/photo-1540479859555-17af45c78602?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Transparent community support">
            </div>
        </div>
    </section>
    
    <section class="contact-section">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-grid">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email Us</h3>
                <p>info@sahyog.org</p>
                <p>support@sahyog.org</p>
            </div>
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Call Us</h3>
                <p>+91 98765 43210</p>
                <p>+91 12345 67890</p>
            </div>
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Visit Us</h3>
                <p>123 Community Street</p>
                <p>City, State, India</p>
            </div>
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Working Hours</h3>
                <p>Monday-Friday: 9am-6pm</p>
                <p>Saturday: 10am-4pm</p>
            </div>
        </div>
    </section>
</main>
    
<?php include 'common_footer.php'; ?>
