<h1>About</h1>
@if ($abouts->count())
    <table class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
                <th>Mission</th>
                <th>Vision</th>
                <th>History</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <td>{{ $about->mission }}</td>
                    <td>{{ $about->vision }}</td>
                    <td>{{ $about->history }}</td>
                    <td><a class="btn btn-info" href="{{ route('admin.about.edit',array($about->id)) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
@else
    There are no About info
@endif