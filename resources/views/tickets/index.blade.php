@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h1>All Tickets</h1>
    <div class="m-5">
        @if($tickets->isNotEmpty())
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Opened Time</th>
                    <th>Handled By</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->customer_name }}</a>
                    </td>
                    <td>{{ $ticket->email }}</td>
                    <td>{{ $ticket->phone }}</td>
                    <td>{{ $ticket->created_at->format('d/M/Y H:i:s') }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="alert alert-info">
            No tickets are there yet.
        </div>
        @endif
    </div>
</div>
@endsection