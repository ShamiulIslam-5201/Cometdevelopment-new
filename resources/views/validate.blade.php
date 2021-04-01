@if ($errors -> any())
    <script>
        swal('Validation error', '{{ $errors -> first() }}', 'warning')
    </script>
@endif

@if (Session::has('success'))
    {{-- <p class="alert alert-success">{{ Session::get('success') }}</p> --}}
    <script>
        swal('success', '{{ Session::get('success') }}', 'success')
    </script>
@endif
