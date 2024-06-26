@extends('Admin.layouts.main')

@section("title", "Order #" . $order->id . " Cancel")

@section("content")
<div class="d-sm-flex align-items-center text-danger justify-content-between mb-4">
    <h1 class="h3 mb-0 text-danger-800 text-center w-100" style="font-weight: 700">
        Are you sure you want to cancel
         this order?
    </h1>
</div>
<div class="card p-3 mb-3">
    <h2>Orderd by:</h2>
    <div class="user_details" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px">
        <div class="form-group">
            <label>User Name</label>
            <span class="form-control">{{ $order->user ? $order->user->name : "Missing" }}</span>
        </div>
        <div class="form-group">
            <label>User Email</label>
            <span class="form-control">{{ $order->user->email }}</span>
        </div>
        <div class="form-group">
            <label>User Phone</label>
            <span class="form-control">{{ $order->user->phone }}</span>
        </div>
    </div>
    <hr>
    <h2>Recipient Details:</h2>
    <div class="user_details" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px">
        <div class="form-group">
            <label>Recipient Name</label>
            <span class="form-control">{{ $order->recipient_name }}</span>
        </div>
        <div class="form-group">
            <label>Recipient Phone</label>
            <span class="form-control">{{ $order->recipient_phone }}</span>
        </div>
        <div class="form-group" style="grid-column: span 2">
            <label>Recipient Address</label>
            <span class="form-control">{{ $order->recipient_address }}</span>
        </div>
    </div>
    <hr>
    <h2>Order Information:</h2>
    <div class="user_details" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px">
        <div class="form-group">
            <label>Status</label>
            <span class="form-control">
                {{ $order->status == 1 ? "Under Review" : ($order->status == 2 ? "Confirmed" : ($order->status == 3 ? "On Shipping" : ($order->status == 4 ? "Completed" : ($order->status == 0 ? "Canceled" : "Undifiened")))) }}
            </span>
        </div>
        <div class="form-group">
            <label>Date</label>
            <span class="form-control">{{ $order->created_at }}</span>
        </div>
        <div class="form-group">
            <label>Sub Total</label>
            <span class="form-control">{{ $order->sub_total }}</span>
        </div>
    </div>

    @if($order->status !== 4 && $order->status !== 0)
        <form action="{{route('admin.orders.cancel.post', ['id' => $order->id])}}" class="btns d-flex gap-3 justify-content-center" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger w-50 m-2">
                Cancel
            </button>
        </form>
    @endif

</div>

@endSection
