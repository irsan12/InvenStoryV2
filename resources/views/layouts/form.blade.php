{!! Form::model($model, [
     'route' => 'transaksi.tambah',
     'autocomplete' =>'off',
    'method' => 'PUT'
]) !!}
 
    <div class="mb-4">
        <label for="" class="control-label">Nama Barang</label>
        {!! Form::text('kodebarang', null, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'id' => 'kodebarang']) !!}
    </div>

    <div class="mb-4">
        <label for="" class="block text-gray-700 text-sm font-bold mb-2">Jumlah</label>
        {!! Form::text('Nama_barang', null, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'id' => 'Nama_barang']) !!}
    </div>

    <div class="mb-4">
            <label>Harga Jual</label>
            {{ Form::radio('result', 'Harga Jual' , false) }}
            <br>
             <label>Harga Beli</label>
            {{ Form::radio('result', 'Harga Beli' , false) }}
             <br>
             <label>Harga Modal</label>
            {{ Form::radio('result', 'Harga Modal' , false) }}
    </div>
    <div class="flex justify-end pt-2">
          <button type="submit" class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Save</button>
     </div>
{!! Form::close() !!} 