<table class="table table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['nom']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>