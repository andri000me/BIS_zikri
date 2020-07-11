</div>
</div>
</div>
<!-- begin::Footer -->
    <footer class="m-grid__item m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                    <span class="m-footer__copyright">
                        <?php echo date('Y');?> &copy; BIS by
                        <a href="http://ksusb.co.id/" target="_blank" style="color: inherit;"><strong>KSP</strong>SB</a>
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!--begin::Base Scripts -->
<script src="../assets/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="../assets/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script src="../assets/assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/assets/demo/default/custom/components/forms/widgets/dropzone.js" type="text/javascript"></script>
<script src="../assets/assets/demo/default/custom/components/forms/widgets/bootstrap-timepicker.js" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="../assets/assets/app/js/dashboard.js" type="text/javascript"></script>
<script src="../assets/components/datatables/dx/js/jszip.min.js"></script>
<script src="../assets/components/datatables/dx/js/dx.all.js"></script>
<!--end::Page Snippets -->

<style>
.dx-row img {
    height: 50px;
    text-align: center;
}
.first-group,
.second-group {
    padding: 20px;
}

.second-group {
    background-color: rgba(191, 191, 191, 0.15);
}
</style>
<script type="text/javascript">

//Start JS Regional
loadTableReg(null);
        $.ajax({
            type: 'POST',
            url: '../config/api.php?modul=reg&id=%',
            dataType: "json",
            success: function (data) {
                loadTableReg(data)
            }
        });
function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    };
    rawFile.send(null);
}

function loadTableReg(Data) {
            $("#gridreg").dxDataGrid({
                dataSource:  Data,
                loadPanel: {
                    enabled: true
                },
                "export": {
                    enabled: true,
                    fileName: "List Regional"
                },
                editing: {
                    mode: "popup",
                    allowUpdating: true,
                    allowDeleting: true,
                    allowAdding: false,
                    popup: {
                        title: "Edit Regional",
                        showTitle: true,
                        width: 700,
                        height: 500,
                        position: {
                            my: "center",
                            at: "center",
                            of: window
                        }
                    }
                },
                showColumnLines: true,
                showRowLines: true,
                showBorders: true,
                paging: {
                    pageSize: 10,
                    enabled:true
                },

                groupPanel: {
                    visible: true
                },
                filterRow: {
                    visible: true,
                    applyFilter: "auto"
                },
                headerFilter: {
                    visible: true,
                    allowSearch:true
                },

                columnAutoWidth:true,
                allowColumnResizing: true,
                columnResizingMode: "nextColumn",
                showScrollbar: 'always',

                grouping: {
                    autoExpandAll: true
                },
                pager: {
                    showPageSizeSelector: true,
                    allowedPageSizes: [10, 50, 100],
                    showInfo: true
                },
                searchPanel: {
                    visible: true,
                    width: 240,
                    placeholder: "Search..."
                },
                columns: [
                    {dataField: 'id',visible: false},
                    // {dataField: 'kode_reg', caption: 'Kode Regional'},
                    {dataField: 'nama_regional', caption: 'Nama Regional'},
                    {dataField: 'nama_rm', caption: 'Nama RM'},
                    {dataField: 'email_rm', caption: 'Email RM'},
                ],
                summary: {
                    groupItems: [{
                        column: "nama_regional",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }],
                    totalItems: [{
                        column: "nama_regional",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }]
                },
                onRowRemoved: function (e) {
                    var id = e.key.id;
                    $.ajax({
                        type: 'GET',
                        url: '../action/crud.php?get=delete&tbl=regional&id='+ id,
                        contentType: "application/json; charset=utf-8",
                        traditional: true,
                        success: function (e) {
                            $.notify({
                                message: 'Berhasil Hapus'
                            }, {
                                type: 'success'
                            });
                        }
                    });
                },
                onRowUpdated: function (info) {
                    var id =info.key.id;
                    $.ajax({
                        type: 'POST',
                        url: '../action/crud.php?get=update&tbl=regional&id='+ id,
                        data:info.data,
                        success: function (e) {
                            $.notify({
                                message: 'Rubah Data Berhasil'
                            }, {
                                type: 'success'
                            });
                        }
                    });
                },
                onEditorPreparing: function (e) {
                    if (e.dataField == "id" && e.parentType == "dataRow") {
                        e.editorOptions.disabled = true;
                    }
                },
                onCellPrepared: function (e) {
                    if (e.rowType === "data" && e.column.command === "edit") {
                        var isEditing = e.row.isEditing,
                            $links = e.cellElement.find(".dx-link");
                        $links.text("");

                        if (isEditing) {
                            $links.filter(".dx-link-save").addClass("dx-icon-save");
                            $links.filter(".dx-link-cancel").addClass("dx-icon-revert");
                        } else {
                            $links.filter(".dx-link-edit").addClass("dx-icon-edit");
                            $links.filter(".dx-link-delete").addClass("dx-icon-trash");
                        }
                    }
                }
            });
        }
        //end JS Regional

        //Start Bahan
loadTableCab(null);
        $.ajax({
            type: 'POST',
            url: '../config/api.php?modul=cab&id=%',
            dataType: "json",
            success: function (data) {
                loadTableCab(data)
            }
        });
