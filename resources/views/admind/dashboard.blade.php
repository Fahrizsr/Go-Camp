<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Sidebar Styling */
    .sidebar {
      width: 240px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #2f855a;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .sidebar a {
      color: white;
      display: block;
      padding: 10px;
      margin-bottom: 5px;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
    }
    .sidebar a:hover {
      background-color: #38a169;
    }
    .sidebar .logout {
      margin-top: auto;
      padding-top: 10px;
      border-top: 1px solid #fff;
    }
    /* Main Content Area */
    .content {
      margin-left: 260px;
      padding: 20px;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #2f855a;
      color: white;
      padding: 15px;
    }
    .table-container {
      margin-top: 20px;
    }
    .table {
      width: 100%;
      border-collapse: collapse;
    }
    .table th, .table td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }
    .table th {
      background-color: #2f855a;
      color: white;
    }
    .table tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Sidebar -->
  <div class="sidebar">
    <h2 class="text-2xl font-bold text-white mb-6">Hello, Admin</h2>
    <div>
      <a href="#">Dashboard</a>
      <a href="#">Customers</a>
      <a href="#">Category</a>
      <a href="#">Products</a>
      <a href="#">Orders</a>
    </div>
    <div class="logout">
      <a href="#" class="text-white">Logout</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="content">
    <!-- Header -->
    <div class="header">
      <span class="text-lg">Hello, Admin</span>
      <div>
        <button class="bg-green-400 text-white py-2 px-4 rounded-md hover:bg-green-500">Logout</button>
      </div>
    </div>

    <!-- Customer Table -->
    <div class="table-container">
      <h2 class="text-2xl font-bold text-gray-700 mb-6">All Customers</h2>
      <table class="table">
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Username</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>reza</td>
            <td>rezabagus795@gmail.com</td>
          </tr>
          <tr>
            <td>2</td>
            <td>reza</td>
            <td>Chikkiafiani@gmail.com</td>
          </tr>
          <tr>
            <td>3</td>
            <td>faridpendaki</td>
            <td>farid@gmail.com</td>
          </tr>
          <tr>
            <td>4</td>
            <td>faridpendaki</td>
            <td>farid@gmail.cok</td>
          </tr>
          <tr>
            <td>5</td>
            <td>avong</td>
            <td>rezabagus795@gmail.com</td>
          </tr>
          <tr>
            <td>6</td>
            <td>test</td>
            <td>testing@gmail.com</td>
          </tr>
          <tr>
            <td>7</td>
            <td>farid</td>
            <td>farid@gmail</td>
          </tr>
          <tr>
            <td>8</td>
            <td>popo</td>
            <td>faridgmail.com</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Ava</td>
            <td>chikkiafiani@gmail.com</td>
          </tr>
          <tr>
            <td>10</td>
            <td>farid</td>
            <td>ahmad@gmail.com</td>
          </tr>
          <tr>
            <td>11</td>
            <td>Ava</td>
            <td>haidlilao@gmail.com</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
