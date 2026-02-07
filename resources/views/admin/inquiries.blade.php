<h2>All Inquiries</h2>

<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
</tr>

@foreach($inquiries as $inq)
<tr>
    <td>{{ $inq->name }}</td>
    <td>{{ $inq->email }}</td>
    <td>{{ $inq->phone }}</td>
    <td>{{ $inq->message }}</td>
</tr>
@endforeach
</table>
