<!DOCTYPE html>
<html>
<head>
  <title>HTML Table Example</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>
<body>
<button type="button"><a href="/create_role_index">create role</a></button>
 <button type="button"><a href="/get_role_list/Status/NA/Active">List Active Role</a></button>
 <button type="button"><a href="/get_role_list/Status/NA/Inactive">List Inactive Role</a></button>
 <button type="button"><a href="/get_role_list/ALL/NA/ALL">List ALL Role</a></button>

  <table>
    <thead>
      <tr>
        <th>SL.No</th>
        <th>Role Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($response_data as $i=> $data)
      <tr>
        <td>{{$i+1}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->status}}</td>
        <td>
            <button type="button">
                <a href="/edit_role/{{$data->id}}">
             Edit</a></button>

        <button type="button">
            <a href="/delete_role/{{$data->id}}">
            Delete</a></button>
</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
