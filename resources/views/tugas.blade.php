@extends('app')
@section('content')

<table>
    <thead>
        <tr>
        <th> Id </th>
        <th> Author </th>
        <th> Title </th>
        <th> Body </th>
        <th> Keyword </th>
        <th> Aksi </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($data as $d )
        <tr>
            <td>{{ $loop->iteration }} </td>
            <td>{{ $d->author }} </td>
            <td>{{ $d->title }} </td>
            <td>{{ $d->body }} </td>
            <td>{{ $d ->keyword }} </td>
            <td>
                <a href="{{ route('tugas.edit', $d->id) }}" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ route('tugas.delete', ['id' => 1]) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