function loadTableCab(Data) {
                    var status_kepemilikan = [{
                    "id": 1,
                    "nama": "Milik Sendiri"
                    },{
                    "id": 2,
                    "nama": "Sewa"
                    }];
                    var status_pbb = [{
                    "id": 1,
                    "nama": "Pending"
                    },{
                    "id": 2,
                    "nama": "Lunas"
                    }];
            readTextFile("../config/api.php?modul=reg&id=%", function(text){
        var reg = JSON.parse(text);
            $("#gridcab").dxDataGrid({
                dataSource:  Data,
                loadPanel: {
                    enabled: true
                },
                "export": {
                    enabled: true,
                    fileName: "List Kantor Cabang"
                },
                editing: {
                    mode: "popup",
                    allowUpdating: true,
                    allowDeleting: true,
                    allowAdding: false,
                    popup: {
                        title: "Edit Kantor Cabang",
                        showTitle: true,
                        width: 700,
                        height: 500,
                        position: {
                            my: "center",
                            at: "center",
                            of: window
                        }
                    }
                },
                showColumnLines: true,
                showRowLines: true,
                showBorders: true,
                paging: {
                    pageSize: 10,
                    enabled:true
                },

                groupPanel: {
                    visible: true
                },
                filterRow: {
                    visible: true,
                    applyFilter: "auto"
                },
                headerFilter: {
                    visible: true,
                    allowSearch:true
                },

                columnAutoWidth:true,
                allowColumnResizing: true,
                columnResizingMode: "nextColumn",
                showScrollbar: 'always',

                grouping: {
                    autoExpandAll: true
                },
                pager: {
                    showPageSizeSelector: true,
                    allowedPageSizes: [10, 50, 100],
                    showInfo: true
                },
                searchPanel: {
                    visible: true,
                    width: 240,
                    placeholder: "Search..."
                },
                columns: [
                    {dataField: 'id',visible: false},
                    {dataField: 'nama_kantor', caption: 'Nama Kantor',fixed: true},
                    {
                    dataField: "id_regional",
                    caption: "Regional"
                    ,
                    width: 125,
                    fixed: true,
                    lookup: {
                        dataSource: reg,
                        displayExpr: "nama_regional",
                        valueExpr: "id"
                        }
                    },
                    {dataField: 'alamat', caption: 'Alamat'},
                    {dataField: 'masa_sewa', caption: 'Masa Sewa'},
                    {dataField: 'periode_awal', caption: 'Periode Awal',dataType: "date",format: 'dd-MM-yyyy'},
                    {dataField: 'periode_akhir', caption: 'Periode Akhir',dataType: "date",format: 'dd-MM-yyyy'},
                                        {
                                        dataField: "status_kepemilikan",
                                        caption: "Status Kepemilikan",
                                        width: 125,
                                        lookup: {
                                                dataSource: status_kepemilikan,
                                                displayExpr: "nama",
                                                valueExpr: "id"
                                                }
                                        },
                    {dataField: 'harga_sewa', caption: 'Harga Sewa',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'biaya_renovasi', caption: 'Biaya Renovasi',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'harga_beli', caption: 'Harga Beli',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'deposit', caption: 'Deposit',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'biaya_notaris', caption: 'Biaya Notaris',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'pajak_sewa_beli', caption: 'Pajak Sewa Beli',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'tam_daya_listrik', caption: 'Tambah Daya Listrik',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'pasang_telp', caption: 'Pemasangan Line Telp.',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'pbb_2016', caption: 'PBB',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'jth_tempo_pbb', caption: 'Jth. Tempo PBB',dataType: "date",format: 'dd-MM-yyyy'},
                    {dataField: 'status_pbb', caption: 'Status PBB',lookup: {
                                                dataSource: status_pbb,
                                                displayExpr: "nama",
                                                valueExpr: "id"
                                                }},
                    {dataField: 'sisa_sewa', caption: 'Sisa Sewa'},
                    {dataField: 'perjanjian_sewa', caption: 'Perjanjian Sewa'},
                    {dataField: 'email_cabang', caption: 'Email BM'},
                    {dataField: 'nama_bm', caption: 'Nama BM'},
                ],
                summary: {
                    groupItems: [{
                        column: "nama_kantor",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }],
                    totalItems: [{
                        column: "nama_kantor",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    },{
                        column: "harga_beli",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "harga_sewa",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "deposit",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "pbb_2016",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "biaya_notaris",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "pajak_sewa_beli",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "tam_daya_listrik",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "pasang_telp",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "biaya_renovasi",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    }
                    ]
                },
                onRowRemoved: function (e) {
                    var id = e.key.id;
                    $.ajax({
                        type: 'GET',
                        url: '../action/crud.php?get=delete&tbl=kantor_cabang&id='+ id,
                        contentType: "application/json; charset=utf-8",
                        traditional: true,
                        success: function (e) {
                            $.notify({
                                message: 'Berhasil Hapus'
                            }, {
                                type: 'success'
                            });
                        }
                    });
                },
                onRowUpdated: function (info) {
                    var id =info.key.id;
                    $.ajax({
                        type: 'POST',
                        url: '../action/crud.php?get=update&tbl=kantor_cabang&id='+ id,
                        data:info.data,
                        success: function (e) {
                            $.notify({
                                message: 'Rubah Data Berhasil'
                            }, {
                                type: 'success'
                            });
                        }
                    });
                },
                onEditorPreparing: function (e) {
                    if (e.dataField == "id" && e.parentType == "dataRow") {
                        e.editorOptions.disabled = true;
                    }
                },
                onCellPrepared: function (e) {
                    if (e.rowType === "data" && e.column.command === "edit") {
                        var isEditing = e.row.isEditing,
                            $links = e.cellElement.find(".dx-link");
                        $links.text("");

                        if (isEditing) {
                            $links.filter(".dx-link-save").addClass("dx-icon-save");
                            $links.filter(".dx-link-cancel").addClass("dx-icon-revert");
                        } else {
                            $links.filter(".dx-link-edit").addClass("dx-icon-edit");
                            $links.filter(".dx-link-delete").addClass("dx-icon-trash");
                        }
                    }
                }
            });
            });
        }
        //end JS bahan

