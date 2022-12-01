@if($errors ->any() )

<!-- <p class="alert alert-danger">{{ $errors -> first() }} > </p> -->
<!-- sweet alert -->
<script>
    // swal(' {{ $errors ->first() }} ')
    // swal("Danger", "{{ $errors ->first() }}", "danger" );

    swal({
  title: "Error!",
  text: "{{ $errors ->first() }}",
  icon: "warning",
  button: "false",
  dangerMode: true,
});


</script>

@endif
@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }} ></p>

@endif


