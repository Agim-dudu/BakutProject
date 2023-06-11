<!DOCTYPE html>
<html>
<head>
    <title>list Pembelian</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>list Pembelian</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No.Telp</th>
                <th>Jumlah Tiket</th>
                <th>Bayar</th>
                <th>Status</th>
                <th>Waktu Pembelian</th>
                <th>Waktu Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->qty }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>