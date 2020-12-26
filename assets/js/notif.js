// Datatable
$(document).ready(function () {
    $('#tabel1').DataTable({});
});

// Flashdata
const NotifBerhasil = $('#berhasil').data('flash');
const NotifGagal = $('#gagal').data('flash');
if (NotifBerhasil) {
    swal("Berhasil!", NotifBerhasil, {
        icon: "success",
        buttons: {
            confirm: {
                className: 'btn btn-success'
            }
        },
    });
}
if (NotifGagal) {
    swal("Gagal!", NotifGagal, {
        icon: "error",
        buttons: {
            confirm: {
                className: 'btn btn-danger'
            }
        },
    });
}

// Konfirmasi hapus
$(document).on('click', '#btn-hapus', function (e) {
    e.preventDefault();
    const link = $(this).attr('href');
    swal({
        title: 'Yakin mau menghapus data tersebut?',
        text: "Ketika anda menghapus data, data yang anda hapus akan hilang ya!",
        type: 'warning',
        buttons: {
            confirm: {
                text: 'Ya, yakin!',
                className: 'btn btn-success'
            },
            cancel: {
                text: 'Batal',
                visible: true,
                className: 'btn btn-danger'
            }
        }
    }).then((Reset) => {
        if (Reset) {
            window.location = link;
        } else {
            swal.close();
        }
    });
});

// Konfirmasi logout
$(document).on('click', '#btn-logout', function (e) {
    e.preventDefault();
    const link = $(this).attr('href');
    swal({
        title: 'Yakin mau keluar dari aplikasi?',
        text: "Kalau sudah logout, jangan lupa untuk login kembali ya!",
        type: 'warning',
        buttons: {
            confirm: {
                text: 'Ya, yakin!',
                className: 'btn btn-success'
            },
            cancel: {
                text: 'Batal',
                visible: true,
                className: 'btn btn-danger'
            }
        }
    }).then((Logout) => {
        if (Logout) {
            window.location = link;
        } else {
            swal.close();
        }
    });
});