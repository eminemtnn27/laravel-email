<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Bildirimler</h2>

<table>
  <tr>
    <th>id</th>
    <th>ad</th>
    <th>son bildirim</th>
    <th>ekleme tarihi</th>
    <th>güncelleme tarihi</th>

  </tr>
    @foreach($bildirim as $bil)
      <tr>
        <td>{{$bil->id}}</td>
        <td>{{$bil->name}}</td>
        <td>{{$bil->last_notification}}</td>
        <td>{{$bil->created_at}}</td>
        <td>{{$bil->updated_at}}</td>


      </tr>
@endforeach
</table>

</body>
</html>
