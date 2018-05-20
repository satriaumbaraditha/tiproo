<script>
    $(document).ready(function(){
        swal({
            title: "Suksess",
            text :"Berhasil menambahkan <strong>{{ Session::get('flash_product_name') }}</strong> ke cart",
            type: "success",
            showCancelButton:true,
            confirmButtonColor:"#63BC81",
            confirmButtonText:"Konfirmasi Pesanan",
            cancelButtonText:"Lanjutkan belanja",
            html :true
        }, function (isConfirm){
            if (isConfirm) {
                window.location ='/cart';
            }
        });
    });

</script>
