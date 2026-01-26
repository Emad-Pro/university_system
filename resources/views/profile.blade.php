<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بوابة النظام الأكاديمي - الملف الشخصي</title>
    
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* تعريف الخط */
        @font-face {
            font-family: 'KSUFont';
            src: url("{{ asset('fonts/HelveticaNeueLTArabic-Roman.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body { 
            font-family: 'KSUFont', 'Segoe UI', sans-serif; 
            background-color: #fcfcfc;
        }
        
        .text-ksu { color: #0084bd; }
        
        /* تنسيق الكروت */
        .student-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: 1px solid #e5e7eb;
            overflow: hidden;
            margin-bottom: 20px;
        }

        /* تنسيق الأيقونات */
        .info-icon svg {
            width: 24px;
            height: 24px;
            fill: none;
            stroke: #374151;
            stroke-width: 1.8;
        }
        
        /* فاصل الهيدر الأسود */
        .header-border { border-bottom: 5px solid #000; }

        /* خط العناوين (أزرق وأسود) */
.custom-underline {
    display: flex;
    flex-direction: column;
    align-items: center; /* هذا يضمن تمركز الخطوط في المنتصف */
    margin-top: 5px;
}

.line-blue { 
    width: 120px; /* تم زيادة العرض من 50 إلى 100 */
    height: 4px; 
    background-color: #0084bd; 
    border-radius: 10px; 
    margin-bottom: 4px; 
}

.line-black { 
    width: 100px;  /* تم زيادة العرض من 40 إلى 70 */
    height: 4px; 
    background-color: black; 
    border-radius: 10px; 
}
        /* زر الرجوع */
        .btn-back {
            background-color: #0084bd;
            color: white;
            padding: 8px 25px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .btn-back:hover { background-color: #006a99; }
    </style>
</head>
<body>

    <header class="bg-white py-3 px-5 flex justify-between items-center header-border sticky top-0 z-50">
        
        <div class="flex items-center gap-4">
            <img src="{{ asset('images/logo.png') }}" class="h-10 md:h-12 w-auto" alt="KSU Logo">
        </div>

        <!-- <div class="hidden md:flex items-center text-gray-600 font-bold text-sm">
            <a href="#" class="flex flex-col items-center hover:text-[#0084bd] transition">
                <svg viewBox="0 0 24 24" class="w-5 h-5 mb-1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <span>الصفحة الرئيسة</span>
            </a>
            <div class="w-[1px] h-8 bg-gray-300 mx-4"></div>
            <a href="#" class="flex flex-col items-center hover:text-[#0084bd] transition">
                <svg viewBox="0 0 24 24" class="w-5 h-5 mb-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <span>اتصل بنا</span>
            </a>
            <div class="w-[1px] h-8 bg-gray-300 mx-4"></div>
            <a href="#" class="flex flex-col items-center hover:text-[#0084bd] transition">
                <svg viewBox="0 0 24 24" class="w-5 h-5 mb-1"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                <span>English</span>
            </a>
        </div> -->

        <div class="flex items-center gap-4"> 
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button type="submit" class="text-black font-bold text-lg md:text-xl font-sans hover:text-red-600 transition">
                    خروج
                </button>
            </form>

            <div class="flex flex-col gap-[5px] cursor-pointer">
                <div class="w-7 h-[3px] bg-black rounded-full"></div>
                <div class="w-5 h-[3px] bg-black rounded-full self-end"></div>
                <div class="w-7 h-[3px] bg-black rounded-full"></div>
            </div>
        </div>
    </header>

    <main class="p-4 md:p-8 max-w-2xl mx-auto min-h-screen pb-20">
        
        <div class="student-card p-6 md:p-8 relative">
            <div class="flex justify-between items-start mb-8">    
                <div class="mr-4">
                    <svg class="w-20 h-20 text-[#1f2937]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="10" r="3"></circle>
                        <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                    </svg>
                </div>
                <div class="text-right flex-1">
                    <p class="text-black font-bold text-lg mb-1">اسم الطالب</p>
                    
                    <h2 class="text-ksu font-bold text-xl md:text-2xl mb-2">{{ $student->name }}</h2> 
                    
                    <p class="text-black font-bold text-lg">فصل التسجيل</p>
                </div>
            </div>

            <div class="space-y-6">
                <div class="text-right">
                    <div class="flex items-center gap-2 mb-1 justify-end flex-row-reverse">
                        <span class="text-black font-bold text-lg">رقم الطالب</span> 
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                        </div>
                    </div>
                    
                    <p class="text-ksu font-bold text-xl font-mono" dir="ltr">{{ $student->university_id }}</p>
                </div>

                <div class="text-right">
                    <div class="flex items-center gap-2 mb-1 justify-end flex-row-reverse">
                        <span class="text-black font-bold text-lg">الكلية</span>
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                        </div>
                    </div>
                    
                    <p class="text-ksu font-bold text-xl">{{ $student->college }}</p>
                </div>

                <div class="text-right">
                    <div class="flex items-center gap-2 mb-1 justify-end flex-row-reverse">
                        <span class="text-black font-bold text-lg">التخصص</span>
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                        </div>
                    </div>
                    
                    <p class="text-ksu font-bold text-xl">{{ $student->major }}</p>
                </div>

                <div class="text-right">
                    <div class="flex items-center gap-2 mb-1 justify-end flex-row-reverse">
                        <span class="text-black font-bold text-lg">المقر</span>
                    </div>
                    
                    <p class="text-ksu font-bold text-xl">{{ $student->campus }}</p>
                </div>
            </div>
        </div>

        <div class="student-card p-6 min-h-[300px] flex flex-col justify-between">
            <div>
                <div class="text-left mb-6">
                    <p class="text-black font-bold text-lg mb-1">الفصل الثاني 1447/1448</p>
                    <div class="flex flex-col items-center">
                        <h2 class="text-black font-bold text-2xl">جدول الطالب</h2>
                        <div class="custom-underline items-center">
                            <div class="line-blue"></div>
                            <div class="line-black"></div>
                        </div>
                    </div>
                </div>

                <div class="text-center py-10">
                    @if(count($schedules) > 0)
                        <p class="text-green-600 font-bold">هنا يظهر جدول الحصص...</p>
                    @else
                        <p class="text-red-600 font-bold text-xl">لا يوجد مقررات مسجلة</p>
                         <p class="text-red-600 font-bold text-xl"> سيتم إدارج الجدول الدراسي للفصل الثاني 1447هـ - 1448 هـ قريباً
                            
                         </p>
                    @endif
                </div>
            </div>

            <div class="text-left mt-4">
                <button class="btn-back">رجوع</button>
            </div>
        </div>

    </main>

    <footer class="bg-[#0084bd] py-4 px-6 mt-10 w-full">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <img src="{{ asset('images/footerLogo.svg') }}" class="h-12 brightness-10" alt="Footer Logo" onerror="this.style.display='none'">
            <p class="text-white text-xs md:text-sm font-bold">جميع الحقوق محفوظة - لدى جامعة الملك سعود</p>
            <img src="https://upload.wikimedia.org/wikipedia/ar/f/f5/Saudi_Vision_2030_logo.svg" class="h-12 brightness-0 invert opacity-80" alt="Vision 2030">
        </div>
    </footer>

</body>
</html>