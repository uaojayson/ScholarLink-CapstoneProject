@include('partials.__header')
<x-navbar/>

<section id="faqs">

    <div class="section">
        <h1>Frequently Asked Questions <i
            class="fa1 fa fa-quote-right"
            aria-hidden="true"
            style="font-size: 36px; color: #ffb100"
          ></i></h1>
      
        <div class="container-1">

            <div class="faq">
                <div class="question">
                    <h2>What is Scholar Link?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Scholar Link is a non-profit organization that connects underprivileged high school students with college mentors who provide academic, career, and personal guidance.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>Who can apply to be a student mentee?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Any high school student who comes from a low-income background and has demonstrated academic potential can apply to be a mentee.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>Who can apply to be a mentor?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Any college student who has completed at least one year of college and has a GPA of 2.0 or higher (or equivalent) can apply to be a mentor.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>How are mentees matched with mentors?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Mentees are matched with mentors based on their academic interests, career aspirations, and personal backgrounds.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>How long does the mentorship program last?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>The mentorship program lasts for one academic year, with the option to extend for an additional year.</p>
                </div>
            </div>

        </div>

        <div class="container-2">


            <div class="faq">
                <div class="question">
                    <h2>What services does Scholar Link provide?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Scholar Link provides academic and career planning, assistance with college applications, scholarship grants, personality development, and more.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>How much does it cost to participate in Scholar Link?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>There is no cost to participate in Scholar Link. The program is completely free for both mentees and mentors.</p>
                </div>
            </div>


       

            <div class="faq">
                <div class="question">
                    <h2>How often do mentors and mentees meet?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Mentors and mentees are expected to meet at least once a month, either in person or virtually.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>How does Scholar Link measure the success of the program?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>Scholar Link measures the success of the program by tracking the academic progress of mentees, their acceptance rates to college, and their post-graduation outcomes.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h2>How can I get involved with Scholar Link?</h2>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
                <div class="answer">
                    <p>You can get involved with Scholar Link by applying to be a mentor, making a donation, or spreading the word about the program to your network.</p>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section id="contact">
    <h1 style="color: white;   letter-spacing: 2px; font-size: 36px; text-align: center;">Let's Get In Touch</h1>
    <div class="container contact">
        <span class="big-circle"></span>

        <div class="form">
          <div class="contact-info">
            <h3 class="title">Visit Us and Contact Us</h3>
            <p class="text">
              "Connect with Us and Let's Achieve Your Dreams Together."
            </p>
  
            <div class="info">
              <div class="information">
                <img src="/image/location.png" class="s-icon" alt="" />
                <p>36th St, Fifth Avenue, Taguig City PH</p>
              </div>
              <div class="information">
                <img src="/image/email.png" class="s-icon" alt="" />
                <p>scholarlink@gmail.com</p>
              </div>
              <div class="information">
                <img src="/image/phone.png" class="s-icon" alt="" />
                <p>123-456-789</p>
              </div>
            </div>
  
            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="#" class="s-icons">
                  <i class="fab fa-facebook-f"></i>
                </a >
                <a href="#" class="s-icons">
                  <i class="fab fa-twitter"></i>
                </a >
                <a href="#" class="s-icons">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="s-icons">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
  
          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
  
            <form id="contact-form" action="support.php" autocomplete="off">
              <h3 class="title">Message Us</h3>
              <div class="input-container">
                <input type="text" name="name" class="input" />
                <label for="">Full Name</label>
                <span>Full Name</span>
              </div>
              <div class="input-container">
                <input type="email" name="email" class="input" />
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <div class="input-container">
                <input type="tel" name="phone" class="input" />
                <label for="">Phone</label>
                <span>Phone</span>
              </div>
              <div class="input-container textarea">
                <textarea name="message" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
              </div>
              <input type="submit" value="Send" class="btn btn-contact" />
            </form>
          </div>
        </div>
      </div>
  </section>



@include('partials.__footer')