<div  class="mt-4" >

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    
    <form wire:submit.prevent="update">
        <div class="row ">
            <div class="col text-center mb-3">
                <h3>{{ $title }}</h3>
            </div>
        </div>
        {{-- <input wire:model="peternakId" type="hidden" name="id"> --}}
        <div class="form-group">
            <div class="form-row ">
                <div class="col-md mb-1">
                    <input wire:model.live="nama" type="text" name="nama" id="" class="form-control" placeholder="nami">
                </div>
                <div class="col-md mb-1">
                    <input wire:model.live="alamat" type="text" name="alamat" id="" class="form-control" placeholder="alamat">
                </div>
                <div class="col-md mb-1">
                    <input wire:model.live="email" type="text" name="email" id="" class="form-control" placeholder="email">
                </div>
                <div class="col-md mb-1">
                    <input wire:model.live="telp" type="text" name="telp" id="" class="form-control" placeholder="telp">
                </div>
            </div>
            <div class="d-flex justify-content-md-end">
                <button  type="submit" class="btn btn-primary btn-sm my-2">submit</button>
            </div>
        </div>
    </form>
</div>