loadTableCabreg(null);
        $.ajax({
            type: 'POST',
            url: '../config/api.php?modul=cab&id=%',
            dataType: "json",
            success: function (data) {
                loadTableCabreg(data)
            }
        });
function loadTableCabreg(Data) {
                    var status_kepemilikan = [{
                    "id": 1,
                    "nama": "Milik Sendiri"
                    },{
                    "id": 2,
                    "nama": "Sewa"
                    }];
            readTextFile("../config/api.php?modul=reg&id=%", function(text){
        var reg = JSON.parse(text);
            $("#gridcabreg").dxDataGrid({
                dataSource:  Data,
                loadPanel: {
                    enabled: true
                },                
                showColumnLines: true,
                showRowLines: true,
                showBorders: true,
                paging: {
                    pageSize: 10,
                    enabled:true
                },

                groupPanel: {
                    visible: true
                },
                filterRow: {
                    visible: true,
                    applyFilter: "auto"
                },
                headerFilter: {
                    visible: true,
                    allowSearch:true
                },

                columnAutoWidth:true,
                allowColumnResizing: true,
                columnResizingMode: "nextColumn",
                showScrollbar: 'always',

                grouping: {
                    autoExpandAll: true
                },
                pager: {
                    showPageSizeSelector: true,
                    allowedPageSizes: [10, 50, 100],
                    showInfo: true
                },
                searchPanel: {
                    visible: true,
                    width: 240,
                    placeholder: "Search..."
                },
                columns: [
                    {dataField: 'id',visible: false},
                    {dataField: 'nama_kantor', caption: 'Nama Kantor',fixed: true},
                    {
                    dataField: "id_regional",
                    caption: "Regional"
                    ,
                    width: 125,
                    fixed: true,
                    lookup: {
                        dataSource: reg,
                        displayExpr: "nama_regional",
                        valueExpr: "id"
                        }
                    },
                    {dataField: 'alamat', caption: 'Alamat'},
                    {dataField: 'masa_sewa', caption: 'Masa Sewa'},
                    {dataField: 'periode_awal', caption: 'Periode Awal',dataType: "date",format: 'dd-MM-yyyy'},
                    {dataField: 'periode_akhir', caption: 'Periode Akhir',dataType: "date",format: 'dd-MM-yyyy'},
                                        {
                                        dataField: "status_kepemilikan",
                                        caption: "Status Kepemilikan",
                                        width: 125,
                                        lookup: {
                                                dataSource: status_kepemilikan,
                                                displayExpr: "nama",
                                                valueExpr: "id"
                                                }
                                        },
                    {dataField: 'harga_sewa', caption: 'Harga Sewa',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'biaya_renovasi', caption: 'Biaya Renovasi',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'harga_beli', caption: 'Harga Beli',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'deposit', caption: 'Deposit',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'biaya_notaris', caption: 'Biaya Notaris',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'pajak_sewa_beli', caption: 'Pajak Sewa Beli',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'tam_daya_listrik', caption: 'Tambah Daya Listrik',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'pasang_telp', caption: 'Pemasangan Line Telp.',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'pbb_2016', caption: 'PBB',alignment: "right",dataType: "number",format: 'decimal fixedPoint'},
                    {dataField: 'jth_tempo_pbb', caption: 'Jth. Tempo PBB',dataType: "date",format: 'dd-MM-yyyy'},
                    {dataField: 'sisa_sewa', caption: 'Sisa Sewa'},
                    {dataField: 'perjanjian_sewa', caption: 'Perjanjian Sewa'},
                    {dataField: 'email_cabang', caption: 'Email BM'},
                    {dataField: 'nama_bm', caption: 'Nama BM'},
                ],
                summary: {
                    groupItems: [{
                        column: "nama_kantor",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }],
                    totalItems: [{
                        column: "nama_kantor",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    },{
                        column: "harga_beli",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "harga_sewa",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "deposit",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "pbb_2016",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "biaya_notaris",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "pajak_sewa_beli",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "tam_daya_listrik",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "pasang_telp",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    },{
                        column: "biaya_renovasi",
                        summaryType: "sum",
                        valueFormat: 'decimal fixedPoint',
                        displayFormat: "Total : {0}"
                    }
                    ]
                }
            });
            });
        }
        //end JS bahan

