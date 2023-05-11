@include('partials.__header')
<x-navbar/>

  <!-----------------Hero Image--------------------------->

  <div class="affiliate-image">
    <div class="affiliate-text">
      <h1 style="font-size:50px">Join us as a Partner Affiliate and make a difference in the lives of students.</h1>
      <p></p>

    </div>
  </div>
  <!--------------------------End of Hero Image-------------->


  <!------------------------Affiliates forms--------------->

  <div class="row" id="affiliate-row">

    <div class="col-md-8">
      <div>
        <div class="why-section">
          <h2 class="text-center">
            Why Become An Affiliate?
          </h2>
          <h4>Becoming a sponsor in a scholarship program can bring various benefits, including:</h4>
          <br>

          <h5 style="color: #ffb100"> BUILD A POSITIVE BRAND IMAGE</h5>
            <p>
            Sponsoring a scholarship program can create a positive brand image for the
            sponsoring organization. It demonstrates the organization's commitment to education and its support for
            students' academic pursuits.</p>

            <h5 style="color: #ffb100"> ATTRACTING TOP TALENT</h5>
          <p>
            Scholarships are a great way to attract top talent to an organization. By sponsoring a
            scholarship, the organization can identify and support students who excel academically and are likely to become
            high-performing employees in the future.</p>

            <h5 style="color: #ffb100">STRENGTHENING COMMUNITY TIES</h5>
          <p>
            Sponsoring a scholarship program can help an organization build strong ties with
            the community in which it operates. This can lead to increased brand recognition, customer loyalty, and
            long-term success.</p>
            <h5 style="color: #ffb100">IMPROVING DIVERSITY AND INCLUSION</h5>
          <p>
            Scholarships can be targeted towards underrepresented groups in the student
            population, such as women, minorities, and students with disabilities. By sponsoring such scholarships,
            organizations can promote diversity and inclusion in the workplace and society as a whole.</p>
            <h5 style="color: #ffb100">PAYING IT FORWARD TO SOCIETY</h5>
          <p>
            Sponsoring a scholarship program is a great way for organizations to give back to
            society and make a positive impact on the lives of students. By investing in education, organizations can help
            create a brighter future for the next generation.</p>
        </div>
      </div>
    
    </div>

    <div class="col-md-4">
      <div class="container become-affiliate">
          <form id='survey-form'>
            <header>
              <h1 id='title' style="text-align: center">Become An Affiliate</h1>
              <p id='description'>
                Fill-out the form and we will contact you as soon as possible.
              </p>
            </header>
            <div class='form-input'>
              <label id='company-name'>Company/Foundation Name
              </label>
              <input type='text' id='company' placeholder='Company/Foundation Name' class='form-input-size' />
            </div>
            <div class='form-input'>
              <label id='name-label'>Contact Person</label>
              <input type='text' id='name' placeholder='Enter name of your contact person' class='form-input-size' required />
            </div>
            <div class='form-input'>
              <label id='mobile-number'>Contact Number</label>
              <input type='number' id='mobile-number' placeholder='Enter your contact number' class='form-input-size'
                required />
            </div>
            <div class='form-input'>
              <label id='email-label'>Email</label>
              <input type='email' id='email' placeholder='Enter your email' class='form-input-size' required />
            </div>
        
            <div class='form-input'>
              <label id='contact-person'>Website URL</label>
              <input type='text' id='contact-person' placeholder='Enter your website url' class='form-input-size' required />
            </div>
          
    
            <div class='form-input'>
            
              <label for='date-input'>Partnership Start Date:</label>
              <input type='date' id='date-input' name='date' />
              <label for='date-input'>Partnership End Date:</label>
              <input type='date' id='date-input' name='date' />
            </div>
    
     
    
            <div class='form-input'>
              <button type='submit' id='submit'>Submit</button>
            </div>
          </form>
      </div>
    </div>
  </div>
@include('partials.__footer')