@extends ('adminlte::frontweb.master_layout.master')
@section('title')
Edutech - Complete Learning Solutions Powered By Technology
@endsection
@section('description')
Transforming education with hands-on and technology based learning solutions in educational campuses and organizations across the Middle East.
@endsection
@section('keywords')
stem education, education solutions, virtual learning management, lecture capture system, vocational training programs, stem and education, stem for kids, stem program, stem learning, lecture capture, stem technology
@endsection
@section('page_css')
<link href="{{ asset('tools/css/form.css') }}" rel="stylesheet">
<style type="text/css">
   .owl-carousel .owl-item img {
   width: auto !important;
   }
</style>
@endsection
@section('main-content')
<div class="container-fluid hidden-xs">
   <div class="row">
      <div class="col-md-12 no-padd">
         <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               @foreach($home_banners as $home_banner)
               @if($loop->first)
               <div class="item active">
                  <a href="{{ $home_banner->link }}">
                  <img src="{{ $home_banner->desktop_image }}" alt="...">
                  </a>
               </div>
               @else
               <div class="item">
                  <a href="{{ $home_banner->link }}">
                  <img src="{{ $home_banner->desktop_image }}" alt="...">
                  </a>
               </div>
               @endif
               @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
            <span class="left"><img class="nextprevban-left carou-img-homepage-left" alt=""
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next">
            <span class="right"><img class="nextprevban-right carou-img-homepage-right" alt=""
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid hidden-lg hidden-md hidden-sm">
   <div class="row">
      <div class="col-xs-12 no-padd">
         <div id="myCarousel1-mob" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators hidden-md hidden-lg">
               @foreach($home_banners as $home_banner)
               @if($loop->first)
               <li data-target="#myCarousel1" data-slide-to="{{ $loop->index }}" class="active"></li>
               @else
               <li data-target="#myCarousel1" data-slide-to="{{ $loop->index }}"></li>
               @endif
               @endforeach
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               @foreach($home_banners as $home_banner)
               @if($loop->first)
               <div class="item active">
                  <a href="{{ $home_banner->link }}">
                  <img src="{{ $home_banner->mobile_image }}" alt="...">
                  </a>
               </div>
               @else
               <div class="item">
                  <a href="{{ $home_banner->link }}">
                  <img src="{{ $home_banner->mobile_image }}" alt="...">
                  </a>
               </div>
               @endif
               @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1-mob" data-slide="prev">
            <span class="left"><img class="nextprevban-left carou-img-homepage-left" alt=""
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel1-mob" data-slide="next">
            <span class="right"><img class="nextprevban-right carou-img-homepage-right" alt=""
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAzAQMAAAAAb6JpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgxEAAAGYAAGU8d2ZAAAAAElFTkSuQmCC"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="abt-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="why-edutech-heading text-center">why <span class="number">edutech?</span></h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="owl-one owl-carousel owl-theme">
               <div class="item">
                  <img src="tools/img/why/pioneers.png" class="img-responsive img-mid">
                  <h6 class="why-img-head text-center">EdTech<br>Pioneers</h6>
               </div>
               <div class="item">
                  <img src="tools/img/why/lifelong.png" class="img-responsive img-mid">
                  <h6 class="why-img-head text-center">lifelong<br>learning</h6>
               </div>
               <div class="item">
                  <img src="tools/img/why/deep.png" class="img-responsive img-mid">
                  <h6 class="why-img-head text-center">deep<br>Understanding</h6>
               </div>
               <div class="item">
                  <img src="tools/img/why/effective.png" class="img-responsive img-mid">
                  <h6 class="why-img-head text-center">customer<br>success</h6>
               </div>
               <div class="item">
                  <img src="tools/img/why/future.png" class="img-responsive img-mid">
                  <h6 class="why-img-head text-center">Future forward</h6>
               </div>
            </div>
            <div class="text-center">
               <a href="{{route('abt')}}">
               <button class="button button--nina button--text-thick  button--size-s know-more-why" data-text="Know More">
               <span>K</span><span>n</span><span>o</span><span>w</span><span>&nbsp;</span><span>M</span><span>o</span><span>r</span><span>e</span>
               </button>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