//awal table Gedung
loadTableGedung(null);
        $.ajax({
            type: 'POST',
            url: '../config/api.php?modul=f&id=%',
            dataType: "json",
            success: function (data) {
                loadTableGedung(data)
            }
        });
function loadTableGedung(Data) {

                        var status = [{
                        "id": 2,
                        "nama": "Sent"
                        },
                        {
                        "id": 1,
                        "nama": "Pending"
                        }];

                        var status_kepemilikan = [{
                        "id": 1,
                        "nama": "Milik Sendiri"
                        },{
                        "id": 2,
                        "nama": "Sewa"
                        }];

            $("#gridgedung").dxDataGrid({

                dataSource:  Data,
                loadPanel: {
                    enabled: true
                },
                "export": {
                    enabled: true,
                    fileName: "Info Sewa Gedung"

                },
                                selection: {
                                    mode: "multiple",
                                    allowSelectAll: true,
                                    // deferred: true,
                },
                                // editing: {
                                //      allowUpdating: true,
                                // },

                showColumnLines: true,
                showRowLines: true,
                showBorders: true,
                paging: {
                    pageSize: 10,
                    enabled:true
                },

                groupPanel: {
                    visible: true
                },
                filterRow: {
                    visible: true,
                    applyFilter: "auto"
                },
                headerFilter: {
                    visible: true,
                    allowSearch:true
                },

                columnAutoWidth:true,
                allowColumnResizing: true,
                columnResizingMode: "nextColumn",
                showScrollbar: 'always',

                grouping: {
                    autoExpandAll: true
                },
                pager: {
                    showPageSizeSelector: true,
                    allowedPageSizes: [10, 50, 100],
                    showInfo: true
                },
                searchPanel: {
                    visible: true,
                    width: 240,
                    placeholder: "Search..."
                },
                columns: [
                    {dataField: 'id',visible: false},
                    {dataField: 'nama_kantor', caption: 'Nama Kantor',fixed: true,alignment:'center'},
                    {dataField: 'nama_regional', caption: 'Nama Regional',fixed: true,alignment:'center'},
                    {dataField: 'masa_sewa', caption: 'Masa Sewa',alignment:'center'},
                    {dataField: 'periode_awal', caption: 'Periode Awal',dataType: "date",format: 'dd-MM-yyyy',alignment:'center'},
                    {dataField: 'periode_akhir', caption: 'Periode Akhir',dataType: "date",format: 'dd-MM-yyyy',alignment:'center'},
                                        {
                                        dataField: "status_kepemilikan",
                                        caption: "Status Kepemilikan",
                                        width: 125,
                                        lookup: {
                                                dataSource: status_kepemilikan,
                                                displayExpr: "nama",
                                                valueExpr: "id"
                                                }
                                        },
                    {dataField: 'sisa_sewa', caption: 'Sisa Sewa',alignment:'center'},
                    {dataField: 'email_cabang', caption: 'Email Cabang',alignment:'center'},
                    {dataField: 'nama_bm', caption: 'Nama BM',alignment:'center'},
                    {dataField: 'email_rm', caption: 'Email RM',alignment:'center'},
                    {dataField: 'nama_rm', caption: 'Nama RM',alignment:'center'},
                                        {
                                        dataField: "status",
                                        alignment:'center',
                                        caption: "Status Email",
                                        lookup: {
                                                dataSource: status,
                                                displayExpr: "nama",
                                                valueExpr: "id"
                                                }
                                        },
                                        {
                        caption: "Action",
                        width: 170,
                        cellTemplate: function (container, options) {
                            console.log (options);
                            if (options.rowType !== 'groupFooter') {
                                $('<div/>').html('<a  class="btn btn-danger send_email_manual" data-id="'+options.key.id+'"><span class ="label label-info">Send Email</span></a>')
                                    .appendTo(container);
                                                                        console.log(options.key.id);
                                    $(".send_email_manual").click(function(event) {
                                        $(".proses").html("Mohon tunggu, sedang mengirimkan email ke "+options.key.email_cabang);
                                      var iddata=$(this).attr("data-id");
                                      console.log(iddata);
                                      $.get('../action/sendEmail.php?id='+iddata, function(data) {
                                          $(".proses").html(data);
                                      });
                                      event.preventDefault();
                                      event.stopImmediatePropagation();
                                    });
                                    $(".send_all").click(function(event) {
                                        $(".proses").html("Mohon tunggu, sedang mengirimkan email ke seluruh penyewa");
                                        $.get('../action/sendEmail.php', function(data) {
                                          $(".proses").html(data);
                                      });
                                      event.preventDefault();
                                      event.stopImmediatePropagation();
                                    });
                            }
                        },
                        alignment: 'center', allowEditing: false
                    },
                ],

                summary: {
                    groupItems:
                                         [{
                        column: "nama_kantor",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }],
                    totalItems: [{
                        column: "nama_kantor",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }]
                },
            });

        }
        //end JS bahan

//akhir table Gedung

        // start user setting

