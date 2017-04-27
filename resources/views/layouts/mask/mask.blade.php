@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <script>
        $(function () {
            $('.tempo').mask('00:00:00');
        });
    </script>
@endsection
