@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Regions') }}
    </h2>
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Color</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $region->id }}</td>
                <td>{{ $region->slug }}</td>
                <td>{{ $region->color }}</td>
                <td>{{ $region->title }}</td>
                <td>{{ $region->description }}</td>
                <td>
                    <a href="{{ route('regions.edit', $region) }}">Edit</a>
                    {{ html()->form('DELETE', route('regions.destroy', $region))->open() }}
                    {{ html()->submit('Delete') }}
                    {{ html()->form()->close() }}
                </td>
            </tr>
        </tbody>
    </table>
@endsection