loadTableUs(null);
        $.ajax({
            type: 'POST',
            url: '../config/api.php?modul=us',
            dataType: "json",
            success: function (data) {
                loadTableUs(data)
            }
        });
function loadTableUs(Data) {
            var level = [{
            "id": 1,
            "nama": "Admin"
            },{
            "id": 2,
            "nama": "regional"
            },{
            "id": 3,
            "nama": "cabang"
            }];
            var aktif = [{
            "id": 1,
            "nama": "Aktif"
            },{
            "id": 0,
            "nama": "Non Aktif"
            }];

            $("#gridus").dxDataGrid({
                dataSource:  Data,
                loadPanel: {
                    enabled: true
                },
                "export": {
                    enabled: true,
                    fileName: "Users Setting"
                },
                editing: {
                    mode: "popup",
                    allowUpdating: true,
                    allowDeleting: true,
                    allowAdding: false,
                    popup: {
                        title: "Edit Users",
                        showTitle: true,
                        width: 700,
                        height: 500,
                        position: {
                            my: "center",
                            at: "center",
                            of: window
                        }
                    }
                },
                showColumnLines: true,
                showRowLines: true,
                showBorders: true,
                paging: {
                    pageSize: 10,
                    enabled:true
                },

                groupPanel: {
                    visible: true
                },
                filterRow: {
                    visible: true,
                    applyFilter: "auto"
                },
                headerFilter: {
                    visible: true,
                    allowSearch:true
                },

                columnAutoWidth:true,
                allowColumnResizing: true,
                columnResizingMode: "nextColumn",
                showScrollbar: 'always',

                grouping: {
                    autoExpandAll: true
                },
                pager: {
                    showPageSizeSelector: true,
                    allowedPageSizes: [10, 50, 100, 200],
                    showInfo: true
                },
                searchPanel: {
                    visible: true,
                    width: 240,
                    placeholder: "Search..."
                },
                columns: [
                    {dataField: 'id',visible: false},
                    {dataField: 'nama', caption: 'Nama'},
                    {dataField: 'username', caption: 'Username'},
                    {dataField: 'password', caption: 'Password'},
                    {dataField: 'kode_reg', caption: 'Kode Regional', width: 100},
                    {dataField: 'email', caption: 'Email'},
                    // {dataField: 'foto', caption: 'foto'},
                    {
                    dataField: "level",
                    caption: "Level",
                    width: 125,
                    lookup: {
                        dataSource: level,
                        displayExpr: "nama",
                        valueExpr: "id"
                        }
                    },
                    {
                    dataField: "aktif",
                    caption: "Status",
                    width: 125,
                                        // allowSorting: true,
                    lookup: {
                        dataSource: aktif,
                        displayExpr: "nama",
                        valueExpr: "id"
                        }
                    }

                ],
                summary: {
                    groupItems: [{
                        column: "nama",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }],
                    totalItems: [{
                        column: "nama",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }]
                },
                onRowRemoved: function (e) {
                    var id = e.key.id;
                    $.ajax({
                        type: 'GET',
                        url: '../action/crud.php?get=delete&tbl=tbl_user&id='+ id,
                        contentType: "application/json; charset=utf-8",
                        traditional: true,
                        success: function (e) {

                            $.notify({
                                message: 'Berhasil Hapus'
                            }, {
                                type: 'success'
                            });
                        }
                    });
                },
                onRowUpdated: function (info) {
                    var id =info.key.id;
                    $.ajax({
                        type: 'POST',
                        url: '../action/crud.php?get=update&tbl=tbl_user&id='+ id,
                        data:info.data,
                        success: function (e)
                                                 {
                            $.notify({message: 'Rubah Data Berhasil'},
                                                        {type: 'success'});
                            }
                        });
                    },
                onEditorPreparing: function (e) {
                    if (e.dataField == "id" && e.parentType == "dataRow") {
                        e.editorOptions.disabled = true;
                    }
                },
                onCellPrepared: function (e) {
                    if (e.rowType === "data" && e.column.command === "edit") {
                        var isEditing = e.row.isEditing,
                            $links = e.cellElement.find(".dx-link");
                        $links.text("");

                        if (isEditing) {
                            $links.filter(".dx-link-save").addClass("dx-icon-save");
                            $links.filter(".dx-link-cancel").addClass("dx-icon-revert");
                        } else {
                            $links.filter(".dx-link-edit").addClass("dx-icon-edit");
                            $links.filter(".dx-link-delete").addClass("dx-icon-trash");
                        }
                    }
                }
            });
        }
        //end user setting

// loadTableUs(null);

//=======================================
loadTableAr(null);
        $.ajax({
            type: 'POST',
            url: '../config/api.php?modul=ar',
            dataType: "json",
            success: function (data) {
                loadTableAr(data)
            }
        });
