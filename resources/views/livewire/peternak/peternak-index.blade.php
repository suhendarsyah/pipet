<div>
    


  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="row row-cols-2">
        <div class="col">
            <h1>{{ $title }}</h1>
        </div>
        <div class="col ">
            <input type="text" placeholder="cari peternak">
        </div>
    </div>
    


@if ($statusUpdate)
    @livewire('peternak.peternak-update')
@else
    @livewire('peternak.peternak-create')
@endif

{{-- @livewire('peternak.peternak-create') --}}


    {{-- {{ $peternak->links() }} --}}
    <table class="table table-striped table-responsive-sm ">
        <thead>
            <tr>
                <th class=" ">No</th>
                <th class=" ">Nama</th>
                <th class=" ">Email</th>
                <th class=" ">Alamat</th>
                <th class=" ">telp</th>
                <th class=" ">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peternak as $key => $item)
            <tr>
                <td>{{ $peternak-> firstItem() + $key}}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telp }}</td>
                <td>
                    <a href="" wire:click.prevent="getPeternak({{ $item->id }})" class="btn btn-warning btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Del</a>
                </td>
            </tr>
            
            @endforeach
            {{ $peternak->links() }}
        </tbody>
    </table>
  </div>
</div>
