@extends('layouts.app')


@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Color</th>
                <th>Size</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clothes_list as $cloth)
                <tr>
                    <td>{{ $cloth->id }}</td>
                    <td>{{ $cloth->type }}</td>
                    <td>{{ $cloth->color }}</td>
                    <td>{{ $cloth->size }}</td>
                </tr>


            @endforeach
        </tbody>

    </table>

@endsection

@section('title', 'Clothes Index')
