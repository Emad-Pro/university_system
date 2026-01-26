<form action="{{ route('login') }}" method="POST" class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    @csrf
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">بوابة النظام الأكاديمي</h2>
    
    <div class="mb-4">
        <label class="block text-gray-700">الرقم الجامعي</label>
        <input type="text" name="university_id" class="w-full p-2 border rounded mt-1" required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">رقم السجل المدني (كلمة المرور)</label>
        <input type="password" name="national_id" class="w-full p-2 border rounded mt-1" required>
    </div>

    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">دخول</button>
</form>