<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Midtrans\Snap;
use Dompdf\Options;
use Midtrans\Config;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return view('order');
    }
    public function checkout(Request $request)
    {
        $request->request->add(['total_price' => $request->qty * 10000, 'status' => 'belum di Bayar']);
        $order = Order::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey =config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name' => $request->name,
                'phone' => $request->phone,
            ),
        );

    $snapToken = \Midtrans\Snap::getSnapToken($params);
    return view('checkout', compact('snapToken', 'order'));

    }
    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Lunas']);
            }
        }
    }
    public function invoice($id){
        // $order = Order::find($id);
        // return view('invoice', compact('order'));

        $order = Order::find($id);

    // Render the HTML to PDF
    $options = new Options();
    $options->setIsRemoteEnabled(true);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml(view('invoice', compact('order')));

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the PDF
    $dompdf->render();

    // Output the generated PDF to the browser
    $dompdf->stream('invoice.pdf', ['Attachment' => false]);

    }

}
