<div id="create_sell_transaction" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-tabs">

                        <form name="frmcreate" id="frmcreate" action="{{ url($controllerName) }}" method="POST" class="col-span-12 form-horizontal">
                            <div class="col-md-3">
                            @component('components.easyui.forms.text',[
                                'id'=>"costumer_id",
                                'name'=>"costumer_id",
                                'label'=>"Nama Costumer",
                                'value'=>'',
                                'inline'=>false
                            ])
                            </div>
                            @endcomponent

                        </form><!-- end form -->
            </div> <!-- end row -->
        </div><!-- end container fluid -->
</div><!-- end create -->
