@can ('update_rate', $currency)
<form role="form" method="POST"
      action="{{ route('api_currency_rate_update', ['id' => $currency->id]) }}"
      class="d-inline-block currency-rate-form">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <input id="rate" type="text"
           name="rate"
           value="{{ old('rate', $currency->rate) }}">
    @if ($errors->has('rate'))
        <p class="alert alert-warning">
            {{ $errors->first('rate') }}
        </p>
    @endif
    <button class="btn btn-info">
        <i class="fas fa-edit"></i> Update
    </button>
</form>
@endcan
