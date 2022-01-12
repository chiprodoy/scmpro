 @if ($mustCheckingRole)
 @canany(['read','read-own'], $namaModel)

 @endcanany
 @else

    <div class="mt-3">
        <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

        <div class=" h-full w-full">
            <table
            id="{{ $id }}" class="easyui-datagrid"
            pageSize="{{ $pageSize }}"
            pageList="{{ json_encode($pageList) }}"
            style="{{$style}}"
            url="{{ $url }}"
            title="{{ ucwords($title) }}"
            rownumbers="{{$rowNumber}}"
            pagination="{{$pagination}}"
            method="{{ $HTTPMethod }}"
            loadMsg="{{ $loadMsg }}"
            checkOnSelect="true"
            selectOnCheck="true"
            >
                <thead>
                    <tr>
                        <th data-options="field:'id',checkbox:true"></th>
                        @foreach ($tableHeader as $th)
                        <th field="{{ $th['field'] }}" sortable="true">{{ ucwords(str_replace('_',' ',$th['label'])) }}</th>

                        @endforeach

                    </tr>
                </thead>
            </table>

        </div>
    </div>

 @endif
<script type="text/javascript">
    var dg = $('#{{ $id }}');
    dg.datagrid({pagePosition:'top',remoteFilter: true});
	dg.datagrid('getPager').pagination({
		layout:['info','list','sep','first','prev','sep',$('#p-style').val(),'sep',
        'next','last','sep','refresh']
	});
</script>
