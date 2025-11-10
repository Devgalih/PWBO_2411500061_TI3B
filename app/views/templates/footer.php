<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script kita -->
<script>
// Modal functionality
$(document).ready(function() {
    console.log('Document ready!');
    
    // Tombol Tambah
    $('.tombolTambahData').on('click', function() {
        console.log('Tombol Tambah diklik');
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', '<?php echo BASEURL; ?>/mahasiswa/tambah');
        
        // Reset form untuk tambah data
        $('#id').val('');
        $('#nama').val('');
        $('#nim').val('');
        $('#email').val('');
        $('#jurusan').val('Teknik Informatika');
    });

    // Tombol Ubah
    $('.tampilModalUbah').on('click', function() {
        console.log('Tombol Ubah diklik');
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', '<?php echo BASEURL; ?>/mahasiswa/ubah');
        
        const id = $(this).data('id');
        console.log('ID:', id);

        // AJAX untuk mengambil data mahasiswa berdasarkan ID
        $.ajax({
            url: '<?php echo BASEURL; ?>/mahasiswa/getUbah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log('Data dari server:', data);
                
                // Isi form dengan data yang diterima
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                
                console.log('Form berhasil diisi dengan data mahasiswa');
            },
            error: function(xhr, status, error) {
                console.log('Error AJAX:', error);
                console.log('Response:', xhr.responseText);
                alert('Gagal memuat data mahasiswa');
            }
        });
    });
});
</script>

</body>
</html>