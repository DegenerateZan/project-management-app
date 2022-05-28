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
  color: rgb(0, 0, 0);
}
h2{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}
</style>
</head>
<body>


<h2>Reports Salary</h2>
<table id="customers">
  <tr>
    <th>No.</th>
    <th>Name Developer</th>
    <th>Amount</th>
    <th>Status</th>
    <th>Date</th>
  </tr>
  <?php $i=1; ?>
  @foreach ($data as $item)    
  <tr>
    <td>{{ $i }}</td>
    <td>{{ $item->developer->name_developer }}</td>
    <td>Rp.{{ number_format($item->total_salary_received, '2',',','.') }}</td>
    @if ($item->payroll_status === 1)
        <td style="color: #04AA6D">Paid Off</td>
    @else
        <td style="color: red">No Yet Paid</td>
    @endif
    <td>{{ $item->payroll_date }}</td>
  </tr>
  <?php $i++; ?>
  @endforeach
</table>

</body>
</html>
