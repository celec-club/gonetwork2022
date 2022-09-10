@extends("template.main")
@section("content")
	<div class="page-content">
    <div class="landing">
      <div class="container">
        <div class="text">
          <h1><span>CELEC</span> Go Network</h1>
          <p>
            For several years, after 4 previous editions, 
            the famous Cisco training has become a tradition within the CELEC club, 
            reaching an average of 1200 participants from all regions of Algeria.
            For this purpose, this year's edition will address the theme of cyber security 
            which is a very wide field of information and knowledge,
            making it eagerly awaited by students.
            A new edition animated by the famous doctor Abderrazak Bachir BOUIDJRA.
            This training will take place in 3 days and will be divided into 3 main 
            aspects of security, namely networks, development and hacking systems.
          </p>
        </div>
        <div class="image">
          <img src="{{url('images/Landing.svg')}}" alt="" />
        </div>
      </div>
    </div>
    <div class="former" id="former">
      <div class="right-section-heading">
        <h2>Former</h2>
        <img src="{{url('images/arrow.png')}}" alt="arrow" />
      </div>
      <div class="container">
        <div class="info">
          <img src="{{url('images/Formateur.png')}}" alt="Former img" />
          <h3><span>Bachir Bouiadjra</span> Abderrazak</h3>
        </div>
        <div class="description">
          <p>We are glad to present you our partner and trainer: 
            Mr. Bachir Bouiadjra Abderrazak, a young Algerian talent 
            aged 34 years. He is a lecturer and researcher at the 
            University "Djilali Liabes" of Sidi Bel Abbes, and at 
            the same time he is a network auditor and cisco instructor 
            at the private vocational training institution "ICT TOWERS" 
            present in Sidi Bel Abbes and recently in Algiers (exactly in Beb Ezzouar)
          </p>
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
          <div class="form">
            <div class="input-info">
              <input
              name="matricule"
              type="number"
              id="matricule"
              class="form-input left-border"
              placeholder=" "
              required
              />
              <label for="matricule">Marticule</label>
            </div>
            <div class="input-info">
              <input
              name="id_number"
              type="number"
              id="id-number"
              class="form-input left-border"
              placeholder=" "
              required
              />
              <label for="id-number">ID Number</label>
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
        <div class="certificate">
          <h3>Certificate Form</h3>
          <form action="{{ url('cert/create') }}" method="POST" id="certificat-form">
          	@csrf
            <div class="certificate-input">
              <input
              type="text"
              name="fullname"
              id="certificate-full-name"
              placeholder=" "
              required
              />
              <label for="certificate-full-name"
              >Write your first and last name</label
              >
            </div>
            <button type="submit" form="certificat-form" value="Submit">
              certificate example
            </button>
          </form>
          <div class="remarque">
            <h4>Note: <span>*</span></h4>
            <p id="first-note">The first name must be fully capitalized</p>
            <p id="second-note">
              First letter of the last name in upper case and the rest in lower case
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="archive" id="archive">
      <div class="right-section-heading">
        <h2>Archive</h2>
        <img src="{{url('images/arrow.png')}}" alt="arrow" />
      </div>
      <div class="go-network-logo">
        <img src="{{url('images/go_network_logo_b.png')}}" 
        alt="Go Network Logo">
      </div>
      <div class="container">
        <div class="odd-year">
          <div class="year">
            <a href="{{url('archive/2017')}}" target="_blank"><img src="{{url('images/2017.png')}}" alt=""></a>
            <span>2017</span>
          </div>
          <div class="year">
            <a href="{{url('archive/2021')}}" target="_blank"><img src="{{url('images/Archive-2021.png')}}" alt=""></a>
            <span>2021</span>
          </div>
        </div>
        <div class="even-year">
          <div class="year">
            <a href="{{url('archive/2019')}}" target="_blank"><img src="{{url('images/2019.png')}}" alt=""></a>
            <span>2019</span>
          </div>
        </div>
      </div>
    </div>
    <x-contact/>
  </div>
@endsection
