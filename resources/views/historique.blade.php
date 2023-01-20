@include('header')

    <body>
        @include('panel')
        <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-bottom: 0%; margin-left: 15%; width: 85%; border-radius: 15px;">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="border-top-left-radius: 15px">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Date</th>
                    <th scope="col" style="border-top-right-radius: 15px">INFO</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($logs as $log)
                <tr>
                    <th scope="row">{{ $log->id }}</th>
                    <td>{{ $log->type }}</td>
                    <td>{{ $log->date }}</td>
                    <td>{{ $log->info }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <button class="btn btn-secondary mx-sm-3 mb-2" style="min-width:10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>
        <ul class="pagination justify-content-center mb-0">
            {{$logs->links("pagination::bootstrap-4")}}
        </ul>
    </div>
    </body>
</html>
