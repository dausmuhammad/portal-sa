window.addEventListener('load', function () {

    var modal = document.getElementById('modalMeeting');
    if (!modal) return;

    // ==========================================
    // 1. LOGIKA MULTI-SELECT DROPDOWN (PESERTA)
    // ==========================================
    // var multiSelect = document.getElementById('pesertaMultiSelect');
    // var errorMsg = document.getElementById('pesertaError');

    // if (multiSelect) {
    //     var chipsContainer = multiSelect.querySelector('.ms-chips');
    //     var placeholder = multiSelect.querySelector('.ms-placeholder');
    //     var options = multiSelect.querySelectorAll('.ms-option input[type="checkbox"]');
    //     var searchInput = multiSelect.querySelector('.ms-search');
    //     var btnSelectAll = multiSelect.querySelector('.ms-select-all');
    //     var btnClearAll = multiSelect.querySelector('.ms-clear-all');

    //     // Fungsi Render Chip (TANPA nge-set error merah otomatis)
    //     function renderChips() {
    //         chipsContainer.innerHTML = '';
    //         var selectedCount = 0;
    //         var selectedItems = [];

    //         options.forEach(function (cb) {
    //             if (cb.checked) {
    //                 selectedCount++;
    //                 selectedItems.push(cb);
    //             }
    //         });

    //         if (selectedCount === 0) {
    //             placeholder.style.display = 'inline';
    //         } else {
    //             placeholder.style.display = 'none';
    //             // Kalau udah milih, otomatis hapus pesan error
    //             if (errorMsg) errorMsg.style.display = 'none';
    //             multiSelect.classList.remove('is-invalid');
    //         }

    //         // Tampilkan maksimal 2 chip
    //         selectedItems.slice(0, 2).forEach(function (cb) {
    //             var label = cb.getAttribute('data-label');
    //             var chip = document.createElement('span');
    //             chip.className = 'ms-chip';
    //             chip.innerHTML = label + ' <button type="button" class="chip-x">&times;</button>';

    //             chip.querySelector('.chip-x').addEventListener('click', function (e) {
    //                 e.preventDefault();
    //                 e.stopPropagation();
    //                 cb.checked = false;
    //                 renderChips();
    //             });
    //             chipsContainer.appendChild(chip);
    //         });

    //         // Kalau lebih dari 2, tampilkan "+N lagi"
    //         if (selectedCount > 2) {
    //             var moreChip = document.createElement('span');
    //             moreChip.className = 'ms-chip ms-chip-more';
    //             moreChip.textContent = '+' + (selectedCount - 2) + ' lagi';
    //             chipsContainer.appendChild(moreChip);
    //         }
    //     }

    //     // Event Checkbox
    //     options.forEach(function (cb) {
    //         cb.addEventListener('change', renderChips);
    //     });

    //     // Search Filter
    //     if (searchInput) {
    //         searchInput.addEventListener('input', function () {
    //             var q = this.value.toLowerCase();
    //             multiSelect.querySelectorAll('.ms-option').forEach(function (label) {
    //                 var text = label.innerText.toLowerCase();
    //                 label.style.display = text.includes(q) ? 'flex' : 'none';
    //             });
    //         });
    //         // Cegah dropdown nutup saat ngetik
    //         searchInput.addEventListener('click', function (e) { e.stopPropagation(); });
    //     }

    //     // Pilih Semua / Hapus Semua
    //     if (btnSelectAll) {
    //         btnSelectAll.addEventListener('click', function (e) {
    //             e.preventDefault();
    //             options.forEach(function (cb) {
    //                 if (cb.closest('.ms-option').style.display !== 'none') cb.checked = true;
    //             });
    //             renderChips();
    //         });
    //     }
    //     if (btnClearAll) {
    //         btnClearAll.addEventListener('click', function (e) {
    //             e.preventDefault();
    //             options.forEach(function (cb) { cb.checked = false; });
    //             renderChips();
    //         });
    //     }

    //     // Render awal (cuma munculin placeholder, GAK nge-set error)
    //     renderChips();
    // }

    // ==========================================
    // 2. ACTION ITEMS DINAMIS
    // ==========================================
    var btnAddAi = document.getElementById('btnAddAi');
    var aiContainer = document.getElementById('actionItemContainer');

    if (btnAddAi && aiContainer) {
        btnAddAi.addEventListener('click', function () {
            var row = document.createElement('div');
            row.className = 'ai-row';
            row.innerHTML = `
                <div class="ai-fields">
                    <input type="text" class="form-control ai-desc" placeholder="Deskripsi action...">
                    <select class="form-select ai-pic">
                        <option value="">PIC</option>
                        <option>Ari</option><option>Budi</option><option>Citra</option><option>Dwi</option><option>Daus</option>
                    </select>
                    <input type="date" class="form-control ai-date">
                </div>
                <button type="button" class="btn-remove-ai"><i class="bi bi-x-lg"></i></button>
            `;
            aiContainer.appendChild(row);
        });

        // Hapus Action Item
        aiContainer.addEventListener('click', function (e) {
            if (e.target.closest('.btn-remove-ai')) {
                var rows = aiContainer.querySelectorAll('.ai-row');
                if (rows.length > 1) {
                    e.target.closest('.ai-row').remove();
                } else {
                    var row = e.target.closest('.ai-row');
                    row.querySelector('.ai-desc').value = '';
                    row.querySelector('.ai-pic').value = '';
                    row.querySelector('.ai-date').value = '';
                }
            }
        });
    }

    // ==========================================
    // 3. VALIDASI FORM SUBMIT
    // ==========================================
    var btnSimpan = document.getElementById('btnSimpanMeeting');
    if (btnSimpan) {
        btnSimpan.addEventListener('click', function (e) {
            e.preventDefault();
            var isValid = true;

            // Cek field required
            var fields = modal.querySelectorAll('input[required], select[required], textarea[required]');
            fields.forEach(function (field) {
                if (!field.checkValidity()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            // Cek custom peserta (BARU MUNCULIN ERROR DI SINI)
            // if (multiSelect) {
            //     var selectedCount = multiSelect.querySelectorAll('input:checked').length;
            //     if (selectedCount === 0) {
            //         isValid = false;
            //         multiSelect.classList.add('is-invalid');
            //         if (errorMsg) errorMsg.style.display = 'block';
            //     } else {
            //         multiSelect.classList.remove('is-invalid');
            //         if (errorMsg) errorMsg.style.display = 'none';
            //     }
            // }

            // if (!isValid) {
            //     var modalContent = modal.querySelector('.modal-content');
            //     modalContent.classList.add('shake');
            //     setTimeout(function () { modalContent.classList.remove('shake'); }, 400);
            //     return;
            // }

            // Kumpulkan Data Action Items
            var actions = [];
            if (aiContainer) {
                aiContainer.querySelectorAll('.ai-row').forEach(function (row) {
                    var desc = row.querySelector('.ai-desc').value.trim();
                    if (desc) {
                        actions.push({
                            deskripsi: desc,
                            pic: row.querySelector('.ai-pic').value,
                            due_date: row.querySelector('.ai-date').value
                        });
                    }
                });
            }

            // Ambil Peserta
            var peserta = [];
            if (multiSelect) {
                multiSelect.querySelectorAll('input:checked').forEach(function (cb) {
                    peserta.push(cb.value);
                });
            }

            console.log({
                judul: document.getElementById('mtJudul').value,
                tipe: document.getElementById('mtTipe').value,
                peserta: peserta,
                actions: actions
            });

            alert('Validasi Meeting Lolos!');
        });
    }

    // ==========================================
    // 4. RESET STATE PAS MODAL DIBUKA / DITUTUP
    // ==========================================
    modal.addEventListener('show.bs.modal', function () {
        // Hapus semua error merah
        modal.querySelectorAll('.is-invalid').forEach(function (el) {
            el.classList.remove('is-invalid');
        });
        if (multiSelect) multiSelect.classList.remove('is-invalid');
        if (errorMsg) errorMsg.style.display = 'none';
    });
});