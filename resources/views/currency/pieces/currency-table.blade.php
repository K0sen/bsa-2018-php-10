<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Rate</th>
        {{--@can ('update_rate', $currencies[0])--}}
        <th scope="col">Edit rate</th>
        {{--@endcan--}}
    </tr>
    </thead>
    <tbody>
        @foreach ($currencies as $key => $currency)
            @include('currency.pieces.currency-row', ['currency' => $currency])
        @endforeach
    </tbody>
</table>
