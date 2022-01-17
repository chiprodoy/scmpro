<div id="create_sell_transaction" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                        <form name="frmCreateInvoice" id="frmCreateInvoice" action="{{ url($controllerName) }}" method="POST" class="col-span-12 form-horizontal">
                            <div class="row">
                            <div class="col-md-2">
                                @csrf
                                    @component('components.easyui.forms.text',[
                                        'id'=>"costumer_code",
                                        'name'=>"costumer_code",
                                        'label'=>"Kode Pelanggan",
                                        'value'=>'',
                                        'inline'=>false
                                    ])
                                    @endcomponent
                                    @component('components.easyui.forms.hidden',[
                                        'id'=>"costumer_id",
                                        'name'=>"costumer_id",
                                        'value'=>'',
                                    ])
                                    @endcomponent
                            </div>
                            <div class="col-md-3">
                                @component('components.easyui.forms.text',[
                                    'id'=>"costumer_name",
                                    'name'=>"costumer_name",
                                    'label'=>"Nama Pelanggan",
                                    'value'=>'',
                                    'inline'=>false,
                                    'readonly'=>true
                                ])
                                @endcomponent
                            </div>
                            <div class="col-md-2">
                                @component('components.easyui.forms.text',[
                                    'id'=>"invoice_number",
                                    'name'=>"invoice_number",
                                    'label'=>"Nomor Faktur",
                                    'value'=>'',
                                    'inline'=>false,
                                    'readonly'=>true
                                ])
                                @endcomponent
                            </div>
                            <div class="col-md-2">
                                @component('components.easyui.forms.text',[
                                    'id'=>"invoice_date",
                                    'name'=>"invoice_date",
                                    'label'=>"Tgl Faktur",
                                    'value'=>date('Y-m-d'),
                                    'inline'=>false,
                                    'readonly'=>true
                                ])
                                @endcomponent
                            </div>
                            <div class="col-md-2">
                                @component('components.easyui.forms.text',[
                                    'id'=>"due_date",
                                    'name'=>"due_date",
                                    'label'=>"Tgl Tempo",
                                    'value'=> date('Y-m-d'),
                                    'inline'=>false,

                                ])
                                @endcomponent
                            </div>
                            <div class="col-md-1">
                                @component('components.easyui.forms.text',[
                                    'id'=>"status_invoice",
                                    'name'=>"status_invoice",
                                    'label'=>"Status",
                                    'value'=>'1',
                                    'inline'=>false,
                                    'readonly'=>true
                                ])
                                @endcomponent
                            </div>
                            <div class="col-md-12">

                                <button type="submit" id="btnCreateFaktur" name="btnCreateFaktur" class="btn btn-default btn-block">Buat Faktur Baru / Cari Faktur</button>

                            </div>
                            </div>
                        </form><!-- end form -->
                </div><!-- end row-->
        </div><!-- end container fluid -->
</div><!-- end create -->
<script type="text/javascript">
$(document).ready(function(){
    $('#costumer_code').blur(function (e) {
        var costumerCode=$(this).val();
        alert(costumerCode);
        $.get("{{ route('costumer.index') }}", {'costumer_code':costumerCode},
            function (data, textStatus, jqXHR) {
                console.log(data);
                $('#costumer_name').val(data.rows[0].costumer_name);
                $('#costumer_id').val(data.rows[0].id);

            },
            "json"
        );
    });

    $('#btnCreateFaktur').click(function (e) {
        var invoice_number=$('#invoice_number').val();
        if(invoice_number.length==0){
            $.post("{{ route('sell_transaction.index') }}", $('#frmCreateInvoice').serialize(),
                function (data, textStatus, jqXHR) {
                },
                "json"
            );
        }
        $.get("{{ route('sell_transaction.index') }}", {'invoice_number':invoice_number},
            function (data, textStatus, jqXHR) {
                console.log(data);
                $('#invoice_number').val(data.rows[0].invoice_number);
                $('#invoice_date').val(data.rows[0].invoice_date);

            },
            "json"
        );

        e.preventDefault();

    });
});
</script>
