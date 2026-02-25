@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Car Owners</h2>

        <a href="{{ route('owners.create') }}" class="btn btn-primary mb-3">
            Add Owner
        </a>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Actions</th>
            </tr>

            @foreach($owners as $owner)
                <tr>
                    <td>{{ $owner->id }}</td>
                    <td>{{ $owner->name }}</td>
                    <td>{{ $owner->surname }}</td>
                    <td>
                        <a href="{{ route('owners.edit', $owner) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('owners.destroy', $owner) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
