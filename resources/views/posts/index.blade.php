@php
    Theme::layout('homepage')
@endphp
<h1>Danh sách đã tạo</h1>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>description</th>


    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->name }}</td>
            <td>{{ $post->description }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
