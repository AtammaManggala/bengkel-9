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
              <div class="col-sm-6"><h3 class="mb-0">Tambah Jenis kendaraan</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Jenis Kendaraan</li>
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
                                <form action="{{route('jnskendaraan.update',$id)}}" method="post" name="tambah">
                                @csrf
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Jenis Kendaraan</label>
                                        <input type="text" class="form-control"  name="jns_kendaraan" value="{{$row->nm_jns_kendaraan}}"/>
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
    