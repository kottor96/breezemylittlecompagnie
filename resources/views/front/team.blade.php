@extends('layouts.layout')

@section('title','team')

@section('content')
    <section>
        <div><h1>liste des employer</h1></div>
        <div class="flex gap-1 flex-wrap mx-auto">
            @foreach ($team as $employe)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="{{ $employe->profil->image }}" alt="{{ $employe['nom'] }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $employe->departement->name }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
