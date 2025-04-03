@extends('layouts.app')

@section('title', 'Tambah Promosi')
@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Tambah Promosi Baru</h1>
        
        <form method="POST" action="{{ route('promotions.store') }}" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Judul Promosi</label>
                <input type="text" name="title" 
                       class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Deskripsi</label>
                <textarea name="description" rows="4" 
                          class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Gambar Promosi</label>
                <input type="file" name="image" 
                       class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500" required accept="image/*">
            </div>
            
            <div class="flex justify-end space-x-4">
                <a href="{{ route('promotions.index') }}" 
                   class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition">Batal</a>
                <button type="submit" 
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    Tambah
                </button>
            </div>
        </form>
    </div>
@endsection