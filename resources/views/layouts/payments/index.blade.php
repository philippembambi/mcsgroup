@extends('layouts.app', ['title' => "Identifications - Mcs Group"])

@section('content')

<form action="{{ url('charge') }}" method="post">
    <input type="text" name="amount" />
    {{ csrf_field() }}
    <input type="submit" name="submit" value="Pay Now">
</form>

<!-- Add font awesome icons to buttons (note that the fa-spin class rotates the icon) -->
<button class="buttonload">
    <i class="fa fa-spinner fa-spin"></i>Loading
  </button>

  <button class="buttonload">
    <i class="fa fa-circle-o-notch fa-spin"></i>Loading
  </button>

  <button class="buttonload">
    <i class="fa fa-refresh fa-spin"></i>Loading
  </button>
  @endsection
