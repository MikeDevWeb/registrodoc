@section('adminlte::page')

@section('content')

<div class="container">

    @yield('content')
    <div class="modal">
        <div class="modal-header">

        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>

@endsection

@section('css')
<style>
    .page {
    width: 210mm;
    min-height: 297mm;
    padding: 20mm;
    margin: 10mm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 5px black solid;
    height: 257mm;
    outline: 2cm #FFEAEA solid;
}

@page {
    size: A4;
    margin: 0;
}
/*
@media print {
    html, body {
        margin:0 !important;
        padding:0 !important;
        height:100% !important;
        visibility: hidden;
    }

    .page .subpage .col-md-12,.col-lg-12{
        float:left;
        width:100%;
    }
    .page .subpage {
        padding: 1cm;
        border: 5px black solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
        position:absolute;
    }
    .page {
        visibility: visible;
    }
} */

@media print{
  body * {
    visibility: hidden;
  }
  #page, #page * {
    visibility: visible;
  }
  #page {
    position: absolute;
    top: 0;
    left: 0;
  }
}
</style>
@endsection
@section('js')

@endsection
