<div  class="mt-4" >

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <form wire:submit.prevent="create">
        <div class="form-group">
            <div class="form-row ">
                <div class="col-md mb-1">
                    <input wire:model="nama" 
                    type="text" 
                    name="nama" 
                    id="" 
                    class="form-control 
                        @error('nama')
                            is-invalid 
                        @enderror " 
                    placeholder="nama">
                        @error('nama')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-md mb-1">
                    <input wire:model="alamat" 
                    type="text" 
                    name="alamat" 
                    id="" 
                    class="form-control
                        @error('alamat')
                            is-invalid 
                        @enderror "
                    placeholder="alamat">
                        @error('alamat')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>
                <div class="col-md mb-1">
                    <input wire:model="email" 
                    type="text" 
                    name="email" 
                    id="" 
                    class="form-control
                        @error('email')
                            is-invalid 
                        @enderror "
                    placeholder="email">
                        @error('email')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-md mb-1">
                    <input wire:model="telp" 
                    type="text" 
                    name="telp" 
                    id="" 
                    class="form-control
                        @error('telp')
                            is-invalid 
                        @enderror " 
                    placeholder="telp">
                        @error('telp')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            <div class="d-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary btn-sm my-2">Tambah Peternak</button>
            </div>
        </div>
    </form>
</div>
