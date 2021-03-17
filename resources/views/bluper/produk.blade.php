<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>.:FazzTrack Rahma Syndu Grananta:.</title>

<!-- CSS -->
<link href="{{ asset('mantab/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mantab/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mantab/iziToast.css') }}" rel="stylesheet">
<!-- AKHIR STYLE CSS -->

<!-- LIBARARY JS -->
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/bootstrap.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/popper.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/iziToast.js') }}"></script>

    <!-- <script type="text/javascript" language="javascript" src="{{ asset('mantab/duits/jquery-1.11.2.min.js') }}"></script> -->
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/duits/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('mantab/duits/jquery.maskMoney.min.js') }}"></script>

<!-- Akhiri LIBARARY JS -->



</head>
<body class="wide comments example dt-example-bootstrap4">

<!-- MULAI CONTAINER -->
<div class="container">

<div class="card">
           
    <div class="card-body">
        <!-- MULAI TOMBOL TAMBAH -->
        <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Tambah Produk</a>
        <br><br>
        <!-- AKHIR TOMBOL -->
        <!-- MULAI TABLE -->
        <table class="table table-striped table-bordered table-sm" id="table_prk">
            <thead>
                <tr>
                <th>No</th>
                <th>ID produk</th>
                <th>Tanggal</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
                </tr>
            </thead>
        </table>
        <!-- AKHIR TABLE -->
    </div>
</div>
</div>
<!-- AKHIR CONTAINER -->


<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
		    return false;
		  return true;
		}
</script>

<script type="text/javascript">
            $(document).ready(function(){
                // Format mata uang.
                $( '.uang' ).mask('000.000.000', {reverse: true});

            })
</script>


    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">

                                <input type="hidden" name="id_produk" id="id_produk">

                                <!-- <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nomer produk</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="id_produk" name="id_produk" value="" required>
                                    </div>
                                </div> -->

       

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama produk</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Keterangan</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Harga</label>
                                    <!-- <div class="col-sm-12"> -->
                                        <!-- <input type="number" class="form-control" onkeypress="return hanyaAngka(event)" id="harga" name="harga" value="" required> -->
                                        <!-- <input type="text" class="form-control uang" id="harga" name="harga" value="" required> -->
                                    <!-- </div> -->
                                <div class="input-group mb-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text col-sm-12">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" id="harga" name="harga" value="" required >
                                <div class="input-group-append">
                                    <span class="input-group-text col-sm-12">,-</span>
                                </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Jumlah</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="jumlah" name="jumlah" onkeypress="return hanyaAngka(event)" value="" required>
                                    </div>
                                </div>

                            </div>

                             <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">Simpan
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->


    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade" id="tambah-edit-modal_mantab" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul2"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit2" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">

                                <!-- <input type="hidden" name="id_produk" id="id_produk2"> -->

                                <div  type="hidden" class="form-group">

                                        <input type="hidden"class="form-control" id="id_produk2" name="id_produk" value="" required>
                                   
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama produk</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nama_produk2" name="nama_produk" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Keterangan</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="keterangan2" name="keterangan" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Harga</label>
                                    <!-- <div class="col-sm-12"> -->
                                        <!-- <input type="number" class="form-control" onkeypress="return hanyaAngka(event)" id="harga" name="harga" value="" required> -->
                                        <!-- <input type="text" class="form-control uang" id="harga" name="harga" value="" required> -->
                                    <!-- </div> -->
                                <div class="input-group mb-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text col-sm-12">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" id="harga2" name="harga" value="" required >
                                <div class="input-group-append">
                                    <span class="input-group-text col-sm-12">,-</span>
                                </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Jumlah</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="jumlah2" name="jumlah" onkeypress="return hanyaAngka(event)" value="" required>
                                    </div>
                                </div>

                            </div>

                             <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan2"
                                    value="create">Simpan
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->


    <!-- MULAI MODAL KONFIRMASI DELETE-->

    <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERHATIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Jika menghapus Data ini maka</b></p>
                    <p>*data tersebut hilang selamanya, apakah anda yakin?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                        Data</button>
                </div>
            </div>
        </div>
    </div>

    <!-- AKHIR MODAL -->





<script>
 //CSRF TOKEN PADA HEADER
        //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#tombol-tambah').click(function () {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id_produk').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah produk Baru"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });

  $(document).ready(function () {
            $('#table_prk').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "{{ route('produk.index') }}",
                    type: 'GET'
                },
                columns: 
                [
                    {
                        "data": "id",
                        // name: "id_produk"
    render: function (data, type, row, meta) {
        return meta.row + meta.settings._iDisplayStart + 1;
    }   
                    },

                    {
                        "data": "id_produk",
                        name: "id_produk"
    
                    },
                    {
                        "data": "updated_at",
                        name: "updated_at",
                 
                        
                        "render": function (data) {
                        // var date = new Date(data);
                        // var month = date.getMonth() + 1;
                        // return (month.toString().length > 1 ? month : "0" + month) + "/" + date.getDate() + "/" + date.getFullYear();
  
                        var dt = new Date(data);
                        year  = dt.getFullYear();
                        month = (dt.getMonth() + 1).toString().padStart(2, "0");
                        day   = dt.getDate().toString().padStart(2, "0");
                       
                        formatted = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                        return(day + '/' + month + '/' + year+ ' ' + formatted );

    }
                    },
                    {
                        data: "nama_produk",
                        name: "nama_produk"
                    },
                    {
                        data: "keterangan",
                        name: "keterangan"
                    },
                    {
                        data: "harga",
                        name: "harga",                        render: $.fn.dataTable.render.number( '.', ',', 2, 'Rp ' )

                    },
                    {
                        data: "jumlah",
                        name: "jumlah"
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
            ],
                order: [
                    [1, "DESC"]
                ]
            });
        });

        //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
        if ($("#form-tambah-edit").length > 0) {
            $("#form-tambah-edit").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');

                    $.ajax({
                        data: $('#form-tambah-edit')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('produk.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_prk').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('success')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
                    });
                }
            })
        }

        if ($("#form-tambah-edit2").length > 0) {
            $("#form-tambah-edit2").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan2').val();
                    $('#tombol-simpan2').html('Sending..');

                    $.ajax({
                        data: $('#form-tambah-edit2')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('produk.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-edit2').trigger("reset"); //form reset
                            $('#tambah-edit-modal_mantab').modal('hide'); //modal hide
                            $('#tombol-simpan2').html('Simpan'); //tombol simpan
                            var oTable = $('#table_prk').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('success')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan2').html('Simpan');
                        }
                    });
                }
            })
        }

        //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id_produk = $(this).data('id_produk');
            $.get('produk/' + data_id_produk + '/edit', function (data) {
                $('#modal-judul2').html("Rubah produk");
                $('#tombol-simpan2').val("edit-post");
                $('#tambah-edit-modal_mantab').modal('show');

                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id_produk2').val(data.id_produk);
                $('#nama_produk2').val(data.nama_produk);
                $('#keterangan2').val(data.keterangan);
                $('#harga2').val(data.harga);
                $('#jumlah2').val(data.jumlah);
               
            })
        });

        //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id_produk');
            $('#konfirmasi-modal').modal('show');
        });

        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({

                url: "produk/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_prk').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('delete')}}',
                        position: 'bottomRight'
                    });
                }
            })
        });

	</script>
</body>
</html>

