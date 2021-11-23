$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#judulModalLabel').html('Tambah Data Mafia');
        $('.modal-footer button[type=submit').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function() {
        
        $('#judulModalLabel').html('Ubah Data Mafia');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mafia/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mafia/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#pengalaman').val(data.pengalaman);
                $('#id').val(data.id);
            }
        });

    });

});