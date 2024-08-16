    <!-- Jquery CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- owl Carousel Link -->
     <script src="{{ asset('public/plugin/js/owl.carousel.min.js') }}"></script>

    <!-- AOS CDN Link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Sweet alert CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JS Link -->
    <link rel="stylesheet" href="{{ asset('public/asset/js/main.js') }}">

    <script>
        function givereactlike(id) {
            $.ajax({
                type: 'GET',
                url: '{{ url('give/react/') }}'+'/like',
                data: {
                    'user_id': $('#user_id').val(),
                    'service_id': id,
                },

                success: function(data) {
                    if (data.sigment == 'like') {
                        $('#promotionalofferSlide #likereactof' + id).text(data.total);
                        $('#promotionalofferSlide #likereactdone' + id).css('color', 'green');
                        $('#propro #likereactof' + id).text(data.total);
                        $('#propro #likereactdone' + id).css('color', 'green');
                    }else if (data.sigment == 'unlike') {
                        $('#promotionalofferSlide #likereactof' + id).text(data.total);
                        $('#promotionalofferSlide #likereactdone' + id).css('color', 'black');
                        $('#propro #likereactof' + id).text(data.total);
                        $('#propro #likereactdone' + id).css('color', 'black');
                    }else {

                    }
                },
                error: function(error) {
                    console.log('error');
                }
            });
        }

        function givereactlove(id) {
            $.ajax({
                type: 'GET',
                url: '{{ url('give/react/') }}'+'/love',
                data: {
                    'user_id': $('#user_id').val(),
                    'service_id': id,
                },

                success: function(data) {
                    if (data.sigment == 'love') {
                        $('#promotionalofferSlide #lovereactof' + id).text(data.total);
                        $('#promotionalofferSlide #lovereactdone' + id).css('color', 'red');
                        $('#propro #lovereactof' + id).text(data.total);
                        $('#propro #lovereactdone' + id).css('color', 'red');
                    } else {
                        $('#promotionalofferSlide #lovereactof' + id).text(data.total);
                        $('#promotionalofferSlide #lovereactdone' + id).css('color', 'black');
                        $('#propro #lovereactof' + id).text(data.total);
                        $('#propro #lovereactdone' + id).css('color', 'black');
                    }
                },
                error: function(error) {
                    console.log('error');
                }
            });
        }
    </script>

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
                            const whatsappLink = "https://wa.me/{{ App\Models\Basicinfo::first()->whatsapp }}?text=I%20am%20interested";
                            window.location.href = whatsappLink;
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
    </script>


    @stack('script-tag')
