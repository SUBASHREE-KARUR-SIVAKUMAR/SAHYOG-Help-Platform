<?php 
// Set the page title for the common header
$page_title = "SAHYOG - Together We Empower | REVIEWS";

// Include the common header file
include 'common_header.php'; 
?>

<style>
    /* Main Title / Rating summary */
    .hero {
        padding: 30px 0;
        text-align: center;
    }
    .page-title {
        font-size: 2rem;
        color: #0b3c78;
        margin-bottom: 8px;
        font-weight: 800;
    }
    .page-sub {
        color: #475569;
        margin-bottom: 14px;
    }
    .rating-summary {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        background: white;
        padding: 12px 18px;
        border-radius: 10px;
        box-shadow: 0 6px 18px rgba(16,24,40,0.06);
    }
    .rating-number {
        font-size: 1.4rem;
        font-weight: 800;
        color: #0b3c78;
    }
    .stars {
        display: flex;
        gap: 4px;
        font-size: 1rem;
        color: #fbbf24;
    }
    .rating-count {
        color: #64748b;
        font-size: 0.95rem;
    }

    /* Add Review button */
    .top-actions {
        display: flex;
        justify-content: center;
        margin-top: 16px;
        gap: 12px;
        flex-wrap: wrap;
    }
    .btn-primary {
        background: #0b3c78;
        color: white;
        padding: 10px 16px;
        border-radius: 8px;
        font-weight: 700;
        border: none;
        cursor: pointer;
        box-shadow: 0 6px 18px rgba(11,60,120,0.12);
        transition: all 0.3s;
    }
    .btn-primary:hover { background: #123a73; transform: translateY(-3px); }

    /* Reviews Layout - Main container for review sections */
    .reviews-wrap { 
        display: block; /* Keep sections stacking vertically */
        margin-top: 26px; 
    }

    /* Individual Review Section (for each category) */
    .review-section {
        background: white;
        border-radius: 12px;
        padding: 18px;
        box-shadow: 0 6px 18px rgba(15,23,42,0.06);
        margin-bottom: 20px; /* Space between categories */
    }
    .section-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
    }
    .section-header i {
        font-size: 1.2rem;
        color: #2563eb;
    }
    .section-title {
        font-size: 1.15rem;
        color: #0b3c78;
        font-weight: 700;
    }

    /* NEW: Grid for review items WITHIN each section */
    .review-items-grid {
        display: grid;
        /* Create as many columns as fit, each at least 450px wide, growing to fill space */
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); 
        gap: 18px; /* Space between review cards */
    }

    /* Individual Review Item Card */
    .review-item {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        padding: 12px;
        border-radius: 10px;
        background: #f8fafc;
        border-left: 4px solid #2563eb;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05); /* Subtle shadow for cards */
    }
    .avatar {
        width: 56px;
        height: 56px;
        border-radius: 10px;
        background: #e6eefc;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: #0b3c78;
        font-size: 18px;
    }
    .review-body {
        flex: 1;
    }
    .review-meta {
        display: flex;
        gap: 12px;
        align-items: center;
        margin-bottom: 6px;
        color: #0f172a;
        font-weight: 700;
    }
    .review-role {
        font-weight: 600;
        color: #475569;
        font-size: 0.95rem;
    }
    .review-text { color: #334155; margin-bottom: 8px; }

    .review-stars {
        color: #fbbf24;
        font-size: 0.95rem;
        margin-right: 8px;
    }

    /* Review media display */
    .review-media {
        margin-top: 10px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    .review-media img {
        max-width: 100px;
        max-height: 100px;
        border-radius: 8px;
        object-fit: cover;
    }
    .review-media a {
        color: #0b3c78;
        text-decoration: none;
        padding: 5px 10px;
        background: #e6eefc;
        border-radius: 5px;
        font-size: 0.9rem;
    }
    .review-media a:hover {
        background: #d1e7fc;
    }

    /* Modal form */
    .modal-overlay {
        position: fixed; 
        inset: 0; 
        display: none; 
        align-items: center; 
        justify-content: center;
        background: rgba(2,6,23,0.6); 
        z-index: 2000;
    }
    .modal {
        background: white; 
        border-radius: 12px; 
        padding: 20px; 
        width: 92%; 
        max-width: 640px;
        box-shadow: 0 12px 36px rgba(2,6,23,0.45);
        max-height: 92vh; 
        overflow-y: auto;
    }
    .modal .modal-header { 
        display:flex; 
        justify-content: space-between; 
        align-items: center; 
        margin-bottom: 12px; 
    }
    .modal input[type="text"], .modal select, .modal textarea, .modal input[type="file"] {
        width:100%; 
        padding: 10px; 
        border: 1px solid #e6eefc; 
        border-radius: 8px; 
        margin-bottom: 12px;
        font-size: 1rem;
    }
    .modal textarea { 
        min-height: 120px; 
        resize: vertical; 
    }
    
    /* File upload styling */
    .file-upload-group {
        margin-bottom: 15px;
    }
    .file-upload-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #555;
    }
    .file-upload-input {
        width: 100%;
        padding: 10px;
        border: 2px dashed #e6eefc;
        border-radius: 8px;
        background: #f8fafc;
        cursor: pointer;
        transition: all 0.3s;
    }
    .file-upload-input:hover {
        border-color: #0b3c78;
        background: #f0f7ff;
    }
    .file-upload-text {
        color: #64748b;
        font-size: 0.9rem;
        text-align: center;
        padding: 10px;
    }
    
    .rating-stars { 
        display:flex; 
        gap:6px; 
        font-size: 1.5rem; 
        cursor: pointer; 
        color: #e6eaf1; 
        margin-bottom: 12px;
    }
    .rating-stars .star.selected { color: #fbbf24; }
    .rating-stars .star:hover { color: #fbbf24; }
    .modal .submit-btn { 
        background: #0b3c78; 
        color: white; 
        padding: 12px 14px; 
        border-radius: 8px; 
        cursor: pointer; 
        border: none; 
        font-weight: 700; 
        width:100%;
        transition: all 0.3s;
    }
    .modal .submit-btn:hover {
        background: #123a73;
        transform: translateY(-2px);
    }
    .close-btn { 
        background: none; 
        border: none; 
        font-size: 22px; 
        cursor: pointer; 
        color: #475569; 
    }

    /* Success/Error Messages */
    .message {
        padding: 1rem;
        margin: 1rem auto;
        border-radius: 5px;
        text-align: center;
        max-width: 600px;
    }
    .message.success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    .message.error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    /* Responsive adjustments for reviews grid */
    @media (max-width: 799px) {
        .review-items-grid {
            grid-template-columns: 1fr; /* Stack items on small screens */
        }
    }
</style>

<!-- Hero & Rating Summary -->
<div class="container hero">
    <div class="page-title">Community Impact Reviews</div>
    <div class="page-sub">See how SAHYOG is making a difference through verified help and transparent impact.</div>

    <div style="margin-top:12px">
        <div id="ratingSummary" class="rating-summary" aria-hidden="false">
            <div>
                <div class="rating-number" id="avgRating">4.8</div>
                <div class="rating-count" id="ratingCount">based on 6 reviews</div>
            </div>
            <div style="display:flex;flex-direction:column;align-items:flex-start;">
                <div class="stars" id="avgStars" aria-hidden="true">★★★★★</div>
                <div style="font-size:0.85rem;color:#64748b;margin-top:4px;">Average satisfaction</div>
            </div>
        </div>
    </div>

    <div class="top-actions">
        <button id="openModal" class="btn-primary"><i class="fas fa-plus-circle" style="margin-right:8px"></i> Add Review</button>
    </div>
</div>

<!-- Success/Error Messages -->
<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        echo "<div class='message success'>Thank you! Your review has been added successfully.</div>";
    } else if ($_GET['status'] == 'error') {
        echo "<div class='message error'>There was an error submitting your review. Please try again.</div>";
    }
}
?>

<!-- Reviews container (will be filled by JS) -->
<div class="container reviews-wrap" id="reviewsContainer" style="margin-top:18px;"></div>

<!-- Modal: Add Review -->
<div class="modal-overlay" id="modalOverlay">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="modal-header">
            <h3 id="modalTitle" style="color:#0b3c78;">Share Your Experience</h3>
            <button class="close-btn" id="closeModal">&times;</button>
        </div>

        <form id="reviewForm" action="submit_review.php" method="POST" enctype="multipart/form-data">
            <label for="title">Review Title</label>
            <input id="title" name="title" type="text" placeholder="e.g., Great help with medical bills" required>

            <label for="description">Your Review</label>
            <textarea id="description" name="description" placeholder="Share your experience..." required></textarea>

            <label>Your Rating</label>
            <div class="rating-stars" id="ratingStars" title="Click to set rating">
                <span class="star" data-value="1">★</span>
                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
            </div>
            <input type="hidden" id="ratingValue" name="rating" value="5">

            <!-- File Upload Fields -->
            <div class="file-upload-group">
                <label for="photo_file">Upload Photo (Optional)</label>
                <input id="photo_file" name="photo_file" type="file" accept="image/*" class="file-upload-input">
                <div class="file-upload-text">Choose an image file (JPG, PNG, GIF)</div>
            </div>

            <div class="file-upload-group">
                <label for="video_file">Upload Video (Optional)</label>
                <input id="video_file" name="video_file" type="file" accept="video/*" class="file-upload-input">
                <div class="file-upload-text">Choose a video file (MP4, AVI, MOV)</div>
            </div>

            <div class="file-upload-group">
                <label for="receipt_file">Upload Receipt/Document (Optional)</label>
                <input id="receipt_file" name="receipt_file" type="file" accept=".pdf,.doc,.docx,.jpg,.png" class="file-upload-input">
                <div class="file-upload-text">Choose a document (PDF, DOC, or image)</div>
            </div>

            <div style="margin-top:12px;">
                <button type="submit" class="submit-btn">Submit Review</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Load existing reviews from database and add to JavaScript array
    const reviews = [
        <?php
        require_once 'connect.php';
        
        $sql = "SELECT title, description, rating, photo_path, video_path, receipt_path FROM reviews WHERE title IS NOT NULL ORDER BY id DESC LIMIT 10";
        $result = mysqli_query($conn, $sql);
        
        $js_reviews = [];
        if ($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $js_reviews[] = '{
                    category: "Database Reviews",
                    name: "User Review",
                    role: "Community Member",
                    rating: ' . (int)$row['rating'] . ',
                    text: "' . addslashes($row['description']) . '",
                    photo_path: "' . addslashes($row['photo_path']) . '",
                    video_path: "' . addslashes($row['video_path']) . '",
                    receipt_path: "' . addslashes($row['receipt_path']) . '"
                }';
            }
        }
        echo implode(',', $js_reviews);
        
        // Add some static reviews if database is empty
        if (empty($js_reviews)) {
            echo '
            {
                category: "Donations & Resources",
                name: "Priya S.",
                role: "Donor",
                rating: 5,
                text: "The laptop reached a student in need incredibly fast! Amazing transparency."
            },
            {
                category: "Donations & Resources",
                name: "Rakesh T.",
                role: "Helpee",
                rating: 5,
                text: "Tracked my food donation from pickup to shelter. Truly heartwarming!"
            },
            {
                category: "Volunteer Experiences",
                name: "Rahul M.",
                role: "Volunteer",
                rating: 5,
                text: "Found a local tutoring gig easily. So simple to sign up and make a change!"
            },
            {
                category: "Volunteer Experiences",
                name: "Asha P.",
                role: "Volunteer",
                rating: 4,
                text: "Volunteered for beach cleanup. The process was seamless and fun!"
            },
            {
                category: "Community Services",
                name: "Meena K.",
                role: "Senior Citizen",
                rating: 5,
                text: "Received grocery delivery during lockdown. Really appreciate the support!"
            },
            {
                category: "Community Services",
                name: "Vikram P.",
                role: "Homeowner",
                rating: 4,
                text: "Connected with a plumber for free repairs. Builds community trust."
            }';
        }
        
        mysqli_close($conn);
        ?>
    ];

    // Helper to compute average rating
    function computeAverage(reviews) {
        if (!reviews.length) return { avg: 0, count: 0 };
        const sum = reviews.reduce((acc, r) => acc + (r.rating || 0), 0);
        const avg = Math.round((sum / reviews.length) * 10) / 10;
        return { avg, count: reviews.length };
    }

    // Render reviews grouped by category
    function renderReviews() {
        const container = document.getElementById('reviewsContainer');
        container.innerHTML = '';

        // Compute rating summary
        const { avg, count } = computeAverage(reviews);
        document.getElementById('avgRating').innerText = avg.toFixed(1);
        document.getElementById('ratingCount').innerText = `based on ${count} review${count !== 1 ? 's' : ''}`;
        
        // Update stars display
        const avgStarsEl = document.getElementById('avgStars');
        avgStarsEl.innerHTML = '';
        for (let i = 0; i < 5; i++) {
            const star = document.createElement('span');
            star.textContent = i < Math.round(avg) ? '★' : '☆';
            avgStarsEl.appendChild(star);
        }

        // Group by category
        const grouped = {};
        reviews.forEach(r => {
            if (!grouped[r.category]) grouped[r.category] = [];
            grouped[r.category].push(r);
        });

        // For each category create a section
        for (const [category, items] of Object.entries(grouped)) {
            const section = document.createElement('div');
            section.className = 'review-section';

            const header = document.createElement('div');
            header.className = 'section-header';
            
            // Choose appropriate icon based on category
            let iconClass = 'fa-comments'; // default
            if (category.includes('Donation')) iconClass = 'fa-gift';
            if (category.includes('Volunteer')) iconClass = 'fa-hands-helping';
            if (category.includes('Community')) iconClass = 'fa-hands';
            if (category.includes('Database')) iconClass = 'fa-database';
            
            header.innerHTML = `<i class="fas ${iconClass}"></i><div class="section-title">${category}</div>`;
            section.appendChild(header);

            // Create a new container for the actual review items within this section
            const reviewItemsGrid = document.createElement('div');
            reviewItemsGrid.className = 'review-items-grid'; // Apply the new grid class here
            
            // create each review item
            items.forEach(it => {
                const reviewEl = document.createElement('div');
                reviewEl.className = 'review-item';

                // avatar (initials)
                const initials = (it.name || '').split(' ').map(n => n[0]).slice(0,2).join('').toUpperCase();
                const avatar = document.createElement('div');
                avatar.className = 'avatar';
                avatar.textContent = initials;

                const body = document.createElement('div');
                body.className = 'review-body';

                const meta = document.createElement('div');
                meta.className = 'review-meta';
                meta.innerHTML = `<span>${it.name}</span><span class="review-role">• ${it.role}</span>`;

                const stars = document.createElement('div');
                stars.className = 'review-stars';
                stars.innerHTML = renderStars(it.rating);

                const text = document.createElement('div');
                text.className = 'review-text';
                text.textContent = it.text;

                body.appendChild(meta);
                body.appendChild(stars);
                body.appendChild(text);

                // Add media if available
                if (it.photo_path || it.video_path || it.receipt_path) {
                    const media = document.createElement('div');
                    media.className = 'review-media';
                    
                    if (it.photo_path) {
                        const img = document.createElement('img');
                        img.src = it.photo_path;
                        img.alt = 'Review photo';
                        media.appendChild(img);
                    }
                    
                    if (it.video_path) {
                        const videoLink = document.createElement('a');
                        videoLink.href = it.video_path;
                        videoLink.target = '_blank';
                        videoLink.innerHTML = '<i class="fas fa-video"></i> View Video';
                        media.appendChild(videoLink);
                    }
                    
                    if (it.receipt_path) {
                        const receiptLink = document.createElement('a');
                        receiptLink.href = it.receipt_path;
                        receiptLink.target = '_blank';
                        receiptLink.innerHTML = '<i class="fas fa-file"></i> View Document';
                        media.appendChild(receiptLink);
                    }
                    
                    body.appendChild(media);
                }

                reviewEl.appendChild(avatar);
                reviewEl.appendChild(body);

                reviewItemsGrid.appendChild(reviewEl); // Append to the new grid container
            });

            section.appendChild(reviewItemsGrid); // Append the grid container to the section
            container.appendChild(section); // Append the section to the main reviews container
        }
    }

    // Render star string for a rating (filled/unfilled)
    function renderStars(rating) {
        rating = Math.max(0, Math.min(5, Math.round(rating || 0)));
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += (i < rating) ? '★' : '☆';
        }
        return s;
    }

    // Modal open/close
    const openBtn = document.getElementById('openModal');
    const overlay = document.getElementById('modalOverlay');
    const closeBtn = document.getElementById('closeModal');

    openBtn.addEventListener('click', () => {
        overlay.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) closeModal();
    });
    function closeModal() {
        overlay.style.display = 'none';
        document.body.style.overflow = 'auto';
        document.getElementById('reviewForm').reset();
        setRatingInForm(5);
    }

    // Rating star interactions in the modal
    const ratingStars = document.getElementById('ratingStars');
    const ratingInput = document.getElementById('ratingValue');
    const starsEls = Array.from(ratingStars.querySelectorAll('.star'));

    function setRatingInForm(value) {
        ratingInput.value = value;
        starsEls.forEach(s => {
            const v = parseInt(s.dataset.value, 10);
            if (v <= value) {
                s.classList.add('selected');
            } else {
                s.classList.remove('selected');
            }
        });
    }

    starsEls.forEach(s => {
        s.addEventListener('mouseenter', () => {
            const v = parseInt(s.dataset.value, 10);
            starsEls.forEach(st => {
                const sv = parseInt(st.dataset.value, 10);
                if (sv <= v) {
                    st.classList.add('selected');
                } else {
                    st.classList.remove('selected');
                }
            });
        });
        
        s.addEventListener('mouseleave', () => {
            setRatingInForm(parseInt(ratingInput.value, 10) || 0);
        });
        
        s.addEventListener('click', () => {
            const v = parseInt(s.dataset.value, 10);
            setRatingInForm(v);
        });
    });

    // Form submission - Modified to work with PHP
    const reviewForm = document.getElementById('reviewForm');
    reviewForm.addEventListener('submit', (e) => {
        const title = document.getElementById('title').value.trim();
        const description = document.getElementById('description').value.trim();
        const rating = parseInt(document.getElementById('ratingValue').value) || 0;

        if (!title || !description || rating < 1) {
            e.preventDefault();
            alert('Please fill all required fields and select a rating.');
            return;
        }

        // Let the form submit normally to PHP
        // The PHP will handle the submission and redirect back
    });

    // initial render
    renderReviews();
    // set default rating selected in the modal
    setRatingInForm(5);
</script>

<?php 
// Include the common footer file
include 'common_footer.php'; 
?>
