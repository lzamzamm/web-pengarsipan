const labaBtn = document.getElementsByClassName('laba')[0];
const keluarBtn = document.getElementsByClassName('keluar')[0];
const masukBtn = document.getElementsByClassName('masuk')[0];
const semuaBtn = document.getElementsByClassName('semua')[0];
const containerLab = document.getElementById("laporan_laba")
const containerMas = document.getElementById("laporan_masuk")
const containerKel = document.getElementById("laporan_keluar")
// const containerAll = document.getElementById("laporan_all")

const showLaba = () => {
    containerLab.classList.add("inActive");
    containerMas.classList.remove("inActive");
    containerKel.classList.remove("inActive");
}
const showMasuk = () => {
	containerLab.classList.remove("inActive");
    containerMas.classList.add("inActive");
    containerKel.classList.remove("inActive");
}
const showKeluar = () => {
	containerLab.classList.remove("inActive");
    containerMas.classList.remove("inActive");
    containerKel.classList.add("inActive");
}
const showAll = () => {
	containerMas.classList.add("inActive");
	containerKel.classList.add("inActive");
	containerLab.classList.add("inActive");
    
}

labaBtn.addEventListener("click", showLaba);
keluarBtn.addEventListener("click", showKeluar);
masukBtn.addEventListener("click", showMasuk);
semuaBtn.addEventListener("click", showAll);


const printBtn = document.getElementById('print');
printBtn.addEventListener('click', function () {
    print();
})


$(document).ready(function () {
    $('#date-range').daterangepicker();

    $('#date-range').on('apply.daterangepicker', function (ev, picker) {
        var startDate = picker.startDate;
        var endDate = picker.endDate;
        console.log(startDate.format('YYYY-MM-DD'));
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "/laporan/filter",
            type: "POST",
            data: { _token: csrfToken, startDate: startDate.format('YYYY-MM-DD'), endDate: endDate.format('YYYY-MM-DD') },
            success: function (response) {
                data = response;

                var labaRugi = data.laba_rugi;
                var pengeluaranLain = data.pengeluaran;
                var pengeluaranPro = data.restok;
                var pemasukanLain = data.pemasukan;
                var pemasukanPro = data.penjualan;
                var totalPengeluaran = data.total_pengeluaran;
                var totalPemasukan = data.total_pemasukan;
                var labaBersih = data.laba_bersih;

                $('#pengeluaran_lain').html(pengeluaranLain);
                $('#pengeluaran_pro').html(pengeluaranPro);
                $('#pemasukan_lain').html(pemasukanLain);
                $('#pemasukan_pro').html(pemasukanPro);
                $('#total_pemasukan').html(totalPemasukan);
                $('#total_pengeluaran').html(totalPengeluaran);
                $('#laba_pengeluaran').html(totalPengeluaran);
                $('#laba_pemasukan').html(totalPemasukan);

                if(labaRugi < 0) {
                    $('#laba_bersih').html(
                        '<h3>Total Rugi</h3>' +
                        '<div class="jumlah-lap">'+ labaBersih +'</div>'
                    );
                } else {
                    $('#laba_bersih').html(
                        '<h3>Laba bersih</h3>' +
                        '<div class="jumlah-lap">'+ labaBersih +'</div>'
                    );
                }

            }
        });
    });

    //Date range as a button
    $('#daterange-btn').daterangepicker(

        {
        
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },

            startDate: moment().subtract(29, 'days'),
            endDate: moment()
            // format: 'YYYY-MM-DD'
        },
        function (start, end) {
            var startDate = moment(start).format('YYYY-MM-DD');
            var endDate = moment(end).format('YYYY-MM-DD');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Panggil fungsi untuk mengambil data dari database berdasarkan rentang tanggal
            $.ajax({
                url: "/laporan/filter",
                type: "POST",
                data: { _token: csrfToken, startDate: startDate, endDate: endDate },
                success: function (response) {
                    data = response;
    
                    var labaRugi = data.laba_rugi;
                    var pengeluaranLain = data.pengeluaran;
                    var pengeluaranPro = data.restok;
                    var pemasukanLain = data.pemasukan;
                    var pemasukanPro = data.penjualan;
                    var totalPengeluaran = data.total_pengeluaran;
                    var totalPemasukan = data.total_pemasukan;
                    var labaBersih = data.laba_bersih;
    
                    $('#pengeluaran_lain').html(pengeluaranLain);
                    $('#pengeluaran_pro').html(pengeluaranPro);
                    $('#pemasukan_lain').html(pemasukanLain);
                    $('#pemasukan_pro').html(pemasukanPro);
                    $('#total_pemasukan').html(totalPemasukan);
                    $('#total_pengeluaran').html(totalPengeluaran);
                    $('#laba_pengeluaran').html(totalPengeluaran);
                    $('#laba_pemasukan').html(totalPemasukan);
    
                    if(labaRugi < 0) {
                        $('#laba_bersih').html(
                            '<h3>Total Rugi</h3>' +
                            '<div class="jumlah-lap">'+ labaBersih +'</div>'
                        );
                    } else {
                        $('#laba_bersih').html(
                            '<h3>Laba bersih</h3>' +
                            '<div class="jumlah-lap">'+ labaBersih +'</div>'
                        );
                    }
    
                }
            });

            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

         
        }
    )

});