<a href="{{route('jnsKendaraan.create')}}">
    <input type="button" value="Tambah">
</a>

<table border='1'>
    <tr>
            <td>No</td>
            <td>Nama Jenis Kendaraan</td>
            <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)

    <tr>
        <td>{{$no++}}</td>
         <td>{{$row->nm_jns_kendaraan}}</td>
         <td>
            <a href="{{route('jnskendaraan.edit',$row->id_jns_kendaraan)}}">update</a>  
            |  
            <a href="{{route('jnskendaraan.delete',$row->id_jns_kendaraan)}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>


        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h3 class="card-title">Data Keseluruhan Jenis Kendaraan</h3>
                      <a href="{{route('jnsKendaraan.create')}}">
                        <input type="button" class="btn btn-success" value="Tambah">
                      </a>  
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <tr>
                                    <td>No</td>
                                    <td>Nama Jenis Kendaraan</td>
                                    <td>Aksi</td>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($data as $row)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->nm_jns_kendaraan}}</td>
                                <td>
                                    <a href="{{route('jnsKendaraan.edit',$row->id_jns_kendaraan)}}">update</a>  
                                    |  
                                    <a href="{{route('jnsKendaraan.delete',$row->id_jns_kendaraan)}}">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">

          </div>
</section>
</main>
      <!--end::App Main-->
      <!--begin::Footer-->
      @include('layout.coba')
      
<!-- apa -->
      <!--end::Footer-->
    </div>
    @include('layout.footer')

