window.addEventListener('load', function () {

    var modal = document.getElementById('modalDev');
    if (!modal) return;

    // ==========================================
    // 1. FITUR AUTO-FILL INISIAL & COLOR PICKER
    // ==========================================
    var inpNama = document.getElementById('inpNama');
    var inpInisial = document.getElementById('inpInisial');
    var inpWarna = document.getElementById('inpWarna');
    var colorSwatches = document.querySelectorAll('#colorPicker .color-swatch');

    // Auto-fill inisial dari nama
    if (inpNama && inpInisial) {
        inpNama.addEventListener('input', function () {
            if (!inpInisial.dataset.manual) {
                var parts = this.value.trim().split(/\s+/);
                var init = '';
                if (parts[0]) init += parts[0].charAt(0).toUpperCase();
                if (parts[1]) init += parts[1].charAt(0).toUpperCase();
                inpInisial.value = init;
            }
        });
    }

    // Paksa inisial cuma huruf & max 2
    if (inpInisial) {
        inpInisial.addEventListener('input', function () {
            this.value = this.value.replace(/[^A-Za-z]/g, '').toUpperCase().slice(0, 2);
            this.dataset.manual = 'true';
        });
    }

    // Pilih Warna
    colorSwatches.forEach(function (swatch) {
        swatch.addEventListener('click', function () {
            colorSwatches.forEach(function (s) { s.classList.remove('selected'); });
            this.classList.add('selected');
            inpWarna.value = this.dataset.color;
        });
    });

    // ==========================================
    // 2. LOGIKA MULTI-SELECT DROPDOWN (PROYEK)
    // ==========================================
    var multiSelect = document.getElementById('projectMultiSelect');
    var errorMsg = document.getElementById('proyekError');

    if (multiSelect) {
        var chipsContainer = multiSelect.querySelector('.ms-chips');
        var placeholder = multiSelect.querySelector('.ms-placeholder');
        var options = multiSelect.querySelectorAll('.ms-option input[type="checkbox"]');
        var searchInput = multiSelect.querySelector('.ms-search');
        var btnSelectAll = multiSelect.querySelector('.ms-select-all');
        var btnClearAll = multiSelect.querySelector('.ms-clear-all');

        function renderChips() {
            chipsContainer.innerHTML = '';
            var selectedCount = 0;
            var selectedItems = [];

            options.forEach(function (cb) {
                if (cb.checked) {
                    selectedCount++;
                    selectedItems.push(cb);
                }
            });

            if (selectedCount === 0) {
                placeholder.style.display = 'inline';
            } else {
                placeholder.style.display = 'none';
                if (errorMsg) errorMsg.style.display = 'none';
                multiSelect.classList.remove('is-invalid');
            }

            selectedItems.slice(0, 2).forEach(function (cb) {
                var label = cb.getAttribute('data-label');
                var chip = document.createElement('span');
                chip.className = 'ms-chip';
                chip.innerHTML = label + ' <button type="button" class="chip-x">&times;</button>';

                chip.querySelector('.chip-x').addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    cb.checked = false;
                    renderChips();
                });
                chipsContainer.appendChild(chip);
            });

            if (selectedCount > 2) {
                var moreChip = document.createElement('span');
                moreChip.className = 'ms-chip ms-chip-more';
                moreChip.textContent = '+' + (selectedCount - 2) + ' lagi';
                chipsContainer.appendChild(moreChip);
            }
        }

        options.forEach(function (cb) { cb.addEventListener('change', renderChips); });

        if (searchInput) {
            searchInput.addEventListener('input', function () {
                var q = this.value.toLowerCase();
                multiSelect.querySelectorAll('.ms-option').forEach(function (label) {
                    var text = label.innerText.toLowerCase();
                    label.style.display = text.includes(q) ? 'flex' : 'none';
                });
            });
            searchInput.addEventListener('click', function (e) { e.stopPropagation(); });
        }

        if (btnSelectAll) {
            btnSelectAll.addEventListener('click', function (e) {
                e.preventDefault();
                options.forEach(function (cb) {
                    if (cb.closest('.ms-option').style.display !== 'none') cb.checked = true;
                });
                renderChips();
            });
        }
        if (btnClearAll) {
            btnClearAll.addEventListener('click', function (e) {
                e.preventDefault();
                options.forEach(function (cb) { cb.checked = false; });
                renderChips();
            });
        }

        renderChips();
    }

    // ==========================================
    // 3. VALIDASI FORM SUBMIT
    // ==========================================
    var btnSimpan = document.getElementById('btnSimpanDev');
    if (btnSimpan) {
        btnSimpan.addEventListener('click', function (e) {
            e.preventDefault();
            var isValid = true;

            var fields = modal.querySelectorAll('input[required], select[required]');
            fields.forEach(function (field) {
                if (!field.checkValidity()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            // Validasi opsional (email & jira)
            var inpEmail = document.getElementById('inpEmail');
            var inpJira = document.getElementById('inpJira');

            [inpEmail, inpJira].forEach(function (field) {
                if (field && field.value !== '' && !field.checkValidity()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else if (field) {
                    field.classList.remove('is-invalid');
                }
            });

            // Validasi Proyek
            if (multiSelect) {
                var selectedCount = multiSelect.querySelectorAll('input:checked').length;
                if (selectedCount === 0) {
                    isValid = false;
                    multiSelect.classList.add('is-invalid');
                    if (errorMsg) errorMsg.style.display = 'block';
                }
            }

            if (!isValid) {
                var modalContent = modal.querySelector('.modal-content');
                modalContent.classList.add('shake');
                setTimeout(function () { modalContent.classList.remove('shake'); }, 400);
                return;
            }

            var projects = [];
            if (multiSelect) {
                multiSelect.querySelectorAll('input:checked').forEach(function (cb) {
                    projects.push(cb.value);
                });
            }

            console.log({
                nama: inpNama.value,
                role: document.getElementById('inpRole').value,
                inisial: inpInisial.value,
                warna: inpWarna.value,
                projects: projects
            });

            alert('Validasi Developer Lolos!');
        });
    }

    // Reset state pas modal dibuka
    modal.addEventListener('show.bs.modal', function () {
        modal.querySelectorAll('.is-invalid').forEach(function (el) {
            el.classList.remove('is-invalid');
        });
        if (multiSelect) multiSelect.classList.remove('is-invalid');
        if (errorMsg) errorMsg.style.display = 'none';
    });
});