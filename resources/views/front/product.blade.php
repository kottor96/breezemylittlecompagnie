@extends('layouts.layout')

@section('tilte','produit')

@section('content')
    <section>
        <div><h1>Liste des produit</h1></div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>image</th>
                        <th>nom</th>
                        <th>desctiption</th>
                        <th>prix</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $produit)
                        <tr>
                            <td><img src="{{$produit['image_url']}}" alt=""></td>
                            <td>{{$produit['title']}}</td>
                            <td>{{$produit['description']}}</td>
                            <td>{{$produit['prix']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection