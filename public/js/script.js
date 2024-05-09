$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#judulModal').html('Tambah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Tambah Data')
        $('.modal-content form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/tambah')
    })

    $('.tampilModalEdit').on('click', function() {
        $('#judulModal').html('Edit Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Edit Data')
        $('.modal-content form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/edit')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama)
                $('#nrp').val(data.nrp)
                $('#email').val(data.email)
                $('#jurusan').val(data.jurusan)
                $('#id').val(data.id)
            }
        })
    })

})