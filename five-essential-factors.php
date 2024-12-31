<?php include('header.php'); ?>

<style>
    .video-js
    {
        height: auto !important;
    }
    .video-js2 .vjs-control-bar 
    {
        width: 100%;
        left: 0;
        bottom: -2px;
        border-radius: 0px;
    }
    .vjs-big-play-button:before
    {
        width:60px;
        height:60px;
        font-size: 24px;
    }
</style>

<section class="commonbanner commonbanner32">
    <div class="container absolute-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="banner-content">
                    <h1>Five essential factors for data sharing</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="white-section">
    <div class="container">
        <div class="row">
            <h3 class="subheading mb-4">New whitepaper on research data: Five Essential Factors for Data Sharing</h3>
            <p>Five Essential Factors for Data Sharing proposes five measures that will help in making data sharing more efficient and ensure good data practice. Bringing together survey results from more than 11,000 researchers, we explore the challenges they face, as well as their attitudes and behaviours towards data sharing.</p>
            <p>To enable researchers to move beyond key obstacles and increase data sharing we propose five essential factors:</p>

            <div class="list-1 list-3 mb-4">
                <ul>
                    <li><i class="fa-solid fa-check"></i> Clear policy setting specific requirements for data management and sharing that will be shared amongst all the different stakeholders. </li>
                    <li><i class="fa-solid fa-check"></i> Better credit for researchers with formal recognition to make data sharing worth a researcher’s time.</li>
                    <li><i class="fa-solid fa-check"></i> Explicit funding for data management and data sharing, as well as data publishing.</li>
                    <li><i class="fa-solid fa-check"></i> Practical help for organizing data, finding appropriate repositories and provision of faster, easier routes to share data.</li>
                    <li><i class="fa-solid fa-check"></i> Training and education to answer common questions from researchers on data sharing and help build skills and knowledge.</li>
                </ul>
            </div>
            <p>The whitepaper is <a href="#" class="textblue text-deco">available to read and download at figshare</a>. </p>
        </div>  
    </div>
</section>

<section class="gray-section">
    <div class="container">
        <div class="row mb-4">
            <h3 class="subheading border-white">Get more insights</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mb-20">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/images/blog/221.webp" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <p class="m-0"><a href="#" class="textblue text-deco">Download the whitepaper</a></p>
                        <p>(PDF, 2.06 MB)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-20">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/images/blog/222.webp" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <p class="m-0"><a href="#" class="textblue text-deco">Download the infographic</a></p>
                        <p>(PDF, 2.37 MB)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-20">
                    <video
                        id="my-video"
                        class="video-js video-js2"
                        controls
                        preload="auto"
                        poster="assets/images/review/2.webp"
                        data-setup="{}">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                    </video>

                    <p class="mt-4"><strong>Video</strong></p>
                    <p>Watch the video</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-20">
                <div class="partnership-wrapper border-radius">
                    <div class="partnership-column">
                        <div class="partnership-body">
                            <h3 class="initiative-heading">SDGs and the impact of open research</h3>
                            <p>We can help your institution increase data sharing and meet funder data sharing requirements. Learn more about how we can work together to support your institutional aims.</p>
                        </div>
                    </div>
                    <div class="right-icon">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
