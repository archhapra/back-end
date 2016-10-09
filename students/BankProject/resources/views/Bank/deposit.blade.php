@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">deposit</div>

                <div class="panel-body">
                    <h1>You are in deposit page</h1>
                    your current balance is {{ $amount }}
                </div>

                <div>
                <form method="POST" action="someRandomRoute">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    

                    <label for="amount">Enter amount</label>
                    <input type="amount" name="amount">
                    <button type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
