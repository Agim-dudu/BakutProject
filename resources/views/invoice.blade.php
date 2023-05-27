<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #259632;
            color: white;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Pesanan</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td> : {{$order->name}}</td>
            </tr>
            <tr>
                <td>email</td>
                <td> : {{$order->address}}</td>
            </tr>
            <tr>
                <td>no hp</td>
                <td> : {{$order->phone}}</td>
            </tr>
            <tr>
                <td>Qty</td>
                <td> : {{$order->qty}}</td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td> : {{$order->total_price}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td> : {{$order->status}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
