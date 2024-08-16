<div class="chatbot_service">
    {{-- <a href="https://wa.me/{{ App\Models\Basicinfo::first()->whatsapp }}?text=I%20am%20interested" target="_blank" style="position: fixed;bottom: 10px;right: 6px;z-index:1111">
        <img src="{{asset('public/whatsapp.png')}}" style="height:75px;border-radius:50%">
    </a> --}}

    <img src="{{ asset('public/whatsapp.png') }}" class="msg_chat" >

    <div class="form_submission">
        <div class="message_cross">
            <i class='bx bx-x'></i>
        </div>

        <form id="createPost" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" required id="email" placeholder="Your Full Name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required id="email" placeholder="Your Email....">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone" required id="phone" placeholder="Phone Number">
            </div>

            <button type="submit" class="btn btn-primary" style="background: #198652; border: 1px solid #198652;">
                Send Message
            </button>
        </form>
    </div>


</div>