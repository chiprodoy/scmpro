@extends('components.'.$theme.'.layout.default')
    @section('js')


    {{-- @if(is_file(public_path('asset/'.$controllerName.'/index.js')))
        <script type="text/javascript" src="{{ asset('asset/'.$controllerName.'/index.js') }}"></script>

    @else
        <script type="text/javascript" src="{{ asset('mf/mf.component.table.js') }}"></script>


    @endif --}}
    @append
    @section('content')
    <div id="crudCreate" class="mb-5">

        <div class="mt-5 md:mt-0 md:col-span-2">
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <x-tailwind::toolbar />

                    <div class="grid grid-cols-6 gap-6">
                        @if(View::exists($controllerName.'.crud.create'))
                            @include($controllerName.'.crud.create')
                            @yield('create-form')
                        @else
                            <x-tailwind-layout::create
                                :formFields="$formfields"
                                :controllerName="$controllerName"
                            />


                         @endif
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <x-tailwind::toolbar />

                </div>
              </div>
        </div>
    </div>
    <div id="crudUpdate" class="mb-5">
        <div class="mt-5 md:mt-0 md:col-span-2">
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <x-tailwind::toolbar />

                    <div class="grid grid-cols-6 gap-6">
                        @if(View::exists($controllerName.'.crud.update'))
                            @include($controllerName.'.crud.update')
                            @yield('create-form')
                        @else
                            <x-tailwind-layout::update
                                :formFields="$formfields"
                                :controllerName="$controllerName"
                            />


                         @endif
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <x-tailwind::toolbar />

                </div>
              </div>
        </div>
    </div>
    <div id="crudIndex">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    {{-- check costum toolbar in view. if exist use it, if not use default --}}
                    @if (View::exists($controllerName.'.crud.toolbar'))
                        @include($controllerName.'.crud.toolbar')
                        @yield('toolbar')
                    @else
                        <x-tailwind::crud-toolbar />
                    @endif
                    {{-- check costum table grid in view. if exist use it, if not use default table grid --}}
                    @if (View::exists($controllerName.'.crud.tablegrid'))
                        @include($controllerName.'.crud.tablegrid')
                        @yield('tablegrid')
                    @else
                        <x-tailwind::data-grid
                        :id="$controllerName"
                        :controllerName="$controllerName"
                        :title="$controllerName"
                        :url=url($controllerName)
                        :tableHeader="$viewAble" />
                    @endif
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">


        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
        });

        $('#crudCreate').hide();
        $('#crudUpdate').hide();

        $('#crud_btn_search').click(function(){
            dg.datagrid('load', {
                keyword: $('#keyword').val(),

            });
        });

        $('#crud_btn_add').click(function(){
            $("#frmcreate")[0].reset();
            $('#crudCreate').show();
            $('#crudIndex').hide();

        });

        $('#crudCreate #btn_back').click(function(){
            $('#crudCreate').hide();
            $('#crudIndex').show();
        });

        $('#crud_btn_edit').click(function(){
            $('#crudUpdate').show();
            $('#crudIndex').hide();
        });

        $('#crudUpdate #btn_back').click(function(){
            $('#crudUpdate').hide();
            $('#crudIndex').show();
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
                if(rows.length > 0){
                    rows.forEach(function(v,i) {
                        for(key in v)
                        {
                        if(v.hasOwnProperty(key))
                            $('input[name='+key+']').val(v[key]);
                        }
                    });

                }else{
                    alert('tidak ada data terpilih');
                }
        });
        /*
        *
        *   create /save Button action
        *
        */
        $('#crudCreate #btn_save').click(function(){
            var actUrl=$('#crudCreate form').attr('action');
            $.ajax({
                url: actUrl,
                headers: {
                    'Accept':'application/json',
                    'X-CSRF-Token': '{{ csrf_token() }}'
                },
                data:  $('#crudCreate form').serialize(),
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

                /*
        *
        *   UPDATE /save Button action
        *
        */
        $('#crudUpdate #btn_save').click(function(){
            var actUrl=$('#crudUpdate form').attr('action');
            var rows = dg.datagrid('getSelections');

            $.ajax({
                url: actUrl+'/'+rows[0].id,
                headers: {
                    'Accept':'application/json',
                    'X-CSRF-Token': '{{ csrf_token() }}'
                },
                data:  $('#crudUpdate form').serialize(),
                method: 'POST',
                async: false,
                success: function(result) {
                    Toast.fire({
                    icon: 'success ',
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
