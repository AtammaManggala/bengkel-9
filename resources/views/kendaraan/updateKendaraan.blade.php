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
              <div class="col-sm-6"><h3 class="mb-0">Tambah kendaraan</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Kendaraan</li>
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
                        <div class="col-md-6">
                            <div class="card card-primary card-outline mb-4">
                                <!--begin::Header-->
                                <div class="card-header"><div class="card-title">Silahkan isi data</div></div>
                                <!--end::Header-->
                                <!--begin::Form-->
                                @foreach($data as $row)
                                <form action="{{route('kendaraan.update',$id)}}" method="post" name="tambah">
                                @csrf
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nomor Polisi Kendaraan</label>
                                        <input type="text" class="form-control"  name="kendaraan" value="{{$row->no_pol}}"/><br>

                                        <label for="" class="form-label">Tahun Kendaraan</label>
                                        <input type="text" class="form-control"  name="thn_kendaraan" value="{{$row->tahun_kendaraan}}"/><br>

                                        <label for="" class="form-label">Nomor Mesin</label>
                                        <input type="text" class="form-control"  name="no_mesin_kendaraan" value="{{$row->no_mesin}}"/><br>

                                        <label for="" class="form-label">Nomor Rangka</label>
                                        <input type="text" class="form-control"  name="no_rangka_kendaraan" value="{{$row->no_rangka}}"/><br>

                                        <label for="" class="form-label">Kapasitas Mesin</label>
                                        <input type="text" class="form-control"  name="kapasitas_mesin_kendaraan" value="{{$row->kapasitas_mesin}}"/><br>

                                        <label for="" class="form-label">Transmisi</label>
                                        <input type="text" class="form-control"  name="transmisi_kendaraan" value="{{$row->transmisi}}"/><br>

                                    </div>
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer">
                                    <button type="submit" name="simpan"  class="btn btn-primary">simpan bro</button>
                                </div>
                                <!--end::Footer-->
                                </form>
                                @endforeach
                            <!--end::Form-->
                            </div>





                        </div>
                    </div>
            </div>
        </div>

        <div class="app-content">
          <!--begin::Container-->
        
</section>
</main>
      <!--end::App Main-->
      <!--begin::Footer-->
      @include('layout.coba')
      

      <!--end::Footer-->
    </div>
    @include('layout.footer')





@foreach($data as $row)
<form action="{{route('kendaraan.update',$id)}}" method="post" name="tambah">
    @csrf 
    <label for="">Nomor Polisi Kendaraan : </label>
    <input type="text" name="kendaraan" id="" value="{{$row->no_pol}}"><br>
    
    <label for="">Tahun Kendaraan : </label>
    <input type="text" name="thn_kendaraan" id="" value="{{$row->tahun_kendaraan}}"><br>

    <label for="">Nomor Mesin : </label>
    <input type="text" name="no_mesin_kendaraan" id="" value="{{$row->no_mesin}}"><br>

    <label for="">Nomor Rangka : </label>
    <input type="text" name="no_rangka_kendaraan" id="" value="{{$row->no_rangka}}"><br>

    <label for="">Kapasitas Mesin : </label>
    <input type="text" name="kapasitas_mesin_kendaraan" id="" value="{{$row->kapasitas_mesin}}"><br>

    <label for="">Transmisi : </label>
    <input type="text" name="transmisi_kendaraan" id="" value="{{$row->transmisi}}"><br>

    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach