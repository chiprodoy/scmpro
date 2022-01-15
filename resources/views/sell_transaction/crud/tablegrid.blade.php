@if(isset($sellTransactionViewable))
    @component('components.easyui.data-grid',[
    "id"=>"sell_transaction",
    "title"=>"Faktur",
    "url"=>route('sell_transaction.index'),
    'columns'=>$sellTransactionViewable,
    'mustCheckingRole'=>false,
    'method'=>'get',
    'pagination'=>true,
    'singleSelect'=>false,
    'fitColumns'=>false])
    @endcomponent
@else
    <x-easyui::data-grid
    :id="$controllerName"
    :title="$controllerName"
    :url=url($controllerName)
    :columns="$viewAble"
    />
@endif


