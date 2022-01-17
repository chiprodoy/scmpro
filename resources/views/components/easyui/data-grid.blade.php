@if ($mustCheckingRole)
@canany(['read','read-own'], $namaModel)

@endcanany
@else
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <table id="{{ $id }}" class="table easyui-datagrid" style="min-height:350px;border:1px solid #ccc;">

    </table>
@endif
@php
    array_unshift($columns,['field'=>'id','checkbox'=>true]);
@endphp
<script type="text/javascript">
    var dg{{ '_'.$id }}=$('{{ '#'.$id }}').datagrid({
        url:'{{$url}}',
        columns:{!! json_encode([$columns]) !!},
        method:'{{$method}}',
        pagination:{{$pagination}},
        singleSelect:{{var_export($singleSelect)}}
    });
</script>
