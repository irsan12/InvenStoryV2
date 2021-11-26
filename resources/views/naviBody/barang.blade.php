@extends('test')

@push('css')
.dataTables_filter {margin-bottom: 50px;}

@endpush

@section('mainContent')
<div class="container">
<div class="mt-8 mx-8 md:my-8">
    <center><h2 class="mb-4">Data Barang</h2></center>
    <table class=" table-auto cell-border  yajra-datatable" >
        <thead>
            <tr>
                <th class="border">No</th>
                <th class="border ">Kode Barang</th>
                <th class="border ">Nama Barang</th>
                <th class="border ">Harga Modal</th>
                <th class="border ">Harga Jual</th>
                <th class="border ">Harga Beli</th>
                <th class="border ">Stok</th>
                <th class="border ">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</div>
@endsection

@push('addscript')
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        responsive: true,
        //serverSide: true,
        ajax: "{{ route('barangs.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
            {data: 'kodebarang', name: 'kodebarang'},
            {data: 'Nama_barang', name: 'Nama_barang'},
            {data: 'Harga_M', name: 'Harga_M'},
            {data: 'Harga_J', name: 'Harga_J'},
            {data: 'Harga_B', name: 'Harga_B'},
            {data: 'stok', name: 'stok'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
@endpush