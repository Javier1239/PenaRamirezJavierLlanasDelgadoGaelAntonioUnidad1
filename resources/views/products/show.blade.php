@extends('layouts.app')
 
@section('title', 'Show Product')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Product</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
                {{ $product->title }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Capacidad</label>
            <div class="mt-2">
                {{ $product->capacidad }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Categoria</label>
            <div class="mt-2">
                {{ $product->categoria }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Precio</label>
            <div class="mt-2">
                {{ $product->precio }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Descripcion</label>
            <div class="mt-2">
                {{ $product->descripcion }}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection