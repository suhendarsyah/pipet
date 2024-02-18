<div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h1>{{ $title }}</h1>
      {{-- {{ $peternak->links() }} --}}
      <table class="table table-striped">
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
                      <a href="" class="btn btn-warning btn-sm">Edit</a>
                      <a href="" class="btn btn-danger btn-sm">Del</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
     
  </div>
</div>
