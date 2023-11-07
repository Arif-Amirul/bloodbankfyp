@props([
    'title' => '',
    'message' => '',
])
@push('js')
<script>
    $( document ).ready(function() {
        Swal.fire({
            icon: 'info',
            title: `{{$title}}`,
            text: `{{$message}}`,
            showConfirmButton: false,
            timer: 2000
        })
    });
</script>
@endpush
