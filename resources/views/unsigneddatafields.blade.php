@extends('layouts.app')

@section('content')
<form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/silent/pay" method="post">
    @csrf
    <fieldset id="confirmation">
        @foreach($fields as $key => $field)
        <div>
            <span>{{ $key }}: </span>
            <spana>{{ $field }}</span>
        </div>
        @endforeach
    </fieldset>
    @foreach($fields as $key => $field)
    <input type="hidden" id="{{ $key }}" name="{{ $key }}" value="{{ $field }}" />
    @endforeach
    <input type="hidden" id="signature" name="signature" value="{{ $sign }}" />
    <input type="hidden" name="card_type" value="001">
    <input type="text" name="card_number">
    <input type="text" name="card_expiry_date">
    <input type="submit" id="submit" value="Confirm " />
</form>

@endsection