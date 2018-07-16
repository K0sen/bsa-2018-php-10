<tr>
    <td>{{ $currency->name }}</td>
    <td>{{ $currency->rate }}</td>
    <td>
        @include('currency.pieces.update-rate-form', ['id' => $currency->id])
    </td>
</tr>
