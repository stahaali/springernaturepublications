<?php include('header.php'); ?>

<style>
    .video-js
    {
        height: auto;
    }
    .video-js2 .vjs-control-bar 
    {
        width: 100%;
        left: 0;
        bottom: -2px;
        border-radius: 0px;
    }
    .booksale-wrapper
    {
        justify-content: center;
        align-items: center;
    }
    .booksale-wrapper a .sm-con2
    {
        margin:30px auto 0;
        width: fit-content;
    }
    .booksale-wrapper a .sm-con2 img
    {
        max-width:100px;
    }
</style>

<section class="commonbanner commonbanner47">
    <div class="container absolute-center">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-12">
                <div class="banner-content">
                    <h1>Research management and innovation teams</h1>
                    <p>Services to support the entire research enterprise</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="white-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <video
                    id="my-video"
                    class="video-js video-js2"
                    controls
                    preload="auto"
                    poster="assets/images/review/2.webp"
                    data-setup="{}">
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                </video>
                
                <p class="mt-4"><strong>Watch: Accelerating research at your institution</strong></p>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <p class="textinfo">You’re already familiar with how Nature Portfolio both publishes your researchers’ work, and brings them the research of others. But Nature Portfolio also provides you services and tools to help you support the entire research enterprise across your institution.</p>
                <p>These services will help you define your research strategy, maximize and measure your impact, and equip and support your researchers in their work.</p>
                <p>Watch the video to find out more.</p>
            </div>
        </div>
    </div>
</section>

<section class="gray-section">
    <div class="container">
        <div class="row mb-4">
            <h3 class="subheading border-white">Leverage our expertise</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 m20">
                <div class="booksale-wrapper background-blue">
                    <a href="#">
                    <div class="sm-con2">
                        <img src="assets/images/icons/icon7.webp" class="img-fluid" alt="">
                    </div>
                        <div class="booksale-column">
                            <h4>Define strategy</h4>
                            <p>Tools to make decisions about research direction Palgrave titles in Humanities and Social Sciences.
                            </p>
                        </div>
                    </a>
                    <div class="right-icon">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 m20">
                <div class="booksale-wrapper backgrdound-green">
                    <a href="#">
                        <div class="sm-con2">
                            <img src="assets/images/icons/icon8.webp" class="img-fluid" alt="">
                        </div>
                        <div class="booksale-column">
                            <h4>Maximize impact</h4>
                            <p>Evaluate research quality, improve reputation and rankings, and more &amp; Palgrave titles in Humanities and Social Sciences.
                            </p>
                        </div>
                    </a>
                    <div class="right-icon">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 m20">
                <div class="booksale-wrapper background-orange">
                    <a href="#">
                    <div class="sm-con2">
                        <img src="assets/images/icons/icon9.webp" class="img-fluid" alt="">
                    </div>
                        <div class="booksale-column">
                            <h4>Equip researchers</h4>
                            <p>Help researchers find and identify funding and collaboration opportunities, and more
                            </p>
                        </div>
                    </a>
                    <div class="right-icon">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="white-section">
    <div class="container">
        <div class="row mb-4">
            <h3 class="subheading">Discover more: explore related content</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="initiative-wrapper border-radius">
                    <a href="#">
                        <div class="initiative-column">
                            <div class="initiative-header">
                                <img src="assets/images/blog/191.webp" width="100%" class="img-fluid" alt="">
                            </div>
                            <div class="initiative-body">
                                <h3 class="initiative-heading">Global perspectives on research management</h3>
                                <p>Amid increasing global research spending and a growing emphasis on international collaborations, University leaders are recognizing the importance of establishing a sustainable research office</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="initiative-wrapper border-radius">
                    <a href="#">
                        <div class="initiative-column">
                            <div class="initiative-header">
                                <img src="assets/images/blog/192.webp" width="100%" class="img-fluid" alt="">
                            </div>
                            <div class="initiative-body">
                                <h3 class="initiative-heading">Future-proof institutional growth in 4 strategic steps</h3>
                                <p>How can research leaders offset the impact of possible funding and income changes and preserve a position of trusted leader within their field</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>