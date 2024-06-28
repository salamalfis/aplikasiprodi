<script>
    @if($message = session('succes_message'))
        Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
        });
    @endif

    @if($message = session('error_message'))
        Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "error",
        });
    @endif
    $('.hapus').on('click',function(){
        Swal.fire({
            title: "Apakah anda yakin ingin menghapus data ?",

            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes"
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
            });
        }
        });
    });
 $('.detail').on('click',function(){
        $('#detailData').modal('toggle');
    });
</script>