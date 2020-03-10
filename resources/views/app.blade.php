<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets\datatables\dataTables.bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    @yield('content');
</body>
    <script src="assets/js/vendors.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <script src="assets\datatables\jquery.dataTables.min.js"></script>
    <script src="assets\datatables\dataTables.bootstrap.min.js"></script>
    <script src="assets\datatables\e-commerce-order-list.js"></script>

    <script src="assets\js\custom.js"></script>
</html>