<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جامعة الملك سعود :: البوابة الإلكترونية للنظام الأكاديمي</title>
    
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @font-face {
            font-family: 'KSUFont';
            src: url("{{ asset('fonts/HelveticaNeueLTArabic-Roman.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body { 
            font-family: 'KSUFont', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #fff; 
            overflow-x: hidden; 
        }
        
        .text-ksu { color: #0084bd; }
        
        .custom-underline {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 8px;
        }
        .line-blue { width: 170px; height: 5px; background-color: #2e76a8; border-radius: 10px; margin-bottom: 4px; }
        .line-black { width: 150px; height: 5px; background-color: black; border-radius: 10px; }

        .vertical-divider { width: 2px; height: 60px; background-color: #000; margin: 0 40px; }
        .header-divider { width: 1px; height: 35px; background-color: #000; margin: 0 15px; }
        
        .top-nav-item { display: flex; flex-direction: column; align-items: center; color: #333; font-size: 13px; font-weight: bold; cursor: pointer; transition: 0.2s; }
        .top-nav-item:hover { color: #0084bd; }
        .top-nav-item svg { width: 24px; height: 24px; margin-bottom: 5px; fill: none; stroke: #0084bd; stroke-width: 1.5; }

        .grey-title-bar { background-color: #f3f3f3; border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; padding: 25px 0; text-align: center; }

        .login-bar { background-color: #000; padding: 15px 0; display: flex; justify-content: center; width: 100%; position: relative; }
        .login-input { height: 35px; border-radius: 4px; border: none; padding: 0 10px; outline: none; width: 200px; color: #000; font-weight: bold; text-align: right; }
        .login-btn-desk { background-color: #2e76a8; color: white; font-weight: bold; height: 35px; padding: 0 35px; border-radius: 4px; border: none; transition: 0.3s; }
        .login-btn-desk:hover { background-color: #006a99; }

        /* تنسيقات السلايدر */
        .slider-container { overflow: hidden; width: 100%; }
        .slider-wrapper { display: flex; transition: transform 0.5s ease-in-out; width: 100%; }
        .slider-slide { flex-shrink: 0; padding: 0 10px; box-sizing: border-box; }
        
        .slider-arrow { width: 40px; height: 40px; border-radius: 50%; border: 2px solid #2e76a8; display: flex; align-items: center; justify-content: center; color: #2e76a8; cursor: pointer; transition: 0.3s; font-size: 20px; background-color: white; z-index: 10; flex-shrink: 0; }
        .slider-arrow:hover { background-color: #2e76a8; color: white; }
        
        .news-card { border: 1px solid #2e76a8; border-radius: 8px; overflow: hidden; background-color: white; height: 100%; }
        .news-image-container { height: 220px;  position: relative; display: flex; align-items: center; justify-content: center; overflow: hidden; }
        .binary-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ctext x='10' y='30' fill='%23ffffff' fill-opacity='0.1' font-family='monospace' font-size='10'%3E101010%3C/text%3E%3Ctext x='50' y='70' fill='%23ffffff' fill-opacity='0.1' font-family='monospace' font-size='10'%3E010101%3C/text%3E%3C/svg%3E"); opacity: 0.3; }

        .mobile-input { border: 2px solid #d1d5db; border-radius: 6px; padding: 10px; width: 100%; outline: none; font-size: 16px; transition: border-color 0.3s; }
        .mobile-input:focus { border-color: #0084bd; }
        .mobile-btn { background-color: #2e76a8; color: white; font-weight: bold; font-size: 20px; padding: 10px; border-radius: 6px; width: 100%; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <header class="bg-white py-4 px-6 md:px-10 flex justify-between items-center shadow-sm">
        <div class="flex items-center gap-4">
            <img src="{{ asset('images/logo.png') }}" class="h-12 md:h-14 w-auto" alt="KSU Logo">
            <div class="text-right">
                <p class="text-[#2e76a8] font-bold text-xs md:text-sm">عمادة شؤون القبول والتسجيل</p>
                <p class="text-[#2e76a8] text-xs md:text-sm">بوابة النظام الأكاديمي</p>
            </div>
        </div>
        
        <div class="hidden md:flex items-center">
            <a href="#" class="top-nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span>الصفحة الرئيسة</span></a>
            <div class="header-divider"></div>
            <a href="#" class="top-nav-item"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span>اتصل بنا</span></a>
            <div class="header-divider"></div>
            <a href="#" class="top-nav-item"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg><span>English</span></a>
        </div>

        <div class="flex items-center gap-3 md:hidden">
            <span class="text-xl font-bold font-sans">English</span>
            <svg class="w-10 h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </div>
    </header>

    <div class="hidden md:block">
        <div class="grey-title-bar">
            <h2 class="text-2xl font-bold text-black mb-1">الخدمات الإلكترونية ( إطلاق تجريبي )</h2>
            <div class="custom-underline"><div class="line-blue"></div><div class="line-black"></div></div>
        </div>
        
        <div class="bg-white py-8">
            <div class="flex justify-center items-center" dir="rtl">
                <div class="flex flex-col items-center cursor-pointer group">
                    <svg class="w-12 h-12 text-[#2e76a8] group-hover:opacity-80 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M5 21V7l8-4 8 4v14M12 11v4M9 9h.01M15 9h.01M9 13h.01M15 13h.01M9 17h.01M15 17h.01"></path></svg>
                    <span class="font-bold text-black mt-3 text-lg">الطلبات الإلكترونية</span>
                </div>
                <div class="vertical-divider"></div>
                <div class="flex flex-col items-center cursor-pointer group">
                    <svg class="w-12 h-12 text-[#2e76a8] group-hover:opacity-80 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <span class="font-bold text-black mt-3 text-lg">التحقق من الوثائق</span>
                </div>
                <div class="vertical-divider"></div>
                <div class="flex flex-col items-center cursor-pointer group">
                    <svg class="w-12 h-12 text-[#2e76a8] group-hover:opacity-80 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span class="font-bold text-black mt-3 text-lg">أكاديمي</span>
                </div>
                <div class="vertical-divider"></div>
                <div class="flex flex-col items-center cursor-pointer group">
                    <svg class="w-12 h-12 text-[#2e76a8] group-hover:opacity-80 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <span class="font-bold text-black mt-3 text-lg">خدمات أخرى</span>
                </div>
            </div>
        </div>

        <div class="login-bar flex flex-col items-center justify-center py-4">
            <form method="POST" action="{{ route('login') }}" class="flex items-center gap-4">
                @csrf
                <div class="flex items-center gap-2">
                    <label class="text-white font-bold text-sm whitespace-nowrap">اسم المستخدم</label>
                    <input type="text" name="university_id" class="login-input w-60" value="44376803">
                </div>
                <div class="flex items-center gap-2">
                    <label class="text-white font-bold text-sm whitespace-nowrap">كلمة المرور</label>
                    <input type="password" name="national_id" class="login-input w-60">
                </div>
                <button type="submit" class="login-btn-desk whitespace-nowrap">دخول</button>
                <a href="#" class="text-white text-sm font-bold hover:underline mr-2 whitespace-nowrap">نسيت كلمة المرور</a>
            </form>
            
            @if ($errors->any())
                <div class="text-red-500 font-bold text-sm mt-3 bg-white px-4 py-1 rounded shadow">
                    اسم المستخدم / كلمة المرور غير صحيح
                </div>
            @endif
        </div>
    </div>

    <div class="block md:hidden px-6 mt-10 mb-10">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="flex justify-center items-center gap-3 mb-8">
                <h1 class="text-3xl font-bold text-black">تسجيل الدخــــــول</h1>
                <img src="{{ asset('images/loginIcon.svg') }}" alt="Logo" class="w-12 h-12">
            </div>

            <div class="mb-4 text-right">
                <label class="text-[#2e76a8] font-bold text-xl mb-2 block">اسم المستخدم</label>
                <input type="text" name="university_id" class="mobile-input text-right" value="44376803">
            </div>
            
            <div class="mb-8 text-right">
                <label class="text-[#2e76a8] font-bold text-xl mb-2 block">كلمة المرور</label>
                <input type="password" name="national_id" class="mobile-input text-right">
            </div>
            
            @if ($errors->any())
                <div class="text-red-600 font-bold text-lg text-center mb-4">
                    اسم المستخدم / كلمة المرور غير صحيح
                </div>
            @endif

            <button type="submit" class="mobile-btn hover:opacity-90 transition shadow-lg">دخول</button>
            <div class="mt-4 text-left"><a href="#" class="text-[#2e76a8] font-bold text-lg">نسيت كلمة المرور</a></div>
        </form>
    </div>

    <div class="text-center py-10">
        <h2 class="text-2xl font-bold text-black mb-1">إعلانات البوابة الالكترونية</h2>
        <div class="custom-underline">
            <div class="line-blue"></div>
            <div class="line-black"></div>
        </div>
    </div>

    <div class="flex justify-center items-center gap-2 px-4 mb-20 max-w-7xl mx-auto relative">
        <button type="button" class="slider-arrow absolute right-0 md:relative z-20" id="nextBtn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
        </button>

        <div class="slider-container">
            <div class="slider-wrapper" id="sliderWrapper">
                
                <div class="slider-slide w-full md:w-1/2 lg:w-1/3">
                    <div class="news-card">
                        <div class="flex justify-center news-image-container">
                            <div class="binary-bg"></div>
                            <img src="{{ asset('images/security.png') }}" class="h-32 opacity-90 relative z-10" alt="Security" onerror="this.style.display='none'">
                        </div>
                        <div class="p-6 text-center bg-white min-h-[120px] flex items-center justify-center">
                            <p class="font-bold text-black text-xl leading-relaxed">
                                --إعلان لمستخدمي البوابة من--<br>
                                --أعضاء هيئة التدريس فقط--
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slider-slide w-full md:w-1/2 lg:w-1/3">
                    <div class="news-card">
                        <div class="flex justify-center news-image-container ">
                                <img src="{{ asset('images/20260126000620120_3.jpg') }}" class="h-32 relative z-10" alt="Calendar">
                        </div>
                        <div class="p-6 text-center bg-white min-h-[120px] flex items-center justify-center">
                            <p class="font-bold text-black text-xl leading-relaxed">
                                الجدول الزمني للتسجيل للفصل الدراسي الثاني 2026-2025
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slider-slide w-full md:w-1/2 lg:w-1/3">
                    <div class="news-card">
                        <div class="flex justify-center news-image-container ">
                            <img src="{{ asset('images/20260126000348119_3.png') }}" class="h-32 relative z-10" alt="Rules">
                        </div>
                        <div class="p-6 text-center bg-white min-h-[120px] flex items-center justify-center">
                            <p class="font-bold text-black text-xl leading-relaxed">
                                اللائحة التنظيمية للشؤون الدراسية والأكاديمية
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slider-slide w-full md:w-1/2 lg:w-1/3">
                    <div class="news-card">
                        <div class="flex justify-center news-image-container ">
                            <img src="{{ asset('images/20260126000787118_3.png') }}" class="h-32 relative z-10" alt="Rules">
                        </div>
                        <div class="p-6 text-center bg-white min-h-[120px] flex items-center justify-center">
                            <p class="font-bold text-black text-xl leading-relaxed">
                                بوابة الخريجين
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <button type="button" class="slider-arrow absolute left-0 md:relative z-20" id="prevBtn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
    </div>

    <footer class="bg-[#0084bd] py-4 px-6 mt-10">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <img src="{{ asset('images/footerLogo.svg') }}" class="h-12 brightness-10" alt="Footer Logo" onerror="this.style.display='none'">
            <p class="text-white text-xs md:text-sm font-bold">جميع الحقوق محفوظة - لدى جامعة الملك سعود</p>
            <img src="https://upload.wikimedia.org/wikipedia/ar/f/f5/Saudi_Vision_2030_logo.svg" class="h-12 brightness-0 invert opacity-80" alt="Vision 2030">
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.getElementById('sliderWrapper');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const slides = document.querySelectorAll('.slider-slide');
            let currentIndex = 0;

            // دالة لمعرفة كم كارت ظاهر في الشاشة حالياً
            function getItemsPerScreen() {
                if (window.innerWidth >= 1024) return 3; // شاشات كبيرة
                if (window.innerWidth >= 768) return 2;  // تابلت
                return 1; // موبايل
            }

            function updateSlider() {
                const itemsPerScreen = getItemsPerScreen();
                const movePercentage = 100 / itemsPerScreen;
                const offset = currentIndex * movePercentage;
                wrapper.style.transform = `translateX(${offset}%)`;
            }

            // زر التالي
            prevBtn.addEventListener('click', () => {
                const itemsPerScreen = getItemsPerScreen();
                const maxIndex = slides.length - itemsPerScreen;
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateSlider();
            });

            // زر السابق
            nextBtn.addEventListener('click', () => {
                const itemsPerScreen = getItemsPerScreen();
                const maxIndex = slides.length - itemsPerScreen;
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = maxIndex;
                }
                updateSlider();
            });

            // تحديث السلايدر عند تغيير حجم الشاشة
            window.addEventListener('resize', () => {
                currentIndex = 0; 
                updateSlider();
            });
        });
    </script>

</body>
</html>