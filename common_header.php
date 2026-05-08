<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'SAHYOG - Together We Empower'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php if(isset($additional_css)) echo $additional_css; ?>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; color: #333; line-height: 1.6; }
        
        /* THE MAP FIX: Extremely high z-index and forced background color */
        header {
            background: linear-gradient(135deg, #0b3c78, #123a73) !important;
            color: white;
            padding: 18px 0;
            position: sticky !important;
            top: 0;
            z-index: 99999 !important; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        
        nav ul { display: flex; gap: 10px; list-style: none; align-items: center; flex-wrap: wrap; margin: 0; }
        nav a { color: rgba(255,255,255,0.95); text-decoration: none; padding: 8px 12px; border-radius: 6px; font-weight: 600; transition: all 0.3s; font-family: 'Montserrat', sans-serif; }
        
        @media (max-width: 768px) {
            header > div { flex-direction: column !important; gap: 12px !important; text-align: center; }
            nav { width: 100% !important; }
            nav ul { justify-content: center; }
        }
    </style>
</head>
<body>
    <header>
        <div class="container" style="display: flex; align-items: center; justify-content: space-between; gap: 20px;">
            <div style="display: flex; align-items: center; gap: 12px;">
                <div style="width: 54px; height: 54px; border-radius: 10px; background: white; display: inline-flex; align-items: center; justify-content: center; color: #123a73; font-size: 22px;">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <div>
                    <div style="font-size: 1.6rem; font-weight: 800; letter-spacing: 0.6px; font-family: 'Montserrat', sans-serif;">SAHYOG</div>
                    <div style="font-size: 0.95rem; opacity: 0.9;">Together We Empower</div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="register_donator.php">DONATOR</a></li>
                    <li><a href="register_helpee.php">HELPEE</a></li>
                    <li><a href="girl_child_page.php">GIRL CHILD</a></li>
                    <li><a href="reviews.php">REVIEW</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
    }
    
    /* This is the part we added to fix the map issue! */
    header {
        position: sticky;
        top: 0;
        z-index: 9999 !important;
        width: 100%;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    @media (max-width: 768px) {
        header > div {
            flex-direction: column !important;
            gap: 12px !important;
            text-align: center;
        }
        nav {
            order: 3;
            width: 100% !important;
        }
        nav ul {
            flex-direction: column !important;
            gap: 0.8rem !important;
        }
    }
</style>