function loadTableAr(Data) {
        //     readTextFile("../config/api.php?modul=cab", function(text){
        // var cab = JSON.parse(text);
                var status = [{
                    "id": 2,
                    "nama": "Lengkap"
                },
                {
                    "id": 1,
                    "nama": "Pending"
                }];
                var kode   = [{
                    
                }];

            $("#gridar").dxDataGrid({
                dataSource:  Data,
                loadPanel: {
                    enabled: true
                },
                "export": {
                    enabled: true,
                    fileName: "Arsip Data"
                },
                showColumnLines: true,
                showRowLines: true,
                showBorders: true,
                paging: {
                    pageSize: 10,
                    enabled:true
                },
                groupPanel: {
                    visible: true
                },
                filterRow: {
                    visible: true,
                    applyFilter: "auto"
                },
                headerFilter: {
                    visible: true,
                    allowSearch:true
                },

                columnAutoWidth:true,
                allowColumnResizing: true,
                columnResizingMode: "nextColumn",
                showScrollbar: 'always',

                grouping: {
                    autoExpandAll: true
                },
                pager: {
                    showPageSizeSelector: true,
                    allowedPageSizes: [10, 50, 100],
                    showInfo: true
                },
                searchPanel: {
                    visible: true,
                    width: 240,
                    placeholder: "Search..."
                },
                columns: [
                    {dataField: 'id_dokumen',visible: false},
                    {dataField: 'kode_cabang', caption: 'Kode Cabang'},
                    {dataField: 'nama_cabang', caption: 'Nama Cabang'},
                    {
                        dataField: 'doc_1',
                        caption: 'FC Sertifikat SHM/SHGB',
                        cellTemplate: function (container, options) {
                            console.log(options)
                            $("<div>")
                                .append($("<a href='../dokumen/1-shm-shgb/"+options.value+"'>"+options.value+"</a>"))
                                .appendTo(container);
                               
                        }
                    },
                    {
                        dataField: 'doc_2', 
                        caption: 'FC KTP Pemilik',
                        cellTemplate: function (container, options) {
                            console.log(options)
                            $("<div>")
                                .append($("<a href='../dokumen/2-ktp/"+options.value+"'>"+options.value+"</a>"))
                                .appendTo(container);
                               
                        }
                    },
                    {
                        dataField: 'doc_3', 
                        caption: 'FC KK Pemilik',
                        cellTemplate: function (container, options) {
                            console.log(options)
                            $("<div>")
                                .append($("<a href='../dokumen/3-kk/"+options.value+"'>"+options.value+"</a>"))
                                .appendTo(container);
                               
                        }
                    },
                    {
                        dataField: 'doc_4', 
                        caption: 'FC Akta Nikah Pemilik',
                        cellTemplate: function (container, options) {
                            console.log(options)
                            $("<div>")
                                .append($("<a href='../dokumen/4-akta/"+options.value+"'>"+options.value+"</a>"))
                                .appendTo(container);
                               
                        }
                    },
                    {
                        dataField: 'doc_5', 
                        caption: 'FC Lengkap IMB',
                        cellTemplate: function (container, options) {
                            console.log(options)
                            $("<div>")
                                .append($("<a href='../dokumen/5-imb/"+options.value+"'>"+options.value+"</a>"))
                                .appendTo(container);
                               
                        }
                    },
                    {
                        dataField: 'doc_6', 
                        caption: 'FC PBB Terakhir',
                        cellTemplate: function (container, options) {
                            console.log(options)
                            $("<div>")
                                .append($("<a href='../dokumen/6-pbb/"+options.value+"'>"+options.value+"</a>"))
                                .appendTo(container);
                               
                        }
                    },
                    {
                        dataField: 'doc_7', 
                        caption: 'FC Tagihan Terakhir',
                        cellTemplate: function (container, options) {
                            console.log(options)
                            $("<div>")
                                .append($("<a href='../dokumen/7-tagihan/"+options.value+"'>"+options.value+"</a>"))
                                .appendTo(container);
                               
                        }
                    },
                    {
                        dataField: 'doc_8',
                        caption: 'Foto Gedung dan kondisi sekitar',
                        cellTemplate: function (container, options) {
                            console.log(options)
                            $("<div>")
                                .append($("<a href='../dokumen/8-foto-gedung/"+options.value+"'><img src='../dokumen/8-foto-gedung/"+options.value+"'></a>"))
                                .appendTo(container);
                        }
                    },
                    {dataField: 'doc_9' , caption: 'Contact Person Pemilik/dikuasakan'},
                    {dataField: 'doc_10', caption: 'Gedung Alternatif lain'},
                    {
                        dataField: 'status', 
                        alignment:'center', 
                        caption: 'status',
                        lookup: {
                                    dataSource: status,
                                    displayExpr: "nama",
                                    valueExpr: "id"
                                }
                    }
                ],
                summary: {
                    groupItems: [{
                        column: "nama",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }],
                    totalItems: [{
                        column: "nama",
                        summaryType: "count",
                        displayFormat: "{0} Items"
                    }]
                },
            });
        }

//=======================================
// loadTableVer(null);
//         $.ajax({
//             type: 'POST',
//             url: '../config/api.php?modul=ver',
//             dataType: "json",
//             success: function (data) {
//                 loadTableVer(data)
//             }
//         });
// function loadTableVer(Data) {

//             var status = [{
//                         "status": 2,
//                         "nama": "Lengkap"
//                         },
//                         {
//                         "status": 1,
//                         "nama": "Pending"
//                         }];

