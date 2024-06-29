<script>
    @if($message = session('succes_message'))
        Swal.fire({
            title: "Success!!",
            text: "{{ $message }}",
            icon: "success"
        });
    @endif

    @if($message = session('error_message'))
        Swal.fire({
            title: "Error!",
            text: "{{ $message }}",
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

    $('.edit').on('click',function(){
        $('#editData').modal('toggle');
    });
</script>
