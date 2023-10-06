@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Regions') }}
    </h2>
@endsection

@section('content')
    @if ($regions)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Slug</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach ($regions as $region)
                <tbody>
                    <tr>
                        <td>{{ $region->id }}</td>
                        <td>{{ $region->slug }}</td>
                        <td>{{ $region->title }}</td>
                        <td>
                            <a href="{{ route('regions.show', $region) }}">Show</a>
                            <a href="{{ route('regions.edit', $region) }}">Edit</a>
                            {{ html()->form('DELETE', route('regions.destroy', $region))->open() }}
                            {{ html()->submit('Delete') }}
                            {{ html()->form()->close() }}
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No regions yet.</p>
    @endif
@endsection
