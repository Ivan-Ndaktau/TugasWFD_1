@extends('layouts.app')

@section('title', $promotion->title)
@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
    
    <img src="{{ asset('storage/' . $promotion->image) }}" 
         alt="{{ $promotion->title }}" 
         class="w-full h-64 object-cover">
    
    <div class="p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $promotion->title }}</h1>
        <p class="text-gray-600 mb-4">{{ $promotion->description }}</p>
        
        <div class="flex items-center text-sm text-gray-500 mb-4">
            <span>Dibuat: {{ $promotion->created_at->format('d M Y') }}</span>
        </div>
        
        <div class="flex space-x-3">
            <a href="{{ route('promotions.edit', $promotion->id) }}" 
               class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">
                Edit
            </a>
            <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition"
                        onclick="return confirm('Yakin ingin menghapus promosi ini?')">
                    Hapus
                </button>
            </form>
            <a href="{{ route('promotions.index') }}" 
               class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection