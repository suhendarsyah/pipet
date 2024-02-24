@extends('dashboard')

@push('styles')
  @livewireStyles
@endpush

@push('scripts')
  @livewireScripts
@endpush




@section('peternak-index')


  {{-- <livewire:peternak.peternak-index> --}}
    @livewire('peternak.peternak-index')

    
@endsection