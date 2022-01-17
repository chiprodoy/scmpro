<div id="create_sell_transaction" class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form name="frmcreate_transaction_item" id="frmcreate" action="{{ url($controllerName) }}" method="POST" class="col-span-12 form-horizontal">
                <div class="row">
                    <div class="col-md-3">
                        @component('components.easyui.forms.text',[
                            'id'=>"code_number",
                            'name'=>"code_number",
                            'label'=>"Kode Barang",
                            'value'=>'',
                            'inline'=>false
                        ])
                        @endcomponent
                    </div>
                    <div class="col-md-4">
                        @component('components.easyui.forms.hidden',[
                            'id'=>"inventory_item_id",
                            'name'=>"inventory_item_id",
                            'value'=>'',

                        ])
                        @endcomponent
                        @component('components.easyui.forms.text',[
                            'id'=>"name",
                            'name'=>"name",
                            'label'=>"Nama Barang",
                            'value'=>'',
                            'inline'=>false,
                            'readonly'=>true
                        ])
                        @endcomponent
                    </div>
                    <div class="col-md-2">
                        @component('components.easyui.forms.text',[
                            'id'=>"price",
                            'name'=>"price",
                            'label'=>"Harga",
                            'value'=>'',
                            'inline'=>false,
                            'readonly'=>true
                        ])
                        @endcomponent
                    </div>
                    <div class="col-md-1">
                        @component('components.easyui.forms.text',[
                            'id'=>"qty",
                            'name'=>"qty",
                            'label'=>"Qty",
                            'value'=>'',
                            'inline'=>false
                        ])
                        @endcomponent
                    </div>
                    <div class="col-md-2">
                        @component('components.easyui.forms.text',[
                            'id'=>"unit_measure_id",
                            'name'=>"unit_measure_id",
                            'label'=>"Satuan",
                            'value'=>'',
                            'inline'=>false,
                            'readonly'=>true
                        ])
                        @endcomponent
                    </div>
                    <div class="col-md-1">
                        @component('components.easyui.forms.text',[
                            'id'=>"percentage_dicount",
                            'name'=>"percentage_dicount",
                            'label'=>"Disc (%)",
                            'value'=>0,
                            'inline'=>false
                        ])
                        @endcomponent
                    </div>
                    <div class="col-md-2">
                        @component('components.easyui.forms.text',[
                            'id'=>"amount_dicount",
                            'name'=>"amount_dicount",
                            'label'=>"Disc (Rp)",
                            'value'=>'',
                            'inline'=>false
                        ])
                        @endcomponent
                    </div>
                    <div class="col-md-4">
                        @component('components.easyui.forms.text',[
                            'id'=>"total_price",
                            'name'=>"total_price",
                            'label'=>"Total (Rp)",
                            'value'=>'',
                            'inline'=>false,
                            'readonly'=>true
                        ])
                        @endcomponent
                    </div>
                    <div class="col-md-12">
                       <button type="submit" name="submit_sell_transaction_item" class="btn btn-block btn-default">
                        Tambahkan Item
                       </button>
                    </div>
                </div>
                </form>
            </div> <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end content -->
