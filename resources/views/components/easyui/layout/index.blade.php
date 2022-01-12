@extends('components.'.$theme.'.layout.default')
    @section('js')


    {{-- @if(is_file(public_path('asset/'.$controllerName.'/index.js')))
        <script type="text/javascript" src="{{ asset('asset/'.$controllerName.'/index.js') }}"></script>

    @else
        <script type="text/javascript" src="{{ asset('mf/mf.component.table.js') }}"></script>


    @endif --}}
    @append
    @section('content')
           <!-- Content Header (Page header) -->
           <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v3</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>        <!-- /.content-header -->

          <!-- Main content -->
          <div class="content" id="index">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                            </div> <!-- end card header -->
                            <div class="card-body">
                                <div class="col-md-12">
                                    <x-easyui::crud-toolbar />

                                </div> <!-- end toolbar col -->
                                @if (View::exists($controllerName.'.crud.tablegrid'))
                                    @include($controllerName.'.crud.tablegrid')
                                    @yield('tablegrid')
                                @else
                                    <x-easyui::data-grid
                                    :id="$controllerName"
                                    :title="$controllerName"
                                    :url=url($controllerName)
                                    :columns="$viewAble"
                                    />
                                @endif
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row -->
            </div><!-- end continer fluid -->
          </div> <!-- end index -->
          @includeFirst([$controllerName.'crud.create','components.'.$theme.'.layout.create'])
          @includeFirst([$controllerName.'crud.update','components.'.$theme.'.layout.update'])

    <script type="text/javascript">


        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
        });

        $('#create').hide();
        $('#update').hide();

        $('#crud_btn_search').click(function(){
            dg.datagrid('load', {
                keyword: $('#keyword').val(),

            });
        });

        $('#crud_btn_add').click(function(){
            $("#frmcreate")[0].reset();
            $('#create').show();
            $('#index').hide();

        });

        $('#create .btn_back').click(function(){
            $('#create').hide();
            $('#index').show();
            dg.datagrid('load');

        });

        $('#update .btn_back').click(function(){
            $('#update').hide();
            $('#index').show();
            dg.datagrid('load');

        });
        /*
        *
        *   Delete Button action
        *
        */
        $('#crud_btn_del').click(function(){
            var confirmed = confirm('Apakah anda yakin menghapus ?');
            var rows = dg.datagrid('getSelections');
            if(confirmed){
                if(rows.length > 0){
                    for(var i=0; i<rows.length; i++){
                    var row = rows[i];
                        $.ajax({
                            url: '{{ url($controllerName) }}/'+row.id,
                            headers: {
                                'Accept':'application/json'
                            },
                            data:  {
                                '_method':'delete',
                                "_token": "{{ csrf_token() }}"
                            },
                            method: 'POST',
                            async: false,
                            success: function(result) {
                                Toast.fire({
                                icon: 'success',
                                title: 'Data Berhasil Dihapus'
                                })
                                // Do something with the result
                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) {
                                Toast.fire({
                                icon:'error',
                                title: XMLHttpRequest.responseJSON.response.metadata.message
                                })
                            }
                        });
                        dg.datagrid('reload');

                    }
                 }else{
                    alert('tidak ada data terpilih');
                }
            }
        });
        /*
        *
        *   Edit Button action
        *   todo:combo and save
        */
        $('#crud_btn_edit').click(function(){
            var rows = dg.datagrid('getSelections');
                if(rows.length > 0 && rows.length < 2){
                    rows.forEach(function(v,i) {
                        for(key in v)
                        {
                        if(v.hasOwnProperty(key))
                            $('#update input[name='+key+']').val(v[key]);
                        }
                    });
                    $('#update').show();
                    $('#index').hide();
                }else if(rows.length > 1){
                    alert('pilih satu baris saja');

                }else{
                    alert('tidak ada data terpilih');
                }
        });
        /*
        *
        *   create /save Button action
        *
        */
        $('#create .btn_save').click(function(){
            var actUrl=$('#create form').attr('action');
            $.ajax({
                url: actUrl,
                headers: {
                    'Accept':'application/json',
                    'X-CSRF-Token': '{{ csrf_token() }}'
                },
                data:  $('#create form').serialize(),
                method: 'POST',
                async: false,
                success: function(result) {
                    Toast.fire({
                    icon: 'success',
                    title: 'Data Berhasil Disimpan'
                    });
                    dg.datagrid('load');
                   // Do something with the result
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    Toast.fire({
                    icon:'error',
                    title: XMLHttpRequest.responseJSON.response.metadata.message
                    })
                }
            });

        });

                /*
        *
        *   UPDATE /save Button action
        *
        */
        $('#update .btn_save').click(function(){
            var actUrl=$('#update form').attr('action');
            var rows = dg.datagrid('getSelections');

            $.ajax({
                url: actUrl+'/'+rows[0].id,
                headers: {
                    'Accept':'application/json',
                    'X-CSRF-Token': '{{ csrf_token() }}'
                },
                data:  $('#update form').serialize(),
                method: 'POST',
                async: false,
                success: function(result) {
                    Toast.fire({
                    icon: 'success',
                    title: 'Data Berhasil Disimpan'
                    })
                    dg.datagrid('reload');
                   // Do something with the result
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    Toast.fire({
                    icon:'error',
                    title: XMLHttpRequest.responseJSON.response.metadata.message
                    })
                }
            });
        });
    </script>
@endsection
