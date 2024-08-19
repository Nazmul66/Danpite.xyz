
<!-- JavaScript Libraries -->
<script src="{{asset('public/frontend/lib/')}}/jquery/jquery.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/easing/easing.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/superfish/hoverIntent.js"></script>
<script src="{{asset('public/frontend/lib/')}}/superfish/superfish.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/wow/wow.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/waypoints/waypoints.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/counterup/counterup.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/lightbox/js/lightbox.min.js"></script>
<script src="{{asset('public/frontend/lib/')}}/touchSwipe/jquery.touchSwipe.min.js"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('public/frontend/')}}/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    let msg_chat         = document.querySelector('.msg_chat');
    let message_cross    = document.querySelector('.message_cross');
    let form_submission  = document.querySelector('.form_submission');

    msg_chat.addEventListener('click', function(){
        form_submission.classList.add('chat_active');
    })

    message_cross.addEventListener('click', function(){
        form_submission.classList.remove('chat_active');
    })

    // Create Support Services
    $('#createPost').submit(function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('support.service') }}",
            data: formData,
            processData: false,  // Prevent jQuery from processing the data
            contentType: false,  // Prevent jQuery from setting contentType
            success: function (res) {
                // console.log(res);
                if (res.status === true) {
                    $('#createPost')[0].reset();
                    form_submission.classList.remove('chat_active');

                    swal.fire({
                        title: "Success",
                        text: `${res.message}`,
                        icon: "success"
                    }).then(() => {
                        // Redirect to WhatsApp after success message

                    });
                }
            },
            error: function (err) {
                console.error('Error:', err);
                swal.fire({
                    title: "Failed",
                    text: "Something Went Wrong !",
                    icon: "error"
                })
            }
        });
    })


    $(document).ready(function(){
       $(document).on('submit', '.create_comment',function (e) {
         e.preventDefault();

         let formData = new FormData(this);
         // console.log(formData);

             $.ajax({
                 type: "POST",
                 url: "{{ route('blog.comments') }}",
                 data: formData,
                 processData: false,  // Prevent jQuery from processing the data
                 contentType: false,  // Prevent jQuery from setting contentType
                 success: function (res) {
                     // console.log(res);
                     if (res.status == true) {
                         swal.fire(
                         {
                             title: `Successfully Comments`,
                             icon: 'success'
                         })

                         $('.create_comment')[0].reset();
                         window.location.reload();

                     } else {
                         window.location.href= "{{ route('login') }}";
                     }
                 },
                 error: function (err) {
                     console.log(err);
                 }

             })
       });
    })


     // Toggle
     let comment_line    = document.querySelectorAll('.comment_line');
     let comment_field   = document.querySelectorAll('.comment_field');
     let remove_comment   = document.querySelectorAll('.remove_comment');

     comment_line.forEach((element, i) => {
             element.addEventListener('click', function() {
             comment_field[i].classList.toggle('comment_active');
         });
     });

     remove_comment.forEach((elements, i) => {
             elements.addEventListener('click', function() {
             comment_field[i].classList.remove('comment_active');
         });
     });

 </script>

