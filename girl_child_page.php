<?php 
$page_title = "SAHYOG - Together We Empower | GIRL CHILD";
include 'common_header.php'; 
?>

<style>
    /* Page specific header for Girl Child */
    .page-header-section {
        background: linear-gradient(rgba(255, 107, 107, 0.8), rgba(255, 158, 158, 0.8)), url('https://images.unsplash.com/photo-1485546246426-74dc88dec4d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
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

    /* Success Stories Section */
    .success-stories, .awareness-campaigns, .help-form {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 40px;
        position: relative;
    }
    
    .section-title {
        text-align: center;
        color: #0b3c78;
        margin-bottom: 30px;
        font-size: 2.2rem;
    }
    
    .stories-slider, .campaigns-slider {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .slides-container, .campaign-slides-container {
        display: flex;
        transition: transform 0.5s ease;
    }
    
    .slide, .campaign-slide {
        min-width: 100%;
        display: flex;
        flex-direction: column;
        background: white;
    }
    
    .slide-image, .campaign-image {
        height: 300px;
        overflow: hidden;
        background-color: #f0f4ff;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .slide-image img, .campaign-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    
    .slide-content, .campaign-content {
        padding: 25px;
    }
    
    .slide-content h3, .campaign-content h3 {
        color: #e74c3c; /* Red for emphasis */
        margin-bottom: 15px;
        font-size: 1.5rem;
    }
    
    .slide-content p, .campaign-content p {
        color: #666;
        margin-bottom: 15px;
    }
    
    .slide-content .age {
        color: #888;
        font-style: italic;
    }
    
    .slider-nav, .campaign-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        z-index: 10;
    }
    
    .slider-btn, .campaign-btn {
        background-color: rgba(11, 60, 120, 0.8); /* Consistent blue */
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin: 0 20px;
        transition: background-color 0.3s;
    }
    
    .slider-btn:hover, .campaign-btn:hover {
        background-color: rgba(11, 60, 120, 1);
    }
    
    .slider-dots, .campaign-dots {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    
    .dot, .campaign-dot {
        width: 12px;
        height: 12px;
        background-color: #ddd;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    
    .dot.active, .campaign-dot.active {
        background-color: #0b3c78;
    }
    
    /* Interactive Elements */
    .interactive-stats {
        display: flex;
        justify-content: space-around;
        margin: 40px 0;
        flex-wrap: wrap;
    }
    
    .stat-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin: 10px;
        flex: 1;
        min-width: 200px;
        transition: transform 0.3s;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #e74c3c; /* Red for emphasis */
        margin-bottom: 10px;
    }
    
    .stat-text {
        color: #0b3c78; /* Consistent blue */
        font-weight: 500;
    }
    
    /* Help Form Section */
    .help-form {
        background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
        background-size: cover;
        background-position: center;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 40px;
    }
    
    .form-title {
        text-align: center;
        color: #0b3c78;
        margin-bottom: 30px;
        font-size: 2rem;
    }
    
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #0b3c78;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }
    
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #e74c3c; /* Red highlight */
        outline: none;
    }
    
    .form-group textarea {
        min-height: 150px;
        resize: vertical;
    }
    
    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 25px;
    }
    
    .form-row .form-group {
        flex: 1;
        margin-bottom: 0;
    }
    
    .submit-btn {
        background-color: #e74c3c; /* Red submit button */
        color: white;
        border: none;
        padding: 15px 30px;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        display: block;
        margin: 0 auto;
        transition: background-color 0.3s;
        box-shadow: 0 4px 10px rgba(231, 76, 60, 0.3);
    }
    
    .submit-btn:hover {
        background-color: #c0392b;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(231, 76, 60, 0.4);
    }
    
    @media (max-width: 768px) {
        .page-header-section h1 {
            font-size: 2.2rem;
        }
        .form-row {
            flex-direction: column;
            gap: 0;
        }
        .slider-btn, .campaign-btn {
            width: 40px;
            height: 40px;
            margin: 0 10px;
        }
    }
</style>

<main class="container">
    <!-- Header Section -->
    <div class="page-header-section">
        <h1>Help a Girl Child</h1>
        <p>Every girl deserves a chance to thrive. Support their education, protect them from violence, and help prevent child marriage.</p>
    </div>
    
    <!-- Success Stories Section -->
    <section class="success-stories">
        <h2 class="section-title">Success Stories</h2>
        <div class="stories-slider">
            <div class="slides-container">
                <!-- Story 1 -->
                <div class="slide">
                    <div class="slide-image">
                        <img src="https://images.unsplash.com/photo-1519457431-44ccd64a579b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Priya's Story">
                    </div>
                    <div class="slide-content">
                        <h3>Priya's Educational Journey</h3>
                        <p>Priya, a 12-year-old from a rural village, was able to continue her education with the support of SAHYOG donors. She's now top of her class and dreams of becoming a doctor.</p>
                        <p class="age">Age: 12 | Category: Education</p>
                    </div>
                </div>
                
                <!-- Story 2 -->
                <div class="slide">
                    <div class="slide-image">
                        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Meera's Story">
                    </div>
                    <div class="slide-content">
                        <h3>Meera's Escape from Child Marriage</h3>
                        <p>At 14, Meera was about to be forced into marriage. With SAHYOG's intervention, she was rescued and is now living in a safe home while continuing her education.</p>
                        <p class="age">Age: 14 | Category: Child Marriage</p>
                    </div>
                </div>
                
                <!-- Story 3 -->
                <div class="slide">
                    <div class="slide-image">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Ananya's Story">
                    </div>
                    <div class="slide-content">
                        <h3>Ananya's Protection from Abuse</h3>
                        <p>Ananya was facing domestic violence at home. SAHYOG provided counseling, legal support, and a safe environment. She's now thriving in school and has a brighter future.</p>
                        <p class="age">Age: 10 | Category: Violence</p>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <div class="slider-nav">
                <div class="slider-btn prev-btn">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="slider-btn next-btn">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            
            <!-- Dots Indicator -->
            <div class="slider-dots">
                <div class="dot active" data-index="0"></div>
                <div class="dot" data-index="1"></div>
                <div class="dot" data-index="2"></div>
            </div>
        </div>
    </section>
    
    <!-- Interactive Stats -->
    <div class="interactive-stats">
        <div class="stat-card">
            <div class="stat-number">63%</div>
            <div class="stat-text">Girls in rural areas drop out of school by grade 10</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">1 in 5</div>
            <div class="stat-text">Girls in India married before 18 years of age</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">70%</div>
            <div class="stat-text">Women have experienced violence in their lifetime</div>
        </div>
    </div>
    
    <!-- Awareness Campaigns Section -->
    <section class="awareness-campaigns">
        <h2 class="section-title">Awareness Campaigns</h2>
        <div class="campaigns-slider">
            <div class="campaign-slides-container">
                <!-- Campaign 1 -->
                <div class="campaign-slide">
                    <div class="campaign-image">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Education for Girls">
                    </div>
                    <div class="campaign-content">
                        <h3>Education for Every Girl</h3>
                        <p>Our campaign focuses on ensuring that every girl child has access to quality education. We provide scholarships, school supplies, and after-school support to help girls succeed academically.</p>
                        <p class="slogan">"Educate a girl, empower a nation!"</p>
                    </div>
                </div>
                
                <!-- Campaign 2 -->
                <div class="campaign-slide">
                    <div class="campaign-image">
                        <img src="https://images.unsplash.com/photo-1516585427167-9f4af9627e6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Protection from Violence">
                    </div>
                    <div class="campaign-content">
                        <h3>Protection from Violence</h3>
                        <p>We work to create safe environments for girls through community education, self-defense training, and support systems for those experiencing violence.</p>
                        <p class="slogan">"Break the silence, end the violence!"</p>
                    </div>
                </div>
                
                <!-- Campaign 3 -->
                <div class="campaign-slide">
                    <div class="campaign-image">
                        <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="End Child Marriage">
                    </div>
                    <div class="campaign-content">
                        <h3>End Child Marriage</h3>
                        <p>Our initiative works with communities to raise awareness about the harms of child marriage and provides alternatives for families considering this practice.</p>
                        <p class="slogan">"Let her be a child, not a bride!"</p>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <div class="campaign-nav">
                <div class="campaign-btn campaign-prev-btn">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="campaign-btn campaign-next-btn">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            
            <!-- Dots Indicator -->
            <div class="campaign-dots">
                <div class="campaign-dot active" data-index="0"></div>
                <div class="campaign-dot" data-index="1"></div>
                <div class="campaign-dot" data-index="2"></div>
            </div>
        </div>
    </section>
    
    <!-- Help Form Section -->
    <section class="help-form">
        <h2 class="form-title">Request Help for a Girl Child</h2>
        <!-- PHP for success/error messages -->
        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo "<div class='message success'>Thank you for your submission. We will contact you shortly to discuss how we can help.</div>";
            } else if ($_GET['status'] == 'error') {
                echo "<div class='message error'>There was an error submitting your request. Please try again.</div>";
            } else if ($_GET['status'] == 'error_access') {
                echo "<div class='message error'>Access Denied: This page should be accessed via a form submission.</div>";
            }
        }
        ?>
        <form action="submit_girl_child_request.php" method="POST" id="girlHelpForm">
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="form-group">
                    <label for="location">Location *</label>
                    <input type="text" id="location" name="location" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="girlName">Girl's Name (if different from above)</label>
                <input type="text" id="girlName" name="girlName">
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="girlAge">Girl's Age *</label>
                    <input type="number" id="girlAge" name="girlAge" min="0" max="18" required>
                </div>
                
                <div class="form-group">
                    <label for="helpCategory">Category of Help Needed *</label>
                    <select id="helpCategory" name="helpCategory" required>
                        <option value="">Select a category</option>
                        <option value="Education Support">Education Support</option>
                        <option value="Protection from Violence">Protection from Violence</option>
                        <option value="Prevention of Child Marriage">Prevention of Child Marriage</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="query">Detailed Query *</label>
                <textarea id="query" name="query" placeholder="Please describe the situation and the specific help needed..." required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Submit Request</button>
        </form>
    </section>
