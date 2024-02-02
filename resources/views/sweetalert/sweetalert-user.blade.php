<!doctype html>
<html lang="en">

<head>
    <title>Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- sweetalert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css">
    <style>
        #app {width: 1348px; height: 576px;}
    </style>
</head>

<body id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-5">

                    <div class="card-header">
                        <h5>Laravel Sweet Alert Tutorial Example - nicesnippets.com</h5>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">

                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td width="5%">Action</td>
                            </tr>

                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>  
                                    <td>{{ $user->email }}</td>  
                                    <td>
                                        <button class="btn btn-danger btn-flat btn-sm remove-user fire" data-id="{{ $user->id }}" data-action="{{ route('sweetalert.destroy',$user->id) }}"> Delete</button>
                                    </td>  
                                </tr>
                            @endforeach

                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- sweetalert -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $("body").on("click",".remove-user",function(){

            // swal(
            //     'Hello'
            // )

            //icon, footer not working
            // swal({
            //     icon: 'error',
            //     title: 'Not Found...',
            //     text: 'Something went wrong!',
            //     footer: '<a href>Are you facing any issue?</a>'
            // })

            // swal({
            //     title: 'Not Found...',
            //     imageUrl: 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png',
            //     imageWidth: 500,
            //     imageHeight: 500,
            //     imageAlt: 'Big image'
            // })

            // swal(
            //     'Techsolutionstuff!',
            //     'You clicked the button!',
            //     'success'
            // )
        
            // swal({
            //     title: '<strong>HTML <u>example</u></strong>',
            //     icon: 'info',
            //     html:
            //         'You can use <b>bold text</b>, ' +
            //         '<a href="//sweetalert2.github.io">links</a> ' +
            //         'and other HTML tags',
            //     showCloseButton: true,
            //     showCancelButton: true,
            //     focusConfirm: false,
            //     confirmButtonText:
            //         '<i class="fa fa-thumbs-up"></i> Great!',
            //     confirmButtonAriaLabel: 'Thumbs up, great!',
            //     cancelButtonText:
            //         '<i class="fa fa-thumbs-down"></i>',
            //     cancelButtonAriaLabel: 'Thumbs down'
            // })

            // swal({
            //     title: 'Do you want to save the changes?',
            //     showDenyButton: true,
            //     showCancelButton: true,
            //     confirmButtonText: `Save`,
            //     denyButtonText: `Don't save`,
            //  }).function((result) => {
            //     if (result.isConfirmed) {
            //         Swal.fire('Saved!', '', 'success')
            //     } else if (result.isDenied) {
            //         Swal.fire('Changes are not saved', '', 'info')
            //     }
            // })

            // swal({
            //     title: 'Do you want to save the changes?',
            //     showDenyButton: true,
            //     showCancelButton: true,
            //     confirmButtonText: `Save`,
            //     denyButtonText: `Don't save`,
            //     }).then((result) => {
            //     /* Read more about isConfirmed, isDenied below */
            //     if (result.isConfirmed) {
            //         Swal.fire('Saved!', '', 'success')
            //     } else if (result.isDenied) {
            //         Swal.fire('Changes are not saved', '', 'info')
            //     }
            // })

            // swal({
            //     position: 'top-end',
            //     icon: 'success',
            //     title: 'Your work has been saved',
            //     showConfirmButton: true,
            //     timer: 3000
            // })

            // swal({
            //     title: 'Sweet!',
            //     text: 'Modal with a custom image.',
            //     imageUrl: 'https://unsplash.it/400/200',
            //     imageWidth: 400,
            //     imageHeight: 200,
            //     imageAlt: 'Custom image',
            // });

            // var current_object = $(this);
            // swal({
            //     title: "Are you sure?",
            //     text: "You will not be able to recover this imaginary file!",
            //     type: "error",
            //     cancelButtonClass: '#DD6B55',
            //     confirmButtonColor: '#dc3545',
            //     confirmButtonText: 'Delete!',
            //  },function (result) {
            //     if (result) {
            //         var action = current_object.attr('data-action');
            //         var token = jQuery('meta[name="csrf-token"]').attr('content');
            //         var id = current_object.attr('data-id');

            //         $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            //         $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            //         $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            //         $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            //         $('body').find('.remove-form').submit();
            //     }
            // });

            // swal({
            //     title: "Good job!",  
            //     text: "Click!",  
            //     type: "success",  
            //     button: "I am new button", 
            // }); 
            // alert('OK')
            Swal.fire({
                title: 'Update Photo Verification.',
                showDenyButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Canceled`,
            }).then((result) => {

                if (result.isConfirmed) {
                    // let isClicked = e.target.checked === true ? 1 : 0;
                    // let profileId = e.target.value;
                    // var url = 'crewPhotoVerification';
                    // console.log(isClicked, profileId);

                    // $.ajax({
                    //     type: "GET",
                    //     dataType: "json",
                    //     url: url,
                    //     data: { 'isClicked': isClicked, 'profile_id': profileId },
                    //     success: function(data) {
                        Swal.fire('Test!', 'Hello test message','success');
                            // console.log(data.message);
                    //     }
                    // });
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
                
            });
        });
    </script>
</body>

</html>
