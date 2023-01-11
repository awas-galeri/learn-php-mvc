$(function() {

    $('.tombolTambahData').on('click', function() {

        $('#judulModal').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    $('.tampilModalUbah').on('click', function() {
        
        $('#judulModal').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost:8080/phpmvc/public/siswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost:8080/phpmvc/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nip').val(data.nip);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    });

});