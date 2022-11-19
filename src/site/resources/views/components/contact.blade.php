<div class="contact">
  <div class="left-section-heading">
    <img src="{{url('images/arrow.png')}}" alt="arrow" />
    <h2>Contact Us</h2>
</div>
<div class="container">
    <div class="text">
      <h3>For more information, you can contact us</h3>
  </div>
  <div class="form">
      <form action="{{ url('message') }}" method="POST" id="contact-form">
        @csrf
        <div class="form">
          <div class="contact-info">
            <input
            name="name"
            type="text"
            id="contact-name"
            class="form-input"
            placeholder=" "
            required
            />
            <label for="contact-name">Full Name</label>
        </div>
        <div class="contact-info">
            <input
            name="email"
            type="email"
            id="contact-email"
            class="form-input left-border"
            placeholder=" "
            required
            />
            <label for="contact-email">email</label>
        </div>
        <div class="contact-info">
            <textarea name="message" id="message" class="message" placeholder=" "></textarea>
            <label for="message">Message</label>
        </div>
        <button type="submit" style="cursor: pointer; color: white; background-color: #E94934 !important;"  onclick="document.getElementById('comment-form').submit();"
        form="contact-form" 
        value="Submit">
        Submit
    </button>
</div>
</form>
</div>
</div>