@if($ip['country_name'] != 'Qatar')
<div class="testimonials-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12 testimonial-img no-padd">
            <img src="tools/img/test-img.png" class="img-responsive">
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-xs-12 col-sm-12 text-center testimonial-section">
            <h1 class="number">testimonials</h1>
         </div>
         <div class="col-md-12 col-xs-12 col-sm-12 text-center white-bg">
            <div class="owl-four owl-carousel owl-theme">
               <div class="item testimonial-text">
                  <img src="tools/img/comma.png" class="img-responsive">
                  <p>Abu Dhabi Public Libraries seek to empower our communities through knowledge acquisition and knowledge creation that contribute to building future skills towards Abu Dhabi Vision 2030. Through the highly engaging and interactive workshops, progressive learning paths and an inspiring Makerspace facility within our Khalifa Park Library, Edutech and its team delivered towards our goals.</p>
                  <div class="testi-title col-md-9 col-xs-12 no-padd">
                     <h4>Shaikha Mohamed Almehairi</h4>
                     <h4>Library Management Director</h4>
                     <h6>Department of Culture & Tourism, Abu Dhabi, UAE</h6>
                  </div>
               </div>
               <div class="item testimonial-text">
                  <img src="tools/img/comma.png" class="img-responsive">
                  <p>Amity University wanted state-of-the-art Engineering Labs for its new Campus in Dubai.
                     Edutech engaged Amity
                     right at the lab design stage advising us of all amenities, safety requirements and
                     other pre-requisites. Edutech also
                     helped us with curriculum mapping for 14 different labs across civil, mechanical,
                     aerospace and electrical
                     engineering disciplines and implemented them successfully. This saved us considerable
                     time, effort and costs.
                  </p>
                  <div class="testi-title col-md-9 col-xs-12 no-padd">
                     <h4>Dr. Vajahat Hussain</h4>
                     <h4>CEO</h4>
                     <h6>Amity Education - Middle East</h6>
                  </div>
               </div>
               <div class="item testimonial-text">
                  <img src="tools/img/comma.png" class="img-responsive">
                  <p style="">The Innovation Hub is Al Bayt Mitwahid’s signature project and one of our
                     proudest and most successful achievements. This success would not have been possible
                     without Edutech’s commitment, insight and expertise - a fact that has elevated the
                     company to be perceived as an important partner in achieving our vision.
                  </p>
                  <div class="testi-title col-md-9 col-xs-12 no-padd">
                     <h4> Mr. Mohammed Al Qadhi</h4>
                     <h4>Project Manager</h4>
                     <h6>Al Bait Mitwahid</h6>
                  </div>
               </div>
               <div class="item testimonial-text">
                  <img src="tools/img/comma.png" class="img-responsive">
                  <p style="">The selection of WMS as a key element of the libraries’ systems infrastructure was driven by the need
                     for innovative and collaborative approaches to integrated discovery tools, content management, and
                     access. Moving to WMS also provides us the opportunity to join a global user community supported by a
                     dedicated team of researchers looking to the future of knowledge creation and management, and digital
                     scholarship.
                  </p>
                  <div class="testi-title col-md-9 col-xs-12 no-padd">
                     <h4> Janette Wright,</h4>
                     <h4> Dean of Libraries</h4>
                     <h6>UAE University</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endif
<div class="container-fluid ">
   <div class="row flexbox-container">
      <div class="col-md-6 col-xs-12 col-sm-12">
         <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 text-center no-padd">
               @if($ip['country_name'] != 'Qatar')
               <iframe src="https://snazzymaps.com/embed/300372" width="100%" height="800px" style="border:none;"></iframe>
               @else
               <iframe src="https://snazzymaps.com/embed/300372" width="100%" height="800px" style="border:none;"></iframe>
               @endif
            </div>
         </div>
      </div>
      <div class="col-md-6 contact-bg col-xs-12 col-sm-12">
         <div class="row">
            <div class="col-md-12 text-center contact-section">
               <h1>get in <span class="number-contact">touch</span></h1>
            </div>
            <div class="col-md-10 col-md-offset-1 form-section">
               <form class="form-style" style="" id="contact-form"
                  action='https://crm.zoho.com/crm/WebToLeadForm' name='WebToLeads1709276000003518037'
                  method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()'
                  accept-charset='UTF-8' novalidate>
                  {{ csrf_field() }}
                  <!-- Do not remove this code. -->
                  <input type='text' style='display:none;' name='xnQsjsdp' value='bfd084f318043f055c21cd227a4acce4d7a2f1fe4d1557d8f7ab903d7d7b9058'/>
                  <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                  <input type='text' style='display:none;' name='xmIwtLD' value='1733fd353fe5518c2c2596668756c29cb07ac2bcd9239b130ca6ebeff5053bd5'/>
                  <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>
                  <input type='text' style='display:none;' name='returnURL'
                  value='{{ url('thank-you?msg=For submitting your enquiry, we’ll get back to you soon.') }}' id="returnURL"/>
                  <!-- Do not remove this code. -->
                  <input type='hidden' name='LEADCF22' value='{{ url()->current() }}'/>
                  <select style='width:250px;display: none;' name='Lead Source'>
                     <option selected value='Website Lead'>Website Lead</option>
                  </select>
                  <input type="hidden" name="LEADCF23" id="ting_lead_id">
                  <div class="form-group col-md-6">
                     <input type="text" required="required" name="Last Name"
                        data-msg-required=" Please enter your Full Name "/>
                     <label class="control-label form-text-design" for="input">Full Name*</label><i
                        class="bar"></i>
                  </div>
                  <div class="form-group col-md-6">
                     <input type="text" required="required" name="Designation" data-msg-required=" Please select one Designation"/>
                     <label class="control-label form-text-design" for="input">Designation*</label><i
                        class="bar"></i>
                  </div>
                  <div class="form-group col-md-6">
                     <input type="text" required="required" name="Email"
                        data-msg-required=" Please enter your Email"/>
                     <label class="control-label form-text-design" for="input">Email*</label><i
                        class="bar"></i>
                  </div>
                  <div class="form-group col-md-6">
                     <input type="number" required="required" name="Mobile"
                        data-msg-required=" Please enter your Phone Number"/>
                     <label class="control-label form-text-design" for="input">Phone*</label><i
                        class="bar"></i>
                  </div>
                  <div class="form-group col-md-6">
                     <input type="text" required="required" name="Company"/>
                     <label class="control-label form-text-design"
                        for="input">Institute/Organisation*</label><i
                        class="bar"></i>
                  </div>
                  <div class="form-group col-md-6 input-field">
                    <select class="form-control dropdwn" required="required" data-msg-required=" Please select one Country" name="LEADCF12" style="height: 31px !important;">
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                        <option value="Congo, Republic of the">Congo, Republic of the</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Eswatini">Eswatini</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, North">Korea, North</option>
                        <option value="Korea, South">Korea, South</option>
                        <option value="Kosovo">Kosovo</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="North Macedonia">North Macedonia</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City (Holy See)">Vatican City (Holy See)</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>    
                     <label class="control-label form-text-design" for="input">Country*</label><i class="bar"></i>
                  </div>
                  <div class="form-group col-md-12">
                     <input type="text" name="Description"
                        data-msg-required=" Please enter your Message"/>
                     <label class="control-label form-text-design" for="input">Message</label><i
                        class="bar"></i>
                  </div>
                  <div class="form-group col-md-12">
                     <img id='imgid' src='https://crm.zoho.com/crm/CaptchaServlet?formId=1733fd353fe5518c2c2596668756c29cb07ac2bcd9239b130ca6ebeff5053bd5&grpid=bfd084f318043f055c21cd227a4acce4d7a2f1fe4d1557d8f7ab903d7d7b9058'>
                     <a href='javascript:;' onclick='reloadImg()'><i style="color: white;" class="fa fa-refresh" aria-hidden="true"></i></a>
                  </div>
                  <div class="form-group col-md-6">
                     <input type='text' style='width:250px;' maxlength='80' name='enterdigest' required/>
                     <label class="control-label form-text-design" for="input">Enter the Captcha*</label><i
                        class="bar"></i>
                  </div>
                  <div class="col-md-12 submit-btn col-xs-12 col-sm-12">
                     <h4 class="" id="msg-panel" style="display: none;color: #fff;"></h4>
                     <button type="submit"
                        class="button button--nina1 button--text-thick  button--size-s submit-mob"
                        data-text="submit" style="">
                     <span>s</span><span>u</span><span>b</span><span>m</span><span>i</span><span>t</span>
                     </button>
                  </div>
                  <script src='https://www.google.com/recaptcha/api.js'></script>
                  <script>
                     var mndFileds = new Array('Last Name');
                     var fldLangVal = new Array('Name');
                     var name = '';
                     var email = '';
                     
                     window.onload = function () {
                         var tlid = new Date().getTime();
                         $("#ting_lead_id").val(tlid);
                         $('#returnURL').val($('#returnURL').val() + '&TingLeadID=' + tlid);
                     
                     }
                     
                     
                     /* Do not remove this code. */
                     function reloadImg() {
                         if(document.getElementById('imgid').src.indexOf('&d') !== -1 ) {
                             document.getElementById('imgid').src=document.getElementById('imgid').src.substring(0,document.getElementById('imgid').src.indexOf('&d'))+'&d'+new Date().getTime();
                         }  else {
                             document.getElementById('imgid').src = document.getElementById('imgid').src+'&d'+new Date().getTime();
                         }
                     }
                     
                     // console.log(mndFileds, document.forms['WebToLeads1709276000002605005'][mndFileds[0]]);
                     
                     
                     function checkMandatory() {
                         for (i = 0; i < mndFileds.length; i++) {
                             // var fieldObj = document.forms['WebToLeads1709276000002605005'][mndFileds[i]];
                             var fieldObj = null;
                             if (fieldObj) {
                                 if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                     if (fieldObj.type == 'file') {
                                         alert('Please select a file to upload.');
                                         fieldObj.focus();
                                         return false;
                                     }
                                     alert(fldLangVal[i] + ' cannot be empty.');
                                     fieldObj.focus();
                                     return false;
                                 } else if (fieldObj.nodeName == 'SELECT') {
                                     if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                         alert(fldLangVal[i] + ' cannot be none.');
                                         fieldObj.focus();
                                         return false;
                                     }
                                 } else if (fieldObj.type == 'checkbox') {
                                     if (fieldObj.checked == false) {
                                         alert('Please accept  ' + fldLangVal[i]);
                                         fieldObj.focus();
                                         return false;
                                     }
                                 }
                                 try {
                                     if (fieldObj.name == 'Last Name') {
                                         name = fieldObj.value;
                                     }
                                 } catch (e) {
                                 }
                             }
                         }
                     }
                     
                  </script>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('page_js')
<script></script>
@endsection