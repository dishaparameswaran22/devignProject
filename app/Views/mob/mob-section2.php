
<style>
   .process-box {
    background: #FA7378;
    color: #fff;
    padding: 25px;
    border-radius: 15px;min-height: 330px;
    margin-bottom: 40px;
    position: relative;
}
.process-box img {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
}
.process-box h5 {
    font-weight: 400;
    letter-spacing: 1px;
}
.process-box ul li {
    padding-left: 25px;
}
.process-box ul {
    padding-left: 140px;
}
.process-box h3 {
    font-size: 22px;
    text-transform: capitalize;
    display: inline-block;
    border-bottom: 1px dashed #fff;
    padding-bottom: 13px;
    margin-bottom: 20px;
}
.process-box.Planning {
    background: #01B976;
}
.process-box.AppDesign {
    background: #FEC75A;
}
.process-box.Development {
    background: #6564DB;
}
.process-box.Deployment {
    background: #02C1D0;
}
.process-box h3, .process-box h5 {
    color: #fff;
}
.process-box.support {
    background: #EE4135;
}
.process-box i {
    color: #fff;
}
</style>
}<section class="page-section bg-shape-image-position" id="servicecol">
                 <div class="bg-shape-image">
                    <img class="light-image" src="../assets/images/background-shape.svg" alt="Bg images">
                </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-8">
                        <h2 class="main-headings">We Apply Design Thinking Strategies to Multiply Your App Downloads.</h2>
                        <ul>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> What are you doing to transform your idea into a business solution? </li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Are you trying to overbuild your mobile app in the initial phase?</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Are you struggling to decide if you do cross platform or native app development?</li>
                        </ul>
                        <p>If you're an experienced entrepreneur or a non tech founder, do not haste your product development activity. Instead, build an MVP and work with a mobile app development company in Toronto Canada.</p>
                        <p>The difference between a good and a great app design is your intuitive mind hitting the right chord and an open ear for criticism.</p>
                        <p>We specialize in building hybrid mobile apps for startups, first time entrepreneurs and small online brands using Android, ReactNative and Flutter..</p>
                     </div>
                     <div class="col-md-4">
                        <h2 class="main-headings">Get In Touch</h2>
                        <div class="form-contact contact_form" id="contactForm" novalidate="novalidate">
                           <div class="row">
                              <div class="form-group">
                                 <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                              </div>
                              <!--<div class="form-group">-->
                              <!--   <div class="iti iti--allow-dropdown">-->
                              <!--      <div class="iti__flag-container">-->
                              <!--         <div class="iti__selected-flag" role="combobox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="India (भारत): +91" aria-activedescendant="iti-0__item-in">-->
                              <!--            <div class="iti__flag iti__in"></div>-->
                              <!--            <div class="iti__arrow"></div>-->
                              <!--         </div>-->
                              <!--      </div>-->
                              <!--      <div class="iti iti--allow-dropdown">-->
                              <!--         <div class="iti__flag-container">-->
                              <!--            <div class="iti__selected-flag" role="combobox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="India (भारत): +91" aria-activedescendant="iti-0__item-in">-->
                              <!--               <div class="iti__flag iti__in"></div>-->
                              <!--               <div class="iti__arrow"></div>-->
                              <!--            </div>-->
                              <!--         </div>-->
                              <!--         <input class="form-control" name="phone" id="phone" type="text" required="" autocomplete="off" data-intl-tel-input-id="0" placeholder="081234 56789">-->
                              <!--      </div>-->
                              <!--   </div>-->
                              <!--</div>-->
                              <div class="form-group">
                                 <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Enter email address">
                              </div>
                              <div class="form-group">
                                 <input class="form-control" id="company" placeholder="Enter Company">
                              </div>
                              <div class="form-group">
                                 <input class="form-control" name="type" id="type" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                              </div>
                              <div class="form-group">
                                 <textarea class="form-control w-100" name="problems" id="problems" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                              </div>
                              <div class="form-group">
                                 <button onclick="speakToWebsiteExpert()" class="button button-contactForm btn_4">Send Message</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <script>
    
         function speakToWebsiteExpert() {
           var name = document.getElementById("name").value;
          //var phone2 = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var company = document.getElementById("company").value;
            var problems = document.getElementById("problems").value;
           var type=document.getElementById("type").value;
                      var tested=false;
                      //var phone = country_code+' '+phone2;
      //if((email!='')&&(phone2!='')&&(name!=''))   
      if((email!='')&&(name!=''))   
      {

       var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
              if(email.match(mailformat))
             {
                tested=true;
             }
             else
             {
               tested= false;
               alert("Please enter a Valid email address");
             }



      }

      else{

        alert("Please enter required fields");
      }

           if(name!='' && email!='' && company!='' && problems!='' && tested){
         
 
          

          

            

            
      $.ajax({
              type: "POST",
              url: "contact_process",
              data: {
        //phone: phone,
        name : name,
        email : email, 
        company:company,
        problems : problems,
        type:type,
       
                },
              cache: false,
              success: function(data){
        if(data){
                    console.log(data);
          window.location.href = "https://devigntech.com/thank-you.html";
          
        }
              }
            });
          }else{
            alert("All fields are required.")
          }
         }
      </script>
