@include('header')
<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 100%; border-radius: 15px;">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style='border-top-left-radius: 15px'>IdUser</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($lesAcces as $acces)
                <tr>
                    <th scope="row">{{ $acces->user->login}}</th>
                    <td>{{ $acces->role }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>