//             $("#gridverifikasi").dxDataGrid({
//                 dataSource:  Data,
//                 loadPanel: {
//                     enabled: true
//                 },
//                 "export": {
//                     enabled: true,
//                     fileName: "Verifikasi Data"
//                 },
//                 showColumnLines: true,
//                 showRowLines: true,
//                 showBorders: true,
//                 paging: {
//                     pageSize: 10,
//                     enabled:true
//                 },
//                 groupPanel: {
//                     visible: true
//                 },
//                 filterRow: {
//                     visible: true,
//                     applyFilter: "auto"
//                 },
//                 headerFilter: {
//                     visible: true,
//                     allowSearch:true
//                 },

//                 columnAutoWidth:true,
//                 allowColumnResizing: true,
//                 columnResizingMode: "nextColumn",
//                 showScrollbar: 'always',

//                 grouping: {
//                     autoExpandAll: true
//                 },
//                 pager: {
//                     showPageSizeSelector: true,
//                     allowedPageSizes: [10, 50, 100],
//                     showInfo: true
//                 },
//                 searchPanel: {
//                     visible: true,
//                     width: 240,
//                     placeholder: "Search..."
//                 },
//                 columns: [
//                     {dataField: 'id_dokumen',visible: false},
//                     {dataField: 'kode_cabang', caption: 'Kode Cabang'},
//                     {dataField: 'nama_cabang', caption: 'Nama Cabang'},
//                     {
//                         dataField: 'doc_1',
//                         caption: 'FC Sertifikat SHM/SHGB', alignment: 'center',

//                         cellTemplate: function (container, options) {
//                             console.log(options)
//                             $("<div>")
//                                 .append($("<a href='../dokumen/1-shm-shgb/"+options.value+"'>"+options.value+"</a>"))
//                                 .appendTo(container);                        
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",                                    
//                                     onClick: function() {              
//                                          $.ajax({
//                                             type: 'POST',
//                                              url: 'status_dokumen/stat_dok1.php',
//                                             // data: {'status_dokumen1':status_dokumen1},
//                                             dataType:'json',
//                                             success: function(response) {    
//                                                 setTimeout(function(){
//                                                 window.location.reload(1);
//                                             },  500);                                         
//                                         }}); 
//                                     }
//                             }).appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",                        
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                         }
//                     },
//                     {
//                         dataField: 'doc_2', 
//                         caption: 'FC KTP Pemilik', alignment: 'center',
//                         cellTemplate: function (container, options) {
//                             console.log(options)
//                             $("<div>")
//                                 .append($("<a href='../dokumen/2-ktp/"+options.value+"'>"+options.value+"</a>"))
//                                 .appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                         }
//                     },
//                     {
//                         dataField: 'doc_3', 
//                         caption: 'FC KK Pemilik', alignment: 'center',
//                         cellTemplate: function (container, options) {
//                             console.log(options)
//                             $("<div>")
//                                 .append($("<a href='../dokumen/3-kk/"+options.value+"'>"+options.value+"</a>"))
//                                 .appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                         }
//                     },
//                     {
//                         dataField: 'doc_4', 
//                         caption: 'FC Akta Nikah Pemilik', alignment: 'center',
//                         cellTemplate: function (container, options) {
//                             console.log(options)
//                             $("<div>")
//                                 .append($("<a href='../dokumen/4-akta/"+options.value+"'>"+options.value+"</a>"))
//                                 .appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                         }
//                     },
//                     {
//                         dataField: 'doc_5', 
//                         caption: 'FC Lengkap IMB', alignment: 'center',
//                         cellTemplate: function (container, options) {
//                             console.log(options)
//                             $("<div>")
//                                 .append($("<a href='../dokumen/5-imb/"+options.value+"'>"+options.value+"</a>"))
//                                 .appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                         }
//                     },
//                     {
//                         dataField: 'doc_6', 
//                         caption: 'FC PBB Terakhir', alignment: 'center',
//                         cellTemplate: function (container, options) {
//                             console.log(options)
//                             $("<div>")
//                                 .append($("<a href='../dokumen/6-pbb/"+options.value+"'>"+options.value+"</a>"))
//                                 .appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                             }
//                     },
//                     {
//                         dataField: 'doc_7', 
//                         caption: 'FC Tagihan Terakhir', alignment: 'center',
//                         cellTemplate: function (container, options) {
//                             console.log(options)
//                             $("<div>")
//                                 .append($("<a href='../dokumen/7-tagihan/"+options.value+"'>"+options.value+"</a>"))
//                                 .appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                         }
//                     },
//                     {
//                         dataField: 'doc_8', alignment: 'center',
//                         caption: 'Foto Gedung dan kondisi sekitar',
//                         cellTemplate: function (container, options) {
//                             console.log(options)
//                             $("<div>")
//                                 .append($("<a href='../dokumen/8-foto-gedung/"+options.value+"'><img src='../dokumen/8-foto-gedung/"+options.value+"'></a>"))
//                                 .appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "aktif",
//                                     onClick: function() {              
                                         
