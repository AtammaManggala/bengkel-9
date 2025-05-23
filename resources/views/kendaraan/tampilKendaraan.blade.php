@include('layout.header')
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('layout.navbar')
      
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('layout.sidebar')
      
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">

      <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Kendaraan</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>


        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                      <div class="row">
                          <div class="col-11">
                            <h3 class="card-title">Data Keseluruhan Kendaraan</h3>
                          </div>
                          <div class="col-1">
                            <a href="{{route('kendaraan.create')}}">
                              <input type="button" value="Tambah" class="btn btn-success">
                            </a>  
                          </div>
                      </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <tr>
                                <td>No</td>
                                <td>Nomor Polisi</td>
                                <td>Tahun Kendaraan</td>
                                <td>Nomor Mesin</td>
                                <td>Nomor Rangka</td>
                                <td>Kapasitas Mesin</td>
                                <td>Transmisi</td>
                                <td>Aksi</td>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($data as $row)

                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->no_pol}}</td>
                                 <td>{{$row->tahun_kendaraan}}</td>
                                    <td>{{$row->no_mesin}}</td>
                                    <td>{{$row->no_rangka}}</td>
                                    <td>{{$row->kapasitas_mesin}}</td>
                                    <td>{{$row->transmisi}}</td>
                                <td>
                                    <a href="{{route('kendaraan.edit',$row->id_kendaraan)}}"
                                    class="btn btn-warning">update</a>  
                                    |  
                                    <a href="{{route('kendaraan.delete',$row->id_kendaraan)}}" 
                                    class="btn btn-danger">delete</a>
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
      

      <!--end::Footer-->
    </div>
    @include('layout.footer')



















