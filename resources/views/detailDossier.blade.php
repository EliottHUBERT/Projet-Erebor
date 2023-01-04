@include('header')
<body>
        <div class="border border-dark" style="margin-left: 15%;">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">IdUser</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($lesAcces as $acces)
                <tr>
                    <th scope="row">{{ $acces->idUser }}</th>
                    <td>{{ $acces->role }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>