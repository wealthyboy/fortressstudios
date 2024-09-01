@extends('layouts.front.base')
@section('content')
<section id="de-map" aria-label="map-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="map-container map-fullwidth">
                    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=VGC%20Mall,%20lekki+(Fortress%20Film%20Studios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">

        <div class="col-md-8">
            {{-- <form  id='contact_form' method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb10">
                        <h3>Send Us Message</h3>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required>
                        </div>

                        <div>
                            <input type='email' name='Email' id='email' class="form-control" placeholder="Your Email" required>
                        </div>

                        <div>
                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <textarea name='message' id='message' class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                        <p id='submit' class="mt20">
                            <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                        </p>
                    </div>
                </div>
            </form> --}}
            <form id="contact_form" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb10">
                        <h3>Send Us Message</h3>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                            <span class="text-danger" id="nameError"></span>
                        </div>
                        <div>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                            <span class="text-danger" id="emailError"></span>
                        </div>
                        <div>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                            <span class="text-danger" id="phoneError"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                            <span class="text-danger" id="messageError"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                        <p id="submit" class="mt20">
                            <input type="submit" id="send_message" value="Submit Form" class="btn btn-line">
                        </p>
                    </div>
                </div>
            </form>
            <div id="success_message" class="success">
                Your message has been sent successfully. Refresh this page if you want to send more messages.
            </div>
            <div id="error_message" class="error">
                Sorry there was an error sending your form.
            </div>
            
            <div id="success_message" class='success'>
                Your message has been sent successfully. Refresh this page if you want to send more messages.
            </div>
            <div id="error_message" class='error'>
                Sorry there was an error sending your form.
            </div>

        </div>

        <div id="sidebar" class="col-md-4">

            <div class="widget widget_text">
                <h3>Contact Info</h3>
                <address>
                    <span><strong>Address:</strong>{{$websiteInfo->address}}</span>
                    <span><strong>Phone:</strong><a href="tel:{{$websiteInfo->phone}}">{{$websiteInfo->phone}}</a></span>
                    <span><strong>Email:</strong><a href="{{$websiteInfo->contact_email}}">{{$websiteInfo->contact_email}}</a></span>
                    <span><strong>Web:</strong><a href="{{url('/')}}">{{url('/')}}</a></span>
                    <span><strong>Open</strong>Monday - Friday 08:00 - 18:00</span>
                </address>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        $('#contact_form').on('submit', function(event) {
            event.preventDefault();

            // Clear previous errors
            $('#nameError').text('');
            $('#emailError').text('');
            $('#phoneError').text('');
            $('#messageError').text('');

            var formData = {
                _token: $('input[name="_token"]').val(),
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                message: $('#message').val(),
            };

            $.ajax({
                url: "{{ route('contact.store') }}",
                method: "POST",
                data: formData,
                success: function(response) {
                    if (response.success) {
                        $('#success_message').show().delay(5000).fadeOut();
                        $('#contact_form')[0].reset();
                    } else {
                        $('#error_message').show().delay(5000).fadeOut();
                    }
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        if (errors.name) {
                            $('#nameError').text(errors.name[0]);
                        }
                        if (errors.email) {
                            $('#emailError').text(errors.email[0]);
                        }
                        if (errors.phone) {
                            $('#phoneError').text(errors.phone[0]);
                        }
                        if (errors.message) {
                            $('#messageError').text(errors.message[0]);
                        }
                    } else {
                        $('#error_message').show().delay(5000).fadeOut();
                    }
                }
            });
        });
    });
</script>

@endsection