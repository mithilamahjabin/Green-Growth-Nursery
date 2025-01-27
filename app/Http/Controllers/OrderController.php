<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Employee;
use App\Models\Order;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function list()
    {
        $orders = Order::with('customer')->paginate(5);
        return view('backend.pages.order.list',compact('orders'));
    }

    public function view($id)
    {
        $order_items=OrderDetail::with('product')->where('order_id',$id)->get();
        $order = Order::with('deliveryman')->find($id);
        $employees = Employee::get();
        return view('backend.pages.order.details',compact('order_items','employees','order'));

    }
    public function delete($id){

        $order=Order::find($id);
        // dd($order);
        $order->delete();
        Toastr::success('Delete Success.');
         return redirect()->back();
        return redirect()->route('order list')->with('msg', 'Delete successfully.');


    }


    public function assign(Request $request,$id)
    {
        $order=Order::find($id);
        // dd($order);

        $orderMail=$order->update([
            'deliveryman_id'=>$request->deliveryman_id,
            'payment_status'=>$request->status
        ]);
        // Mail::to($order->email)->send(new OrderMail($order));
        // Mail::to($order->email)->send(new OrderMail($order));
        Toastr::success('Delivery man assign successfully');
        return to_route('order.list');

    }


    public function report()
    {
        return view('backend.pages.report.order-report');
    }

    public function reportSearch(Request $request){

        $request->validate([
            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date'
        ]);

        $from=$request->from_date;
        $to=$request->to_date;

        $orders=Order::whereBetween('created_at', [$from , $to])->get();
        return view('backend.pages.report.order-report',compact('orders'));

    }




    public function paymentDetails()
    {
        $orders=Order::with('customer')->get();
        return view('backend.pages.payment-details',compact('orders'));




    }

    public function invoice($id){

      $order_items=OrderDetail::with('product')->where('order_id',$id)->get();
        // dd($order_items);

        return view('frontend.pages.money_recpit',compact('order_items'));
    }


}
