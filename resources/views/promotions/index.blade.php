@extends('layouts.app')

@section('title', 'Daftar Promosi')
@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Daftar Promosi</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($promotions as $promotion)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <img src="{{ asset('storage/' . $promotion->image) }}" 
                 alt="{{ $promotion->title }}" 
                 class="w-full h-48 object-cover">
            
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2">{{ $promotion->title }}</h2>
                <p class="text-gray-600 mb-4 line-clamp-2">{{ $promotion->description }}</p>
                
                <div class="flex justify-between items-center">
                    <a href="{{ route('promotions.show', $promotion->id) }}" 
                       class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">Detail</a>
                    
                    <div class="flex space-x-2">
                        <a href="{{ route('promotions.edit', $promotion->id) }}" 
                           class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">Edit</a>
                        
                        <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition"
                                    onclick="return confirm('Yakin menghapus promosi ini?')">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection