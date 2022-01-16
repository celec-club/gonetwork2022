@extends("template.main")
@section("content")
  <body>
    <div class="landing">
        <div class="container">
            <div class="imagesmall">
                <img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021small.png" alt="" />
            </div>
            <div class="text">
                <h1><span>CISCO</span> Go Network</h1>
                <p>
                  The year 2021 was an exception edition, bringing with it a futuristic workshop of networking and telecommunications animated by the world giant of the field of the domain, CISCO Algeria, where there was a session of questions and debates of all the advanced and cutting-edge technologies of the multinational.
                  It was a two days workshop held in the Auditorium of USTHB.
                </p>
                <div class="details">
                    <div>
                        <p class="title">location</p>
                        <p class="descp">USTHB</p>
                    </div>
                    <div>
                        <p class="title">DURATION</p>
                        <p class="descp1">2 DAYS</p>
                    </div>
                </div>
            </div>
            <div class="imageslarge">
              <img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/archive2021.png" alt="" />
            </div>
        </div>
    </div>
    <div class="archive">
        <div class="right-section-heading">
            <h2>PH<br>
                OT <br>
                OS
            </h2>
            <img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/arrow.png" alt="arrow" />
        </div>
        <!--Galery-->
        <div class="container">
          <div class="wrapper">
            <div class="gallery">
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1304.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1336.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1389.JPG" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_0550.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_0555.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_0634.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_0672.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_0695.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1135.JPG" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1084.JPG" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1085.JPG" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1089.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1306.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1307.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1309.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1312.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1327.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1330.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_0619.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_0632.jpg" alt=""></span></div>
              <div class="image"><span><img src="https://raw.githubusercontent.com/Zakaria-Bli/Go-Network-Event-/master/Archive/Image/2021/IMG_1092.jpg" alt=""></span></div>
            </div>
          </div>
        </div>
        <div class="preview-box">
          <div class="details">
            <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
            <span class="icon fas fa-times"></span>
          </div>
          <div class="image-box">
            <div class="slide prev"><i class="fas fa-angle-left"></i></div>
            <div class="slide next"><i class="fas fa-angle-right"></i></div>
            <img src="" alt="">
          </div>
        </div>
        <div class="shadow"></div>
        <!--***************************************-->
        <x-comment year="2021" />
    </div>
  </body>
@endsection