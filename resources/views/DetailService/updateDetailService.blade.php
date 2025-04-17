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
              <div class="col-sm-6"><h3 class="mb-0">Tambah Detail Service</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Detail Service</li>
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
                                <form action="{{route('detailService.update',$id)}}" method="post" name="tambah">
                                @csrf
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Sparepart</label>
                                        <input type="text" class="form-control"  name="sparepart" value="{{$row->sparepart}}"/><br>

                                        <label for="" class="form-label">harga</label>
                                        <input type="text" class="form-control"  name="harga" value="{{$row->harga}}"/><br>

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
<form action="{{route('detailService.update',$id)}}" method="post" name="tambah">
    @csrf 
    <label for="">Sparepart : </label>
    <input type="text" name="sparepart" id="" value="{{$row->sparepart}}"><br>
    
    <label for="">harga : </label>
    <input type="text" name="harga" id="" value="{{$row->harga}}"><br>

    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach