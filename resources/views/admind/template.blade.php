<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO-Camp</title>
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

        .table th,
        .table td {
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
    @include('admind.sideBar')

    @yield("content")


</body>

</html>
