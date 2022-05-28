<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
h2{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}
</style>
</head>
<body>


<h2>Reports Payments</h2>
<table id="customers">
  <tr>
    <th>No.</th>
    <th>From Project</th>
    <th>Amount</th>
    <th>Desciption Payment</th>
    <th>Payment Status</th>
    <th>Payment Date</th>
  </tr>
  <?php $i=1; ?>
  @foreach ($data as $item)    
  <tr>
    <td>{{ $i }}</td>
    <td>{{ $item->project->name_project }}</td>
    <td>Rp.{{ number_format($item->amount, '2',',','.') }}</td>
    <td>{{ $item->description }}</td>
    @if ($item->status === 1)
        <td style="color: #04AA6D">Paid Off</td>
    @else
        <td style="color: red">No Yet Paid</td>
    @endif
    <td>{{ $item->date }}</td>
  </tr>
  <?php $i++; ?>
  @endforeach
</table>

</body>
</html>
