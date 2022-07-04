<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demilew</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                 font-family: 'Nunito', sans-serif;
                 }
            .header
            {
                width:100%;
                height: 100px;
                display:flex;
                flex-direction:row;
                background-color:#0F172A;
                border:gray;
                color:white;
                position: fixed
            }
            .header_icon_container
            {
                width:50%;
                height: 100px;
                display:flex;
                flex-direction:row;
            }
            .header_icon
            {
              margin:auto;
            }

            
            .header_image
            {
                border-radius:50%;
                height:80px;
                width: 100px;
                margin:10px;

            }    
          .header_space
          {
            width: 400px;
            margin:20px;
          }
          .story_image
          {
           width:70%;
           height: 300px;
           border-radius:5px;
           margin-top:-80px;
           opacity: 0.5;
          }
          p
         {
          color:white;
          font-size:18px;
         }
            .Abouht
            {
             height: 500px;
             display:flex;
             flex-direction:row;
             background-color:#1E293B; 
            
            }
            .below_header_lefit_content
            {
             height: 200px;
             display:flex;
             margin-top:30px;
             flex-direction:row;
             margin:auto;
            }        
            .lift_content
            {
            border-top:2px solid gray;
            color:white;
            width:40%;
            display:flex;
            flex-direction:row;
            margin:30px;
            font-size:18px;
            }
            /* social media content */
            .web_roadmap_image
            {
            width:400px;
            height:320px;
            color:white;
            border-radius:10px;
            margin-left:200px;
            }
            .social_media_contnet
            {
             height: 700px;
             display:flex;
             flex-direction:row;
             background: -moz-linear-gradient(bottom, #1E293B 0%, #1E293B 100%); 
             background: linear-gradient(to top, #1E293B 0%,#0599B9 100%);
            }
           .youtube
            {
             margin-top:100px;
             margin-left:400px;
             text-align:center;
             color:white;
             border-radius:10px;
             padding:auto;
             width:10%;
             height: 50px;
             background-color:red;
            } 
            .Lindean
            {
             margin-top:100px;
             margin-left:100px;
             color:white;
             background-color:#121928;
             text-align:center;
             color:white;
             border-radius:10px;
             padding:auto;
             width:10%;
             height: 50px;
            }

            /* This is Aboght me section */
            .Abouht_me_section
            {
             display:flex;
             width:100%;
             flex-direction:row;
             background-color:#1E293B;
             border:2px solid gray;
             opacity: 0.92;

            }
            .Abouht_me_image_container
            {
             width: 30%;
             height: 700px;
             color:white;
            } 
           .Abuoht_me_image
           {
            width:90%;
            height:200px;
            margin:20px;
            border-radius:10px;
          }
          .Abuoht_me_lift_image
          {
           width:25%;
           height: 280px;
           margin:90px;
           margin-left:20px;
           border-radius:10px;
           background-color:#E2E3E5;
          }
          
          h1
          {
            color:white;
            font:size:50px;
            text-align:center;
            font:bold;
          }
          .Abouht_me_description
          {
          color:gray; 
          margin:40px;
          margin-left:70px;
          font-size:18px;
          width:80%; 
          }
          .moto
          {
            border-left:5px solid red;
            color:white;
            margin-left:100px;
            
          }
          .channel
          {
            background-color:red;
            margin-left:150px;
            margin-top:20px;
            width:30%;
            height: 50px;
            padding-top:0.05px;
            text-align:center;
            border-radius:2px;
          }
          .channel_descrioption
          {
            margin-left:10px;
            margin-top:20px;
            width:50%;
            height: 50px;
            text-align:center;
            border-radius:2px;
          }
          .recent_project
          {
          height: 900px;
          background-color:#111827;
          display:flex; 
          width:100%;
          flex-direction:column;
          }
          h2
          {
           text-align:center;
           color:white;
           margin-top:50px; 
           margin-left:50px;
           font-size:30px;
          }
          .project_description
          {
           text-align:center;
           color:gray;
           margin-top:10px; 
           margin-left:50px;
           font-size:18px;
          }
          .project_header
          {
          display:flex;
          flex-dirction:row;
          margin:auto;
          color:white;
          opacity: 0.9; 

          }
          .project_header_icon
          {
           margin:auto;
           margin-left:100px;
           width:150px;
           color:white;
           opacity:0.5;
           border-radius:3px;
           height: 50px;
           background-color:red;
           text-align:center;
           padding-top:3px;
          }
          .project_full_detail
          {
           width:100%;
           height: 200px;
           opacity:0.99;
           background-color:#1E293B;
          }
          .Project_image
          {
           width:50%;
           height: 100%;
           border-radius:10%;
          }
          .project_full
          {
           border-radius:10px; 
           width:25%;
           height: 30%;
           margin-left:30px;
           opacity:0.8;
           margin-top:-40px;
           font-size:18px;
           background-color:#FFFFFF;
          }
          .project_full_info
          {
           width:22%;
           height: 20%;
           margin-left:50px;
           background-color:#1E293B;
          }
          .project_detail_button
          {
            margin-left:150px;
            margin:auto;
            width:40%;
            height: 50px;
            border:2px solid gray;
            padding-top:2px;
            text-align:center;
            /* background-color:red; */
            opacity: 0.5;
          }
        .contact
        {
          height: 700px;
          background-color:#1E293B;
          display:flex; 
          width:100%;
          flex-direction:row;
        }
        /* this is hover page */
        div.project_header_icon:hover{
        background-color:blue;
        -webkit-transition: all 500ms ease;
          -moz-transition: all 500ms ease;
          -ms-transition: all 500ms ease;
          -o-transition: all 500ms ease;
           transition: all 500ms ease;
        }
        /* bussiness descrioption style */
        .bussiness_description
        {
         margin:30px;
         margin-top:100px;
        }
        .bussiness_email_form
        {
          width:65%;
          height:80%;
          margin:auto;
          margin-right:30px;
          border-radius:10px;
          background-color:#0F172A
        }
        /* this is hover i */
        div.form_input.hover
        {
        background-color:white
        }
        .form_input
        {
          background-color:#1E293B;
          padding:10px;
          border:2px solid gray;
          margin:50px;
          margin-top:20px;
          width:80%;
        }
        .form_message_input
        {
          background-color:#1E293B;
          padding:40px;
          border:2px solid gray;
          margin:30px;
          margin-left:50px;
          width:80%;
        }
        .send_button
        {
          background-color:#0C7187;
          padding:10px;
          border:2px solid gray;
          margin:50px;
          margin-top:5px;
          width:80%;  
          color:white;
          font-size:18px;
        }
        </style>
    </head>
<body>
    <div class=" header">
        <img src="image/profile.jpg" class="header_image">    
            <div class="header_space">   </div>
          <div class="header_icon_container">
    
            <div class="header_icon">
            <a href="#Abouht">Profile</a>
            
            </div>
           
            <div class="header_icon">
            <a href="#Abouht_me_section">Abouht Me</a>
            </div>
           
            <div class="header_icon">
              <a href="#projects">My Projects</a>
              
            </div>
           
            <div class="header_icon">
              <a href="#contact">Bussiness Contact</a>
              
            </div>

            <div class="header_icon">
              <a href="#contact me">Media channel</a>
              
             </div> 
          </div>
                           
    </div> 
  


      <div class=" Abouht"id="Abouht">
        <div class="below_header_lefit_content">
        <div class="lift_content">
            
            <p>I am <b>Demilew Terefe</b>. I am graduated in bachlor of 
                software engineering from Bahir Dar University
                in 2022.I attend my class from 2018 to 2022. 
                now I am working in software development.
                I am very interested in web development and machine learning.

                I am graduated in bachlor of 
                software engineering from Bahir Dar University
                in 2022.I attend my class from 2018 to 2022. 
                now I am working in software development.
                I am very interested in web development and machine learning.
                 </p>
            </div>
            <div >
                <img src="image/fasil.jpg"class="web_roadmap_image">  
            </div>        
        </div>
      </div>

   <!-- social media content -->
      
          
<!-- Abouht me descripiton  -->

    <div class="Abouht_me_section"id="Abouht_me_section">
      <div class="Abouht_me_image_container">
           <div class="">
             <img src="image/eyob_jo.jpg" class="Abuoht_me_image">          
           </div> 
           <img src="image/eyob_jo.jpg" class="Abuoht_me_image">            
            
      </div>      
           <img src="image/eyob_jo.jpg" class="Abuoht_me_lift_image">                  
       
      <div class="Abouht_me_description">
          <p class="moto">"Everything is achievable with hard work"</p>
          <h1>About Me</h1>
          <p class="Abouht_me_description">
              I have been working as a professional software developer for 10+ years.
              During my career I have worked on various types of projects with various technologies, but very often I feel that I am a junior developer who just started coding.
              In 2018 I decided to create a YouTube channel and share my knowledge. My channel is mostly focused on PHP and JavaScript.
              My content is mostly focused on practical examples and projects.
           </p>

          <p class="Abouht_me_description"> In 2018 I decided to create a YouTube channel and share my knowledge.
             My channel is mostly focused on PHP and JavaScript.
           My content is mostly focused on practical examples and projects.</p>
           
           <div class="channel">
            <p> <b>View My Channel</b> </p>
            </div> 
        </div> 
      </div>
<!-- this is fot recent project -->
   <div class="recent_project"id="projects">

       <div>
        <h2>My Recent Projects</h2>
        <p class="project_description"> You learn most by building projects.<br>
         &nbsp &nbsp &nbsp &nbsp Go ahead and build something right now.</p>
       </div>
      
      <div class="project_header">
           <div class="project_header_icon">
             All project
            </div>
           
            <div class="project_header_icon">
              Laravel
            </div>
           
            <div class="project_header_icon">
              Machine Learning
            </div>
           
            <div class="project_header_icon">
              Flask
            </div>

            <div class="project_header_icon">
              Python
             </div> 
      </div>
      
      <div class="project_full">
      <img src="image/laravel.webp" class="Project_image">            
      </div>
      <div class="project_full_info">
       <p>Laravel, Tailwind.css, Vue3
          Full Stack app with Laravel, Tailwindcss and Vue 3</p>
             <p class="project_detail_button"> View Detail</p>
      
      </div>
    </div>
     
  <!-- this is bussiness enquiry page -->

    <div class="contact"id="contact">
      <div class="bussiness_description">
        <h1>FOR BUSINESS ENQUIRIES</h1>
        <p>If you feel my experience and skills fits your needs, feel free to contact me.</p>
      </div>
      <div class="bussiness_email_form">
        
      <form action="#">
          <input type="text"placeholder="Your Name"id="name" class="form_input"><br>
          <input type="text"placeholder="Your Email"id="email" class="form_input"><br>
          <input type="text"placeholder="Your Message"id="message" class="form_message_input"><br><br><br>
          <input type="submit"id="send_button"class="send_button" value="send message">
        </form>
      </div>
    </div>

<!-- This is My social media channel part -->
<div class="social_media_contnet" id="contact me">
            <div class="channel_descrioption"> <p><b>Check my web development raod map</b></p>
            <p> I have been working as a professional software developer for 10+ years.
              During my career I have worked on various types of projects with various technologies, but very often I feel that I am a junior developer who just started coding.
              In 2018 I decided to create a YouTube channel and share my knowledge. My channel is mostly focused on PHP and JavaScript.
              My content is mostly focused on practical examples and projects.</p>
            </div>
            
           
            <div class="youtube">
            <p> <b>Youtube</b> </p>
            </div> 

            <div class="Lindean">
            <p> <b>Linkdean</b> </p>
            </div>  
          </div>
</body>
</html>
