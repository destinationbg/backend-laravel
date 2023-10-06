@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Provinces') }}
    </h2>
@endsection

@section('content')
    @if ($provinces)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Slug</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach ($provinces as $province)
                <tbody>
                    <tr>
                        <td>{{ $province->id }}</td>
                        <td>{{ $province->slug }}</td>
                        <td>{{ $province->name }}</td>
                        <td>{{ $province->description }}</td>
                        <td>
                            <a href="{{ route('provinces.show', $province) }}">Show</a>
                            <a href="{{ route('provinces.edit', $province) }}">Edit</a>
                            {{ html()->form('DELETE', route('provinces.destroy', $province))->open() }}
                            {{ html()->submit('Delete') }}
                            {{ html()->form()->close() }}
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No provinces yet.</p>
    @endif
@endsection
