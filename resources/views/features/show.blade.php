@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Feature') }}
    </h2>
@endsection

@section('content')
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $feature->id }}</td>
            <td>{{ $feature->slug }}</td>
            <td>{{ $feature->title }}</td>
            <td>{{ $feature->description }}</td>
            <td>
                <a href="{{ route('features.edit', $feature) }}">Edit</a>
                {{ html()->form('DELETE', route('features.destroy', $feature))->open() }}
                {{ html()->submit('Delete') }}
                {{ html()->form()->close() }}
            </td>
        </tr>
        </tbody>
    </table>
@endsection
