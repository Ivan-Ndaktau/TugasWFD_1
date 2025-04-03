@extends('layouts.app')

@section('title', 'Edit Promosi')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Edit Promosi</h1>
        
        <form action="{{ route('promotions.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="title" class="block text-gray-700 mb-2">Judul Promosi</label>
                <input type="text" name="title" id="title" value="{{ old('title', $promotion->title) }}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="5" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('description', $promotion->description) }}</textarea>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Gambar Saat Ini</label>
                <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-48 h-32 object-cover mb-2">
                <label for="image" class="block text-gray-700 mb-2">Ganti Gambar (Opsional)</label>
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
            </div>
            
            <div class="flex justify-end space-x-4">
                <a href="{{ route('promotions.show', $promotion->id) }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition">Batal</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Simpan Perubahan</button>
            </div>
        </form>
    </div>
@endsection