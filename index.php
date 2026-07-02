<?php
// تنظیمات سایت
$siteTitle = "اتم - مدرسه مفید یادگار امام";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle; ?></title>
    <style>
        /* ===== RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Vazirmatn', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0a0e17;
            color: #e0f0ff;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* ===== FLOATING ATOMS BACKGROUND ===== */
        .atoms-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .atom {
            position: absolute;
            border-radius: 50%;
            opacity: 0.08;
            animation: floatAtom linear infinite;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .atom .nucleus {
            width: 25%;
            height: 25%;
            background: radial-gradient(circle, #6cf, #1a3a5a);
            border-radius: 50%;
            box-shadow: 0 0 30px #4af;
        }

        .atom .orbit {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 1px solid rgba(100, 200, 255, 0.1);
            border-radius: 50%;
            animation: spinOrbit 8s linear infinite;
        }

        .atom .orbit:nth-child(2) {
            width: 70%;
            height: 70%;
            animation-duration: 12s;
            border-color: rgba(200, 100, 255, 0.1);
        }

        .atom .orbit:nth-child(3) {
            width: 40%;
            height: 40%;
            animation-duration: 6s;
            border-color: rgba(100, 255, 200, 0.1);
        }

        @keyframes floatAtom {
            0% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(40px, -60px) rotate(90deg); }
            50% { transform: translate(-30px, 80px) rotate(180deg); }
            75% { transform: translate(50px, 40px) rotate(270deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        @keyframes spinOrbit {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .atom-0 { width: 200px; height: 200px; top: 5%; left: 2%; animation-duration: 22s; }
        .atom-1 { width: 140px; height: 140px; bottom: 10%; right: 3%; animation-duration: 28s; animation-delay: -5s; }
        .atom-2 { width: 250px; height: 250px; top: 40%; left: 70%; animation-duration: 30s; animation-delay: -10s; }
        .atom-3 { width: 100px; height: 100px; top: 70%; left: 15%; animation-duration: 20s; animation-delay: -3s; }
        .atom-4 { width: 180px; height: 180px; top: 15%; left: 45%; animation-duration: 26s; animation-delay: -7s; }
        .atom-5 { width: 120px; height: 120px; bottom: 25%; right: 25%; animation-duration: 24s; animation-delay: -12s; }
        .atom-6 { width: 300px; height: 300px; top: 50%; left: -5%; animation-duration: 35s; animation-delay: -2s; opacity: 0.05; }
        .atom-7 { width: 160px; height: 160px; bottom: 5%; right: 50%; animation-duration: 18s; animation-delay: -8s; }
        .atom-8 { width: 220px; height: 220px; top: 10%; right: 20%; animation-duration: 25s; animation-delay: -15s; }
        .atom-9 { width: 130px; height: 130px; bottom: 30%; left: 60%; animation-duration: 21s; animation-delay: -4s; }
        .atom-10 { width: 170px; height: 170px; top: 60%; right: 5%; animation-duration: 32s; animation-delay: -9s; }
        .atom-11 { width: 110px; height: 110px; top: 25%; right: 40%; animation-duration: 19s; animation-delay: -6s; }

        /* ===== NAVIGATION ===== */
        .main-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            background: rgba(10, 14, 23, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(100, 200, 255, 0.1);
            padding: 0 2rem;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 70px;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: 900;
        }

        .brand-icon {
            font-size: 2rem;
            color: #6cf;
        }

        .brand-text {
            background: linear-gradient(135deg, #8cf, #6af, #c8f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: #8ab;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            padding: 0.4rem 0;
            border-bottom: 2px solid transparent;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: #fff;
            border-bottom-color: #6cf;
        }

        .nav-menu .nav-icon {
            font-size: 1.2rem;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            margin-top: 70px;
            padding: 2rem;
            min-height: calc(100vh - 70px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ===== GAME CONTAINER ===== */
        .game-container {
            position: relative;
            z-index: 1;
            background: rgba(10, 20, 35, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(100, 200, 255, 0.2);
            border-radius: 48px;
            padding: 3rem 4rem;
            max-width: 1000px;
            width: 100%;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.7);
            text-align: center;
            transition: all 0.3s ease;
        }

        .game-container:hover {
            border-color: rgba(100, 200, 255, 0.4);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.8), 0 0 80px rgba(50, 150, 255, 0.1);
        }

        /* ===== HEADER ===== */
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .header-icon {
            font-size: 3rem;
            line-height: 1;
            filter: drop-shadow(0 0 20px rgba(100, 200, 255, 0.3));
            color: #8cf;
        }

        .header h1 {
            font-size: 2.4rem;
            font-weight: 900;
            background: linear-gradient(135deg, #8cf, #6af, #c8f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header .sub {
            font-size: 1rem;
            color: #7aa;
            background: rgba(100, 200, 255, 0.08);
            padding: 0.3rem 1.2rem;
            border-radius: 60px;
            border: 1px solid rgba(100, 200, 255, 0.1);
        }

        /* ===== BADGE ===== */
        .badge-row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 2.2rem;
        }

        .badge {
            background: rgba(30, 60, 100, 0.3);
            border: 1px solid rgba(100, 200, 255, 0.12);
            border-radius: 60px;
            padding: 0.5rem 1.8rem;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.95rem;
            color: #bde;
        }

        .badge .icon {
            font-size: 1.4rem;
            color: #6cf;
        }

        .badge strong {
            color: #fff;
        }

        /* ===== TITLE ===== */
        .title-area {
            margin: 1.5rem 0 1rem;
        }

        .title-area .main-title {
            font-size: 3rem;
            font-weight: 900;
            background: linear-gradient(135deg, #fca, #f8a, #c8f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.2;
        }

        .title-area .sub-title {
            font-size: 1.2rem;
            color: #8ac;
            margin-top: 0.3rem;
            background: rgba(100, 200, 255, 0.05);
            display: inline-block;
            padding: 0.2rem 2rem;
            border-radius: 60px;
            border: 1px solid rgba(100, 200, 255, 0.08);
        }

        /* ===== GAME CATEGORIES ===== */
        .game-categories {
            margin: 2.5rem 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.5rem;
        }

        .game-card {
            background: rgba(20, 40, 70, 0.3);
            border: 1px solid rgba(100, 200, 255, 0.08);
            border-radius: 24px;
            padding: 1.8rem 1.2rem;
            transition: all 0.3s ease;
            cursor: default;
        }

        .game-card:hover {
            transform: translateY(-8px);
            border-color: rgba(100, 200, 255, 0.3);
            background: rgba(30, 60, 100, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .game-card .game-icon {
            font-size: 3rem;
            margin-bottom: 0.8rem;
            display: block;
        }

        .game-card h3 {
            font-size: 1.1rem;
            color: #fff;
            margin-bottom: 0.3rem;
        }

        .game-card p {
            font-size: 0.85rem;
            color: #8ab;
        }

        .game-card .game-tag {
            display: inline-block;
            margin-top: 0.8rem;
            padding: 0.2rem 1rem;
            border-radius: 60px;
            font-size: 0.7rem;
            background: rgba(100, 200, 255, 0.1);
            color: #6cf;
            border: 1px solid rgba(100, 200, 255, 0.1);
        }

        /* ===== FOOTER ===== */
        .footer {
            margin-top: 2.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            border-top: 1px solid rgba(100, 200, 255, 0.06);
            padding-top: 1.8rem;
        }

        .footer .footer-row {
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
            font-size: 0.85rem;
            color: #567;
        }

        .footer .footer-row span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer .footer-row .icon {
            font-size: 1.1rem;
            color: #6af;
        }

        .footer .credit {
            font-size: 0.8rem;
            color: #445;
            letter-spacing: 0.5px;
            padding: 0.5rem 1.5rem;
            background: rgba(100, 200, 255, 0.03);
            border-radius: 60px;
            border: 1px solid rgba(100, 200, 255, 0.04);
        }

        .footer .credit .heart {
            color: #6cf;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .game-container {
                padding: 2rem 1.5rem;
                border-radius: 32px;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
            
            .title-area .main-title {
                font-size: 2.2rem;
            }
            
            .nav-menu {
                gap: 1rem;
            }
            
            .nav-menu a {
                font-size: 0.8rem;
            }
            
            .game-categories {
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                gap: 1rem;
            }
            
            .badge {
                padding: 0.3rem 1rem;
                font-size: 0.8rem;
            }
            
            .atom {
                opacity: 0.05;
            }
            
            .atom-0 { width: 120px; height: 120px; }
            .atom-2 { width: 160px; height: 160px; }
            .atom-6 { width: 200px; height: 200px; }
        }

        @media (max-width: 480px) {
            .main-nav {
                padding: 0 1rem;
            }
            
            .nav-container {
                height: 60px;
            }
            
            .nav-brand {
                font-size: 1.2rem;
            }
            
            .brand-icon {
                font-size: 1.5rem;
            }
            
            .nav-menu {
                gap: 0.5rem;
            }
            
            .nav-menu a {
                font-size: 0.7rem;
                padding: 0.3rem 0;
            }
            
            .nav-menu .nav-icon {
                font-size: 1rem;
            }
            
            .game-container {
                padding: 1.5rem 1rem;
                border-radius: 24px;
            }
            
            .header h1 {
                font-size: 1.4rem;
            }
            
            .header-icon {
                font-size: 2rem;
            }
            
            .title-area .main-title {
                font-size: 1.8rem;
            }
            
            .game-categories {
                grid-template-columns: 1fr 1fr;
                gap: 0.8rem;
            }
            
            .game-card {
                padding: 1.2rem 0.8rem;
            }
            
            .game-card .game-icon {
                font-size: 2.2rem;
            }
            
            .game-card h3 {
                font-size: 0.9rem;
            }
            
            .game-card p {
                font-size: 0.75rem;
            }
            
            .footer .footer-row {
                gap: 12px;
                font-size: 0.75rem;
                flex-direction: column;
                align-items: center;
            }
        }

        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 4px;
            background: #0a0e17;
        }
        ::-webkit-scrollbar-thumb {
            background: #2a4a7a;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #3a5a8a;
        }
    </style>
</head>
<body>

    <!-- ===== FLOATING ATOMS ===== -->
    <div class="atoms-bg">
        <div class="atom atom-0"><div class="orbit"></div><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-1"><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-2"><div class="orbit"></div><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-3"><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-4"><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-5"><div class="orbit"></div><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-6"><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-7"><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-8"><div class="orbit"></div><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-9"><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-10"><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
        <div class="atom atom-11"><div class="orbit"></div><div class="orbit"></div><div class="orbit"></div><div class="nucleus"></div></div>
    </div>

    <!-- ===== NAVIGATION ===== -->
    <nav class="main-nav">
        <div class="nav-container">
            <div class="nav-brand">
                <span class="brand-icon">&#9883;</span>
                <span class="brand-text">اتم</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#" class="active"><span class="nav-icon">&#9654;</span> خانه</a></li>
                <li><a href="#games"><span class="nav-icon">&#9889;</span> بازی‌ها</a></li>
                <li><a href="#about"><span class="nav-icon">&#9733;</span> درباره</a></li>
            </ul>
        </div>
    </nav>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">
        <div class="game-container">

            <!-- HEADER -->
            <div class="header">
                <span class="header-icon">&#9883;</span>
                <h1>مدرسه مفید</h1>
                <span class="sub">مسابقه اتم</span>
            </div>

            <!-- BADGES -->
            <div class="badge-row">
                <div class="badge">
                    <span class="icon">&#9889;</span>
                    <span>استاد تمام <strong>مهارت‌ها</strong></span>
                </div>
                <div class="badge">
                    <span class="icon">&#9733;</span>
                    <span>دوره <strong>گیمینگ</strong></span>
                </div>
                <div class="badge">
                    <span class="icon">&#9883;</span>
                    <span>مدرسه مفید <strong>یادگار امام</strong></span>
                </div>
            </div>

            <!-- TITLE -->
            <div class="title-area">
                <div class="main-title">اتم</div>
                <div class="sub-title">مسابقه بزرگ</div>
            </div>

            <!-- GAME CATEGORIES -->
            <div class="game-categories" id="games">
                <div class="game-card">
                    <span class="game-icon">&#9889;</span>
                    <h3>ماینکرفت</h3>
                    <p>بازی‌های خلاقانه و ساختنی</p>
                    <span class="game-tag">&#9654; سی اس</span>
                </div>
                
                <div class="game-card">
                    <span class="game-icon">&#9883;</span>
                    <h3>بازی‌های فیزیک</h3>
                    <p>چالش‌های علمی و حرکتی</p>
                    <span class="game-tag">&#9654; جدید</span>
                </div>
                
                <div class="game-card">
                    <span class="game-icon">&#9733;</span>
                    <h3>بردگیم</h3>
                    <p>بازی‌های فکری و گروهی</p>
                    <span class="game-tag">&#9654; محبوب</span>
                </div>
                
                <div class="game-card">
                    <span class="game-icon">&#9679;</span>
                    <h3>بازی‌های متنوع</h3>
                    <p>تجربه‌های جدید هر هفته</p>
                    <span class="game-tag">&#9654; به زودی</span>
                </div>
            </div>

            <!-- INFO TEXT -->
            <div style="margin: 1.5rem 0; color: #678; font-size: 0.9rem; background: rgba(100,200,255,0.03); padding: 0.8rem; border-radius: 16px; border: 1px solid rgba(100,200,255,0.04);">
                <span style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <span style="font-size: 1.2rem;">&#9679;</span>
                    برای شرکت در مسابقات، به مدرسه مفید مراجعه کنید
                    <span style="font-size: 1.2rem;">&#9679;</span>
                </span>
            </div>

            <!-- FOOTER -->
            <div class="footer">
                <div class="footer-row">
                    <span><span class="icon">&#9883;</span> اتم ۱۴۰۵</span>
                    <span><span class="icon">&#9679;</span> مدرسه مفید یادگار امام</span>
                    <span><span class="icon">&#9733;</span> استاد تمام مهارت‌ها</span>
                </div>
                <div class="credit">
                    ساخته شده توسط <span class="heart">&#9883;</span> اونیکس ماین
                </div>
            </div>

        </div>
    </main>

    <!-- ===== JAVASCRIPT ===== -->
    <script>
        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active link highlight on scroll
        const sections = document.querySelectorAll('.game-container');
        const navLinks = document.querySelectorAll('.nav-menu a');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (window.scrollY >= sectionTop) {
                    current = section.getAttribute('id') || 'home';
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href');
                if (href === '#' && current === 'home') {
                    link.classList.add('active');
                } else if (href === '#games' && current === 'games') {
                    link.classList.add('active');
                } else if (href === '#about' && current === 'about') {
                    link.classList.add('active');
                }
            });
        });

        // Parallax effect on atoms
        document.addEventListener('mousemove', (e) => {
            const atoms = document.querySelectorAll('.atom');
            const x = (e.clientX / window.innerWidth - 0.5) * 20;
            const y = (e.clientY / window.innerHeight - 0.5) * 20;
            
            atoms.forEach((atom, index) => {
                const speed = 0.02 + (index * 0.005);
                atom.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
            });
        });

        // Hover effect on game cards
        document.querySelectorAll('.game-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>

</body>
</html>
