@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Features') }}
    </h2>
@endsection

@section('content')
    @if($features)
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
            @foreach($features as $feature)
                <tbody>
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>{{ $feature->slug }}</td>
                    <td>{{ $feature->title }}</td>
                    <td>{{ $feature->description }}</td>
                    <td>
                        <a href="{{ route('features.show', $feature) }}">Show</a>
                        <a href="{{ route('features.edit', $feature) }}">Edit</a>
                        {{ html()->form('DELETE', route('features.destroy', $feature))->open() }}
                        {{ html()->submit('Delete') }}
                        {{ html()->form()->close() }}
                    </td>
                </tr>
                @endforeach
                </tbody>
        </table>
    @else
        <p>No features yet.</p>
    @endif
@endsection
