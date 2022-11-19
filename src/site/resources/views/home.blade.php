@extends("template.main")
@section("content")
	<div class="page-content">
    <div class="landing">
      <div class="container">
        <div class="text">
          <h1><span>CELEC</span> Go Network</h1>
          <p>
            This first event, in collaboration with Huawei, will include conferences given by competent engineers.
During this event, we will discuss the latest technologies in the field of communication and wireless networks.
You will discover Wi-Fi 6 and its advantages, as well as the fifth generation network and also radio optimization which consists in guaranteeing an optimal quality of service.
          </p>
        </div>
        <div class="image">
          <img src="{{url('images/Huawei_Logo.png')}}" alt="" />
        </div>
      </div>
    </div>
    <div class="former" id="former">
      <div class="right-section-heading">
        <h2>Presented By</h2>
        <img src="{{url('images/arrow.png')}}" alt="arrow" />
      </div>
      <div class="container">
        <div class="info">
        <div class="image">
          <img src="{{url('images/ICT logo.png')}}" alt="Former img" />
          </div>
          <h3><span>Huawei</span> ICT Academy</h3>
        </div>
        <div class="description">
          <p>How to be a student in Huawei ICT Academy ?
            Scan the Qr code
            Visit the E talent platform 
            Create a Huawei account 
            Associate with an academy
            View approval process
            Following online and offline classes.
          </p>
          <div style="text-align: center; margin-top: 25px;">
            <img src="{{url('images/Qr code.png')}}" alt="Qr Code" />
          </div>
        </div>
        <span class="line"></span>
      </div>
    </div>
    <div class="inscription" id="register">
      <div class="left-section-heading">
        <img src="{{url('images/arrow.png')}}" alt="arrow" />
        <h2>Register</h2>
      </div>
      <center>
        @if ($errors->any())
          <div style="padding: 1%; background: #fab6b6; width: 40%; text-align: initial; font-weight: bolder; border-radius: 5px;">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif
        <div style="padding: 1%; background: #fab6b6; width: 40%; text-align: initial; font-weight: bolder; border-radius: 5px;">
            <b>Registrations are closed</b>
        </div>
      </center>
      <div class="container">
        <form action="{{ url('users/create') }}" method="POST" id="inscription-form">
          @csrf
          <div class="form">
            <div class="input-info">
              <input
              type="text"
              id="full-name"
              class="form-input"
              name="fullname"
              placeholder=" "
              required
              />
              <label for="full-name">First & Last Name</label>
            </div>
            <div class="input-info">
              <input
              type="email"
              id="email"
              class="form-input"
              placeholder=" "
              name="email"
              required
              />
              <label for="email">Email</label>
            </div>
          </div>
          <div class="form">
            <div class="input-info">
              <input
              name="password"
              type="password"
              id="password"
              class="form-input left-border"
              placeholder=" "
              required
              />
              <label for="password">Password</label>
            </div>
            <div class="input-info">
              <input
              name="phone_number"
              type="number"
              id="phone-number"
              class="form-input left-border"
              placeholder=" "
              required
              />
              <label for="phone-number">Phone Number</label>
            </div>
          </div>
          <div class="form">
            <div class="input-info">
              <select name="level" id="level" required>
                <option selected disabled value="">Educational Level</option>
                <option value="L1">Licence 1</option>
                <option value="L2">Licence 2</option>
                <option value="L3">Licence 3</option>
                <option value="M1">Master 1</option>
                <option value="M2">Master 2</option>
                <option value="Doctorat">Doctoral Student</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="input-info">
              <input
              name="specialty"
              type="text"
              id="specialty-input"
              class="form-input"
              placeholder=" "
              required
              />
              <label for="specialty-input"> Specialty </label>
            </div>
          </div>
 
          <div class="radio-form">
            <div class="radio">
              <h3>Are you a student of the USTHB !</h3>
              <div class="radio-label">
                <label for="student-true">
                  <input
                  name="is_student"
                  type="radio"
                  id="student-true"
                  value="yes"
                  />
                  <b>Yes</b>
                  <span></span>
                </label>
                <label class="radio-label" for="student-false">
                  <input
                  name="is_student"
                  type="radio"
                  id="student-false"
                  value="no"
                  />
                  <b>No</b>
                  <span></span>
                </label>
              </div>
            </div>
            <div class="radio">
              <h3>Are you a member of the CELEC club!</h3>
              <div class="radio-label">
                <label class="radio-label" for="membre-true">
                  <input
                  name="is_member"
                  type="radio"
                  id="membre-true"
                  value="yes"
                  />
                  <b>Yes</b>
                  <span></span>
                </label>
                <label class="radio-label" for="membre-false">
                  <input
                  name="is_member"
                  type="radio"
                  id="membre-false"
                  value="no"
                  />
                  <b>No</b>
                  <span></span>
                </label>
              </div>
            </div>
          </div>
          <div class="submit-btn">
            <button type="submit" form="inscription-form" value="Submit">
              Submit
            </button>
          </div>
        </form>
        
      </div>
    </div>
    
    <x-contact/>
  </div>
@endsection
