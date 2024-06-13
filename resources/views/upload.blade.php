@extends('layouts.main')
@push('title')
<title>Login Form</title>
@endpush

@section('main-section')

<div class="flex items-center justify-center min-h-screen bg-slate-800">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <form action="{{url('/upload')}}" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="file-input">
                    Upload Image
                </label>
                <input id="file-input" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer focus:outline-none" accept="image/*">
            </div>
            <div id="preview-container" class="mt-4">
                <img id="image-preview" class="hidden w-full h-auto rounded-md" />
            </div>

            <button class="btn-primary">Submit</button>
        </form>
    </div>
</div>
    <script>
        document.getElementById('file-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('image-preview');
                    img.src = e.target.result;
                    img.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    @endsection