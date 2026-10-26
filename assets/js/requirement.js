// alert('File requirement.js BERHASIL KE-LOAD!');

document.addEventListener('DOMContentLoaded', function() {
    var btnSimpan = document.getElementById('btnSimpanReq');
    var modalReq = document.getElementById('modalReq');

    // 1. Validasi Tombol Simpan
    if (btnSimpan) {
        btnSimpan.addEventListener('click', function(e) {
            e.preventDefault(); 
            
            var isValid = true;
            var fields = modalReq.querySelectorAll('input[required], select[required], textarea[required]');
            
            fields.forEach(function(field) {
                if (!field.checkValidity()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                // Efek getar
                var modalContent = modalReq.querySelector('.modal-content');
                modalContent.classList.add('shake');
                setTimeout(function() {
                    modalContent.classList.remove('shake');
                }, 400);
                
                // Fokus ke field pertama yang error
                var firstInvalid = modalReq.querySelector('.is-invalid');
                if (firstInvalid) firstInvalid.focus();
                return;
            }
            
            console.log('Payload lolos validasi!');
            // $.post('...');
        });
    }

    // 2. Hapus merah pas user ngetik
    if (modalReq) {
        modalReq.addEventListener('input', function(e) {
            if (e.target.hasAttribute('required')) {
                if (e.target.checkValidity()) {
                    e.target.classList.remove('is-invalid');
                }
            }
        });
    }
});