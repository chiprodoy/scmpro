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
          </div>
          <!-- /.content-header -->
          <!-- Main content -->
          <div class="content">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                              <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Transaksi</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Point Of Sale</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Retur</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Settings</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card-body">
                              <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                                            @include('sell_transaction.crud.tablegrid')


                                    <div class="card mt-3">

                                        <div class="card-body">
                                            <table id="dg" class="table easyui-datagrid" style="min-height:350px;border:1px solid #ccc;">
                                                <thead>
                                                    <tr>
                                                        <th data-options="field:'itemid'">Item ID</th>
                                                        <th data-options="field:'productid'">Product</th>
                                                        <th data-options="field:'listprice',align:'right'">List Price</th>
                                                        <th data-options="field:'attr1'">Attribute</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>EST-1</td><td>FI-SW-01</td><td>36.50</td><td>Large</td>
                                                    </tr>
                                                    <tr>
                                                        <td>EST-10</td><td>K9-DL-01</td><td>18.50</td><td>Spotted Adult Female</td>
                                                    </tr>
                                                    <tr>
                                                        <td>EST-11</td><td>RP-SN-01</td><td>28.50</td><td>Venomless</td>
                                                    </tr>
                                                    <tr>
                                                        <td>EST-12</td><td>RP-SN-01</td><td>26.50</td><td>Rattleless</td>
                                                    </tr>
                                                    <tr>
                                                        <td>EST-13</td><td>RP-LI-02</td><td>35.50</td><td>Green Adult</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div> <!-- end card-->
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                    @include('sell_transaction.crud.create')
                                    <hr/>
                                    @include('sell_transaction_item.crud.create')
                                    <hr/>
                                    <x-easyui::data-grid
                                    id="sell_transaction_item"
                                    title="sell_transaction_item"
                                    :url=url($controllerName)
                                    :columns="$viewAble"/>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                                   Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                                   Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                </div>
                              </div>
                            </div>
                            <!-- /.card -->
                          </div>
                          <!-- end card tab -->

                    </div>

                </div>
              </div>
          </div>
    @endsection
