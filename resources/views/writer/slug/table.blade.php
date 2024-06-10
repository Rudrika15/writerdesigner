<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($writers as $writer)
            <tr>
                <td>{!! $writer->title !!}</td>
                <td>{{ $writer->category->name }}</td>
                <td>{{ $writer->status }}</td>

                <td><a class="btn btn-primary shadow-none"
                        href="{{ route('writer.slugs.edit') }}/{{ $writer->id }}">Edit</a>
                    <a class="btn btn-danger shadow-none" onclick="return confirm('Do You Really Want To Delete It')"
                        href="{{ route('writer.slugs.delete') }}/{{ $writer->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