//                                     }
//                             }).appendTo(container);
//                         }
//                     },
//                     {dataField: 'doc_9' , caption: 'Contact Person Pemilik/dikuasakan'},
//                     {dataField: 'doc_10', caption: 'Gedung Alternatif lain'},
//                     {dataField: 'status', alignment:'center', caption: 'status',lookup: {
//                                                 dataSource: status,
//                                                 displayExpr: "nama",
//                                                 valueExpr: "status"
//                                                 }},
//                     {
//                         alignment: 'center',
//                         caption: "Action",
//                         cellTemplate: function (container, options) {
//                             var id_dokumen = options.key.id_dokumen;
//                             $("<div>").dxButton({
//                                     stylingMode: "contained",
//                                     text: "Contained",
//                                     text: "Verifikasi",
//                                     onClick: function() {                                       
//                                         var aktif = confirm("Press a button!");
//                                         if (aktif == true) {                                        
//                                             $.ajax({
//                                                 type: 'POST',
//                                                  url: 'get_data.php',
//                                                 data: {'id_dokumen':id_dokumen},
//                                                 dataType:'json',
//                                                 success: function(response) {                                             
//                                             }}); 
//                                             DevExpress.ui.notify({
//                                                 message: "Dokumen telah berhasil diverifikasi",
//                                                   width: 300, 
//                                                 shading: false,
//                                             });                                   
//                                             setTimeout(function(){
//                                                 window.location.reload(1);
//                                             },  500);
//                                         } else {
//                                           alert("You pressed Cancel!");
//                                         } 
//                                     }                                
//                             }).appendTo(container);

//                         }
//                     }
//                 ],
//                 summary: {
//                     groupItems: [{
//                         column: "nama",
//                         summaryType: "count",
//                         displayFormat: "{0} Items"
//                     }],
//                     totalItems: [{
//                         column: "nama",
//                         summaryType: "count",
//                         displayFormat: "{0} Items"
//                     }]
//                 },
//             });
//         }


// loadTablePbb(null);
//         $.ajax({
//             type: 'POST',
//             url: '../config/api.php?modul=pbb',
//             dataType: "json",
//             success: function (data) {
//                 loadTablePbb(data)
//             }
//         });
// function loadTablePbb(Data) {

//             // var status_pbb = [{
//             //     "status": 2,
//             //     "nama": "Lengkap"
//             // },
//             // {
//             //     "status": 1,
//             //     "nama": "Pending"
//             // }];

//             $("#gridverifikasiPBB").dxDataGrid({
//                 dataSource:  Data,
//                 loadPanel: {
//                     enabled: true
//                 },
//                 "export": {
//                     enabled: true,
//                     fileName: "Verifikasi PBB"
//                 },
//                 showColumnLines: true,
//                 showRowLines: true,
//                 showBorders: true,
//                 paging: {
//                     pageSize: 10,
//                     enabled:true
//                 },
//                 groupPanel: {
//                     visible: true
//                 },
//                 filterRow: {
//                     visible: true,
//                     applyFilter: "auto"
//                 },
//                 headerFilter: {
//                     visible: true,
//                     allowSearch:true
//                 },

//                 columnAutoWidth:true,
//                 allowColumnResizing: true,
//                 columnResizingMode: "nextColumn",
//                 showScrollbar: 'always',

//                 grouping: {
//                     autoExpandAll: true
//                 },
//                 pager: {
//                     showPageSizeSelector: true,
//                     allowedPageSizes: [10, 50, 100],
//                     showInfo: true
//                 },
//                 searchPanel: {
//                     visible: true,
//                     width: 240,
//                     placeholder: "Search..."
//                 },
//                 columns: [
//                     {dataField: 'nama_kantor', caption: 'Nama Kantor', width: 150},
//                     {dataField: 'pbb_2016', caption: 'PBB', width: 150},
//                     {dataField: 'periode_akhir', caption: 'Periode Akhir', width: 150},
//                     {
//                         dataField: 'status_pbb', caption: 'status',
//                         alignment: 'center',
//                         width: '450',
//                         cellTemplate: function (container, options) {                            
//                             $("<div>").dxCheckBox({
//                                 value: false,
//                                 accessKey: null,
//                                 activeStateEnabled: true,
//                                 disabled: false,
//                                 elementAttr: {},
//                                 focusStateEnabled: true,
//                                 height: undefined,
//                                 hint: undefined,
//                                 hoverStateEnabled: true,
//                                 isValid: true,
//                                 name: "",
//                                 onContentReady: null,
//                                 onDisposing: null,
//                                 onInitialized: null,
//                                 onOptionChanged: null,
//                                 onValueChanged: true,
//                                 readOnly: false,
//                                 rtlEnabled: false,
//                                 tabIndex: 0,
//                                 text: "",
//                                 validationError: null,
//                                 validationErrors: null,
//                                 validationMessageMode: "auto",
//                                 validationStatus: "valid",                                
//                                 visible: true,
//                                 width: undefined
//                             }).appendTo(container);

//                         }

//                     },
                    
//                 ],
//                 summary: {
//                     groupItems: [{
//                         column: "nama",
//                         summaryType: "count",
//                         displayFormat: "{0} Items"
//                     }],
//                     totalItems: [{
//                         column: "nama",
//                         summaryType: "count",
//                         displayFormat: "{0} Items"
//                     }]
//                 },
//             });
//         }




//=======================================
</script>
</body>
<!-- end::Body -->
</html>
