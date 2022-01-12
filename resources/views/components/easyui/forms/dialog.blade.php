<div id="dlg" class="easyui-dialog"
style="width:85%;height:80%;padding:10px;"
title="Complex Toolbar on Dialog"
data-options="
    iconCls: 'icon-save',
    toolbar: '#dlg-toolbar',
    buttons: '#dlg-buttons',
    closed : 'true',
    closable : 'true'
">
The dialog content.
</div>
<div id="dlg-toolbar" class="px-4">

        <button onclick="" class="bg-green-500 text-white active:bg-gray-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
            Simpan
        </button>

</div>
<div id="dlg-buttons">
<button onclick="" class="bg-green-500 text-white active:bg-gray-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
    Simpan
</button>
<button onclick="javascript:$('#dlg').dialog('close')" class="bg-red-500 text-white active:bg-gray-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
    Tutup
</button>
</div>
