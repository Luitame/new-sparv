@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function () {

            $('select').select2({
                minimumResultsForSearch: Infinity
            });

            $('.tempo').mask(
                    'HH:MM:SS', {
                        translation: {
                            'H': {pattern: /[0-23]/, optional: false},
                            'M': {pattern: /[0-59]/, optional: false},
                            'S': {pattern: /[0-59]/, optional: false}
                        },
                        placeholder: 'hh:mm:ss'
                    });
        });
    </script>
@endsection