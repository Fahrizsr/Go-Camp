@extends('admind.template')

@section('content')
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

