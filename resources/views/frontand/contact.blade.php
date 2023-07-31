@extends('frontand.layouts.main')

@section('main-container')

<head>
<link href="{{url('frontend/css/contact.css')}}" rel="stylesheet">

</head>

<div class="contact">
        <div class="content mt-5">
           <h2 class="mt-2">Contact Us</h2>
             <p>Fill the form to contact Xplore Team</p>
        </div>
        <div class="containerr">
            <div class="contactinfo animated fadeInUp">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                        <div class="text">
                            <h4>
                                Address
                            </h4>
                            <p>4671 Sugar Camp Road, <br>Owatana , Minnesota , <br> 55060</p>
                        </div>
                    
                </div>
                <div class="box">
                  <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>

                  </div>
                      <div class="text">
                        <h4>
                          Phone
                        </h4>
                        <p>+92 314 9922774</p>
                      </div>
                  
                </div>
              <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                    <div class="text">
                        <h4>
                            Email
                        </h4  >
                        <p>hassan2112d@aptechgdn.net</p>
                    </div>
                
              </div>

            </div>
            <div class="contactform animated fadeInUp">
              <form>
                 <h2>Send Message</h2>
                 <div class="inputbox">
                    <input type="text" name=""  required="required" >
                    <span>Full Name</span>
                 </div>
                 <div class="inputbox">
                   <input type="email" name=""  required="required" >
                   <span>Email</span>
                 </div>
                 <div class="inputbox">
                  <textarea required="required" ></textarea>
                   <span>Type your Message .....</span>
                 </div>
                 <div class="inputbox">
                  <input type="submit" name=""  value="Send" >
                 
                </div>
              </form>
            </div>
        </div>


</div>
     
@endsection