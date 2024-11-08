<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function listpayment() {
        $subscriptions = DB::table('subscription_plans')->select()->get();
        return view('admins.payment.list', ['subscriptions' => $subscriptions]);
    }
    function addpayment(){
        $name = $_POST['name'];
        $duration = $_POST['duration'];
        $price = $_POST['price'];
        $created_at = $_POST['created_at'];
        $id = DB::table('subscription_plans')->insertGetId([
            'name' => $name,
            'duration' => $duration,
            'price' => $price,
            'created_at' => $created_at
        ]);
        return redirect('http://127.0.0.1:8000/admin/payment/list');
    }
    function deletepayment($maxoa){
        
            DB::table('subscription_plans')->where('id', '=', $maxoa)->delete();
            return redirect('http://127.0.0.1:8000/admin/payment/list');
        
    }
}
