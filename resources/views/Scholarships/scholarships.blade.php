@include('partials.__header')
<x-navbar />

<section id="scholarships">
    <div class="scholarships-banner">
      <h1 style="color: white;" class="banner-title">Scholarships and Grants</h1>
      <h3 style="color: white;" class="banner-tagline">Scholarships Made Simple: Streamline Your Search Today, Find Your Dream Scholarship Tomorrow.
      </h3>
    </div>

    <div class="container container-scholarships">

      <div class="card" id="scholarshipCard">
         <div class="img">
            <img src="/image/ngo.avif">
         </div>
         <div class="top-text">
            <div class="name">
              NGO Funded
            </div>
       
         </div>
         <div class="bottom-text">
            <div class="text">
               NGO Funded Scholarships  are designed to help underprivileged and deserving students to access quality education, regardless of their economic background. NGOs offer various scholarship programs that cover tuition fees, books, and other academic-related expenses. 
            </div>
            <div class="btn">
               <a href="/stypeNGO">See More</a>
            </div>
         </div>
      </div>
      <div class="card" id="scholarshipCard">
         <div class="img">
            <img src="/image/private.jpg">
         </div>
         <div class="top-text">
            <div class="name">
              Privately Funded
            </div>
        
         </div>
         <div class="bottom-text">
            <div class="text">
              Privately funded scholarships provide financial assistance to students based on various criteria, such as academic achievement, financial need, or community involvement. These scholarships are usually provided by private individuals, companies, or foundations. 
            </div>
            <div class="btn">
               <a href="/stypePrivate">See More</a>
            </div>
         </div>
      </div>
      <div class="card" id="scholarshipCard">
         <div class="img">
            <img src="/image/government.jpg">
         </div>
         <div class="top-text">
            <div class="name">
               Government Funded
            </div>
          
         </div>
         <div class="bottom-text">
            <div class="text">
              Government-funded scholarships provide financial assistance to students based on their academic merit or financial need. These scholarships are often provided by the government to promote education and support students who may not have the financial resources to pursue higher education. 
            </div>
            <div class="btn">
               <a href="/stypeGovernment">See More</a>
            </div>
         </div>
      </div>

   
   </div>
   <div class="scholarships-footer">

    <h3 style="color: white;" class="banner-tagline"> <i
      class="fa1 fa fa-quote-left"
      aria-hidden="true"
      style="font-size: 45px; color: #ffb100"
    ></i>Join ScholarLInk  now and become part of a thriving network of driven students, supported by a wealth of scholarship opportunities and resources.
    </h3>
    <div class="btn ">
      <a href="#" class="btn-cta">SIGN-UP NOW</a>
   </div>
  </div>
  </section>

@include('partials.__footer')