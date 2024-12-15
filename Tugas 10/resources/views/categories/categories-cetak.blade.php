<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Categories</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Categories</h3>
  <table class="table-data">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Transportation</th>
        <th scope="col">Region</th>
        <th scope="col">Date</th>
        <th scope="col">Name</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Time</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($categories as $categories)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $categories->updated_at }}</td>
        <td>{{ $categories->transportation }}</td>
        <td>{{ $categories->region }}</td>
        <td>{{ $categories->date }}</td>
        <td>{{ $categories->name }}</td>
        <td>{{ $categories->from }}</td>
        <td>{{ $categories->to }}</td>
        <td>{{ $categories->time }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="7" align="center">Tidak ada data</td>
      </tr>
      @endforelse
    </tbody>
</body>

</html>