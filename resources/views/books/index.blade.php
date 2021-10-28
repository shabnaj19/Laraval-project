@extends('books.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Books</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}">Add Book</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Publish Date</th>
            <th>Price</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->bookname }}</td>
                <td>{{ $book->authorname }}</td>
                <td>{{ $book->publishdate }}</td>
                <td>{{ $book->price }}</td>
                <td>
                    <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">View</a>

                        <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $books->links() !!}

@endsection