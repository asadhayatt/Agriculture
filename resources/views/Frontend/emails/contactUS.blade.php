<x-mail::message>
{{-- # Detail from Contact Us page --}}

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>


<span>Admin Mail</span>
<h2>Detail From Contact Us Page</h2>
<h6>Client detail</h6>
<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td>{{ $contact->name }}</td>
  </tr>
  <tr>
    <th>Email:</th>
    <td>{{ $contact->email }}</td>
  </tr>
  <tr>
    <th>Contact Number:</th>
    <td>{{ $contact->phone }}</td>
  </tr>
  <tr>
    <th>Message:</th>
    <td>{{ $contact->message }}</td>
  </tr>
</table>

</body>
</html>

<br>
Platform,<br>
Agri Connect Corp.
</x-mail::message>
