<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Johnny Bravo - Resume</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 20px;
            color: #000;
            background-color: #f8f9fa;
        }
         h2, h3 {
            color: #C8102E; /* Red color for headings */
            margin-bottom: 10px;

        }


        h1 {
            border-bottom: 2px solid #C8102E;
            color: #181516;
            padding-bottom: 10px;
            font-size: 2.5em;
        }
        .contact-info {
            margin-bottom: 20px;
            font-size: 0.9em;
        }
        section {
            margin-bottom: 20px;
            background: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin: 5px 0;
        }
        .links a {
            color: #C8102E; /* Red for links */
            text-decoration: none;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>{{$data['name']}}</h1>
    <div class="contact-info">
        <p>{{$data['address']}}</p>
        <p>{{$data['contact']}}</p>
        <p>{{$data['email']}}</p>
        <div class="links">
            <a href="https://linkedin.com/in/johnnybravo">LinkedIn</a> | 
            <a href="https://johnnybravoportfolio.com">Portfolio</a>
        </div>
    </div>

    <section>
        <h2>Objective</h2>
        <p>{{$data['objectives']}}</p>
    </section>

    <section>
        <h2>Education</h2>
        <p><strong>Bachelor of Arts</strong> in Graphic Design<br>
        University of Southern California, Los Angeles, CA<br>
        August 2015 – May 2019</p>
    </section>

    <section>
        <h2>Experience</h2>
        <h3>Graphic Designer</h3>
        <p>Creative Agency, Los Angeles, CA<br>
        June 2019 – Present</p>
        <ul>
            <li>Designed promotional materials and branding for various clients.</li>
            <li>Collaborated with the marketing team to develop visual content for campaigns.</li>
            <li>Implemented design solutions that increased client engagement by 30%.</li>
        </ul>

        <h3>Intern</h3>
        <p>Art Studio, Los Angeles, CA<br>
        January 2019 – May 2019</p>
        <ul>
            <li>Assisted in the creation of digital artwork for client projects.</li>
            <li>Participated in brainstorming sessions to generate new design concepts.</li>
            <li>Supported studio operations by managing files and project documentation.</li>
        </ul>
    </section>

    <section>
        <h2>Skills</h2>
        <ul>
            <li>Adobe Creative Suite (Photoshop, Illustrator, InDesign)</li>
            <li>UI/UX Design</li>
            <li>Social Media Marketing</li>
            <li>Content Creation</li>
            <li>Project Management</li>
        </ul>
    </section>

    <section>
        <h2>Certifications</h2>
        <p><strong>Certified Graphic Designer</strong><br>
        Graphic Design Institute, June 2020</p>
    </section>

    <section>
        <h2>Projects</h2>
        <h3>Brand Redesign for Local Business</h3>
        <p>Led a team to revamp the branding of a local restaurant, resulting in a 50% increase in foot traffic and positive customer feedback.</p>
    </section>

    <section>
        <h2>References</h2>
        <p>Available upon request.</p>
    </section>

</body>
</html>