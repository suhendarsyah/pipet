<div  class="mt-4" wire:submit.prevent="create">
    <form action="#">
        <div class="form-group">
            <div class="form-row ">
                <div class="col-md mb-1">
                    <input wire:model="nama" type="text" name="nama" id="" class="form-control" placeholder="nama">
                </div>
                <div class="col-md mb-1">
                    <input wire:model="alamat" type="text" name="alamat" id="" class="form-control" placeholder="alamat">
                </div>
                <div class="col-md mb-1">
                    <input wire:model="email" type="text" name="email" id="" class="form-control" placeholder="email">
                </div>
                <div class="col-md mb-1">
                    <input wire:model="telp" type="text" name="telp" id="" class="form-control" placeholder="telp">
                </div>
            </div>
            <div class="d-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary btn-sm my-2">Tambah Peternak</button>
            </div>
        </div>
    </form>
</div>
