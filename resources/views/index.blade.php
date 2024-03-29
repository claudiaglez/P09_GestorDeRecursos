@extends('templates.app')

@section('title', 'Home')

@include('templates._partials.banner', [
    'banerTitle' => '📚RECURSOS📂',
    'bannerDescription' => 'Encuentra aquí todos los recursos ordenados',
    'showButton' => true,
    'buttonText' => 'Crear nuevo recurso'
])

@section('content')

@if($resources->isEmpty())
<h2 class="text-center mt-4 font-semibold">Aún no hay recursos disponibles</h2>
@else
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
   
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
           
                <th scope="col" class="px-6 py-3">Título</th>
                <th scope="col" class="px-6 py-3">Tipo</th>
                <th scope="col" class="px-6 py-3">Stack</th>
                <th scope="col" class="px-6 py-3">Responsable</th>
                <th scope="col" class="px-6 py-3">Grabación</th>
                <th scope="col" class="px-6 py-3">Presentación</th>
                <th scope="col" class="px-6 py-3">Repo</th>
                <th scope="col" class="px-6 py-3">Extras</th>
                <th scope="col" class="px-6 py-3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($resources as $resource) 
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-wrap dark:text-white">
                <a href='#'>{{ $resource->titulo }}
                </th>
                <td class="px-6 py-4">
                <a href='#'>{{ $resource->tipo->tipo }}
                </td>
                <td class="px-6 py-4">
                <a href='#'>{{ $resource->stack->stack }}
                </td>
                <td class="px-6 py-4">
                <a href='#'>{{ $resource->responsable }}
                </td>
                <td class="px-6 py-4">
                <a href='#'>{{ $resource->grabacion }}
                </td>
                <td class="px-6 py-4">
                <a href='#'>{{ $resource->presentacion }}
                </td>
                <td class="px-6 py-4">
                <a href='#'>{{ $resource->repo }}
                </td>
                <td class="px-6 py-4">
                <a href='#'>{{ $resource->id_extras }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('recurso.edit', $resource->id)}}" class="font-medium text-black dark:text-white hover:text-green-400 dark:hover:text-green-400">Editar</a>
                    <form action="{{ route('recurso.destroy', $resource->id) }}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="font-medium text-black dark:text-white hover:text-red-600 dark:hover:text-red-500">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
       
    </table>
    @endif
</div>
@endsection