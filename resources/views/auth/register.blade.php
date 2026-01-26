<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل طالب جديد</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Cairo', sans-serif; background-color: #fcfcfc; }
        .ksu-btn {
            background-color: #0084bd; color: white; padding: 10px; 
            border-radius: 6px; width: 100%; font-weight: bold; font-size: 18px;
            transition: 0.3s;
        }
        .ksu-btn:hover { background-color: #006a99; }
        .ksu-input {
            border: 1px solid #d1d5db; border-radius: 6px; padding: 10px; width: 100%;
            outline: none; transition: border-color 0.3s;
        }
        .ksu-input:focus { border-color: #0084bd; box-shadow: 0 0 0 3px rgba(0,132,189,0.1); }
        .label { font-weight: bold; color: #0084bd; margin-bottom: 5px; display: block; }
    </style>
</head>
<body>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border border-gray-200">
            
            <div class="text-center mb-8">
                <img src="{{ asset('images/logo.png') }}" class="h-16 mx-auto mb-4" alt="Logo">
                <h1 class="text-2xl font-bold text-gray-800">تسجيل طالب جديد</h1>
                <div class="w-20 h-1 bg-[#0084bd] mx-auto mt-2 rounded"></div>
            </div>

            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="label">اسم الطالب (كاملاً)</label>
                    <input type="text" name="name" class="ksu-input" placeholder="مثال: محمد بن فريد..." required>
                </div>

                <div>
                    <label class="label">الرقم الجامعي</label>
                    <input type="text" name="university_id" class="ksu-input" placeholder="443100121" required>
                </div>

                <div>
                    <label class="label">الكلية</label>
                    <input type="text" name="college" class="ksu-input" placeholder="مثال: الطب" required>
                </div>

                <div>
                    <label class="label">التخصص</label>
                    <input type="text" name="major" class="ksu-input" placeholder="مثال: طب وجراحة" required>
                </div>

                <div>
                    <label class="label">كلمة المرور (السجل المدني)</label>
                    <input type="password" name="password" class="ksu-input" required>
                </div>

                <button type="submit" class="ksu-btn mt-6">حفظ وتسجيل دخول</button>
            </form>
            
            <div class="mt-4 text-center">
                <a href="{{ route('login') }}" class="text-gray-500 text-sm hover:text-[#0084bd]">لديك حساب بالفعل؟ تسجيل الدخول</a>
            </div>

        </div>
    </div>

</body>
</html>