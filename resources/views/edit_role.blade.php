<!DOCTYPE html>
<html>
<head>
  <title>Role Management</title>
  <style>
    .container {
      width: 300px;
      padding: 16px;
      background-color: #f2f2f2;
      margin: 0 auto;
      margin-top: 100px;
      border: 1px solid #ccc;
    }

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }
  </style>
</head>
<body>
<h2> <centre> Edit Role </centre> </h2>
  <form action="/update_role" method="post">
    @csrf
    <div class="container">
      <label for="Role Name"> Role Name: </label>
      <input type="text" value="{{$data->name}}" id="role_name" name="role_name"  >
      <input type="hidden" value="{{$data->id}}" name="record_id"  >
      <input type="hidden" value="{{$data->status}}" id="status_id"   >

      <label> status:</label>
      <input type="radio" value="Active" id="status1"  name="status">
      <label> Active </label>
      <input type="radio" value="Inactive" id="status2"  name="status">
      <label> Inactive </label>
      <script>
        let status_value=document.getElementById("status_id").value;
        //alert(status_value);
        if (status_value=="Active") {
          document.getElementById('status1').checked = true;
        } else {
          document.getElementById('status2').checked = true;
          }
        
        </script>
      <br/><br/><br/>
      <button type="update">
      <label>
        <input type="submit">
      </label>
    </div>
  </form>

</body>
</html>