</main>
    
<script>
    // Success Stories Slider Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const slidesContainer = document.querySelector('.slides-container');
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const dots = document.querySelectorAll('.dot');
        
        let currentSlide = 0;
        const slideCount = slides.length;
        
        function updateSlider() {
            slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        nextBtn.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % slideCount;
            updateSlider();
        });
        
        prevBtn.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + slideCount) % slideCount;
            updateSlider();
        });
        
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                currentSlide = index;
                updateSlider();
            });
        });
        
        setInterval(function() {
            currentSlide = (currentSlide + 1) % slideCount;
            updateSlider();
        }, 5000);
        
        // Awareness Campaigns Slider Functionality
        const campaignSlidesContainer = document.querySelector('.campaign-slides-container');
        const campaignSlides = document.querySelectorAll('.campaign-slide');
        const campaignPrevBtn = document.querySelector('.campaign-prev-btn');
        const campaignNextBtn = document.querySelector('.campaign-next-btn');
        const campaignDots = document.querySelectorAll('.campaign-dot');
        
        let currentCampaignSlide = 0;
        const campaignSlideCount = campaignSlides.length;
        
        function updateCampaignSlider() {
            campaignSlidesContainer.style.transform = `translateX(-${currentCampaignSlide * 100}%)`;
            campaignDots.forEach((dot, index) => {
                if (index === currentCampaignSlide) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        campaignNextBtn.addEventListener('click', function() {
            currentCampaignSlide = (currentCampaignSlide + 1) % campaignSlideCount;
            updateCampaignSlider();
        });
        
        campaignPrevBtn.addEventListener('click', function() {
            currentCampaignSlide = (currentCampaignSlide - 1 + campaignSlideCount) % campaignSlideCount;
            updateCampaignSlider();
        });
        
        campaignDots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                currentCampaignSlide = index;
                updateCampaignSlider();
            });
        });
        
        setInterval(function() {
            currentCampaignSlide = (currentCampaignSlide + 1) % campaignSlideCount;
            updateCampaignSlider();
        }, 5000);
        
        // --- NEW FORM SUBMISSION WITH ALERT AND REDIRECT ---
        const helpForm = document.getElementById('girlHelpForm');
        helpForm.addEventListener('submit', async function(e) {
            e.preventDefault(); // Prevent default HTML form submission

            const formData = new FormData(helpForm); // Get form data

            try {
                const response = await fetch(helpForm.action, {
                    method: 'POST',
                    body: formData // Send form data
                });

                const result = await response.json(); // Expect JSON response from PHP

                if (result.success) {
                    alert(result.message); // Show success message
                    helpForm.reset(); // Clear form
                    window.location.href = 'girl_child_page.php?status=success'; // Redirect with status
                } else {
                    alert('Error: ' + result.message); // Show error message
                    window.location.href = 'girl_child_page.php?status=error'; // Redirect with error status
                }
            } catch (error) {
                console.error('Submission Error:', error);
                alert('An unexpected error occurred. Please try again.');
                window.location.href = 'girl_child_page.php?status=error'; // Redirect on fetch error
            }
        });
    });
</script>

<?php include 'common_footer.php'; ?>
