<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'SAHYOG - Together We Empower'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php if(isset($additional_css)) echo $additional_css; ?>
</head>
<body>
    <header style="background: linear-gradient(135deg, #0b3c78, #123a73); color: white; padding: 18px 0; position: sticky; top: 0; z-index: 100; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; align-items: center; justify-content: space-between; gap: 20px;">
            <!-- Logo left -->
            <div style="display: flex; align-items: center; gap: 12px;">
                <div style="width: 54px; height: 54px; border-radius: 10px; background: white; display: inline-flex; align-items: center; justify-content: center; color: #123a73; font-size: 22px; box-shadow: 0 3px 8px rgba(0,0,0,0.15);">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <div>
                    <div style="font-size: 1.6rem; font-weight: 800; letter-spacing: 0.6px; font-family: 'Montserrat', sans-serif;">SAHYOG</div>
                    <div style="font-size: 0.95rem; opacity: 0.9; font-family: 'Poppins', sans-serif;">Together We Empower</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav style="flex: 1 1 auto; display: flex; justify-content: center;">
                <ul style="display: flex; gap: 10px; list-style: none; align-items: center; flex-wrap: wrap; margin: 0;">
                    <li><a href="index.php" style="color: rgba(255,255,255,0.95); text-decoration: none; padding: 8px 12px; border-radius: 6px; font-weight: 600; transition: all 0.3s; font-family: 'Montserrat', sans-serif; <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'background: rgba(255,255,255,0.1); color: #fbbf24;' : ''; ?>" onmouseover="this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.background='<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'rgba(255,255,255,0.1)' : 'transparent'; ?>'">HOME</a></li>
                    <li><a href="register_donator.php" style="color: rgba(255,255,255,0.95); text-decoration: none; padding: 8px 12px; border-radius: 6px; font-weight: 600; transition: all 0.3s; font-family: 'Montserrat', sans-serif; <?php echo (basename($_SERVER['PHP_SELF']) == 'register_donator.php') ? 'background: rgba(255,255,255,0.1); color: #fbbf24;' : ''; ?>" onmouseover="this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.background='<?php echo (basename($_SERVER['PHP_SELF']) == 'register_donator.php') ? 'rgba(255,255,255,0.1)' : 'transparent'; ?>'">DONATOR</a></li>
                    <li><a href="register_helpee.php" style="color: rgba(255,255,255,0.95); text-decoration: none; padding: 8px 12px; border-radius: 6px; font-weight: 600; transition: all 0.3s; font-family: 'Montserrat', sans-serif; <?php echo (basename($_SERVER['PHP_SELF']) == 'register_helpee.php') ? 'background: rgba(255,255,255,0.1); color: #fbbf24;' : ''; ?>" onmouseover="this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.background='<?php echo (basename($_SERVER['PHP_SELF']) == 'register_helpee.php') ? 'rgba(255,255,255,0.1)' : 'transparent'; ?>'">HELPEE</a></li>
                    <li><a href="girl_child_page.php" style="color: rgba(255,255,255,0.95); text-decoration: none; padding: 8px 12px; border-radius: 6px; font-weight: 600; transition: all 0.3s; font-family: 'Montserrat', sans-serif; <?php echo (basename($_SERVER['PHP_SELF']) == 'girl_child_page.php') ? 'background: rgba(255,255,255,0.1); color: #fbbf24;' : ''; ?>" onmouseover="this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.background='<?php echo (basename($_SERVER['PHP_SELF']) == 'girl_child_page.php') ? 'rgba(255,255,255,0.1)' : 'transparent'; ?>'">GIRL CHILD</a></li>
                    <li><a href="reviews.php" style="color: rgba(255,255,255,0.95); text-decoration: none; padding: 8px 12px; border-radius: 6px; font-weight: 600; transition: all 0.3s; font-family: 'Montserrat', sans-serif; <?php echo (basename($_SERVER['PHP_SELF']) == 'reviews.php') ? 'background: rgba(255,255,255,0.1); color: #fbbf24;' : ''; ?>" onmouseover="this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.background='<?php echo (basename($_SERVER['PHP_SELF']) == 'reviews.php') ? 'rgba(255,255,255,0.1)' : 'transparent'; ?>'">REVIEW</a></li>
                    <li><a href="about.php" style="color: rgba(255,255,255,0.95); text-decoration: none; padding: 8px 12px; border-radius: 6px; font-weight: 600; transition: all 0.3s; font-family: 'Montserrat', sans-serif; <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'background: rgba(255,255,255,0.1); color: #fbbf24;' : ''; ?>" onmouseover="this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.background='<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'rgba(255,255,255,0.1)' : 'transparent'; ?>'">ABOUT</a></li>
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
