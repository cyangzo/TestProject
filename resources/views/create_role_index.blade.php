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
<h2> Role Management </h2>
  <form action="create_role" method="post">
    @csrf
    <div class="container">
      <label for="Role Name"> Role Name: </label>
      <input type="text" id="role_name"placeholder="Enter Role Name " name="role_name">

      <label> status:</label>
      <input type="radio" value="Active" id="status1"  name="status">
      <label> Active </label>
      <input type="radio" value="Inactive" id="status2"  name="status">
      <label> Inactive </label>
      <br/><br/><br/>
      <button type="submit">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Submit
      </label>
    </div>
  </form>

</body>
</html>

