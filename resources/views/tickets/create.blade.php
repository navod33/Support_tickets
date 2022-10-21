@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h1>Open New Ticket</h1>
    <div class="m-5">

        <!-- FORM START -->
        <form class="" action="{{ route('tickets.store') }}" method="post">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="form-group row">
                        <div class="col-md-4 text-md-right">
                            <label for="customer_name">Your Name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="customer_name" value="" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
                                @if($errors->has('name'))
                                <div class="invalid-feedback text-left">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 text-md-right">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="email" value="" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
                                @if($errors->has('email'))
                                <div class="invalid-feedback text-left">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 text-md-right">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="phone" value="" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">
                                @if($errors->has('description'))
                                <div class="invalid-feedback text-left">
                                    {{ $errors->first('description') }}
                                </div>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 text-md-right">
                            <label for="description">Description</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="description" class="form-control "></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 offset-md-4 text-md-right">
                            <input type="submit" value="Submit" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- FORM END -->

    </div>
</div>
@endsection