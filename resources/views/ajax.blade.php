<!doctype html>
<html>
    <head>
        <title>Test Ajax</title>

        <meta name="csrf-token" content="{{ Session::token() }}">
    </head>

    <body>
        <button id='btn'>Show users</button>
        
        <div id="msg">here</div>
        
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script type="text/javascript">
        console.log('Hello');
        
        $(document).ready(function() {
            $('#btn').click(function() {
                console.log('click');
                $.ajaxSetup({
                    headers: {"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')}
                });
                const csrf = $('meta[name="csrf-token"]').attr('content');
                console.log(csrf);
                $.ajax({
                    type:"GET",
                    url:"{{route('getUser')}}",
                    success:function(data) {
                        $('#msg').html(data.users);
                    }
                });
            })
        });
        
    </script>
</html>