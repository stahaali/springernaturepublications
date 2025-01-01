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
    .icon
    {
        background: #dfedf2;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
    }
    .icon i
    {
        color:#1B778F;
        font-size:25px;
    }
</style>

<section class="commonbanner commonbanner40">
    <div class="container absolute-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="banner-content">
                    <h1>Topics at the heartof our community</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="white-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <p class="textinfo">Keeping connected to our global network academic editors, peer reviewers, authors and readers is incredibly important.</p>
                <p>Spotlight On… focuses on topics at the heart of our community, providing updates on what we are doing at Springer Nature to support our partners and information about new editorial and publishing activity.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="openaccess-column">
                    <h3>Be Curious</h3>
                    <p>A programme of recorded events, where leading experts share their thinking on the big issues facing our planet. Some of the finest minds in academia debate the pressing issues of the day and the role science is playing in providing solutions.</p>
                    <div class="right-icon">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gray-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="custom-tabs nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="video1-tab" data-bs-toggle="tab" data-bs-target="#video1-tab-pane" type="button" role="tab" aria-controls="video1-tab-pane" aria-selected="true">2024</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="video2-tab" data-bs-toggle="tab" data-bs-target="#video2-tab-pane" type="button" role="tab" aria-controls="video2-tab-pane" aria-selected="false">2023</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="video3-tab" data-bs-toggle="tab" data-bs-target="#video3-tab-pane" type="button" role="tab" aria-controls="video3-tab-pane" aria-selected="false">2022</button>
                    </li>
                </ul>
            </div>

            <div class="col-12 mt-4">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="video1-tab-pane" role="tabpanel" aria-labelledby="video1-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6">
                                <video
                                    id="my-video"
                                    class="video-js video-js2"
                                    controls
                                    preload="auto"
                                    poster="assets/images/review/2.webp"
                                    data-setup="{}">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                                </video>

                                <div class="row mt-4">
                                    <h4 class="textgray mb-4">Spotlight On… The Impact of the Changing Research Landscape on Our Journals</h4>
                                    <p>In an evermore-crowded journals landscape, gaining recognition continues to be a challenge for all our editors in attracting high-quality submissions from potential authors. Ritu Dhand explores key changes in the research publishing landscape over the last decade, and new editorial strategies for how journals can successfully compete to attract high-quality research papers.</p>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="icon">
                                            <i class="fa-solid fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <p class="mb-0"><a href="#" class="textblue text-deco">Spotlight On...The Impact of the Changing Research Landscape on Our Journals</a></p>
                                        <p>(PDF, 10.57 MB)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <video
                                    id="my-video"
                                    class="video-js video-js2"
                                    controls
                                    preload="auto"
                                    poster="assets/images/review/2.webp"
                                    data-setup="{}">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                                </video>
                                <div class="row mt-4">
                                    <h4 class="textgray mb-4">Spotlight On… Springer Nature’s Research Communities: Connecting the Stories Behind the Research</h4>
                                    <p>Our 42 Research Communities encompass the natural, applied and humanitarian disciplines, and boast a membership of over 42,000 researchers and science-interested readers. Learn how these platforms will provide our Editors and Authors alike with greater opportunities to connect and collaborate.</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="icon">
                                            <i class="fa-solid fa-download"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <p class="mb-0"><a href="#" class="textblue text-deco">Spotlight On...The Impact of the Changing Research Landscape on Our Journals</a></p>
                                        <p>(PDF, 10.57 MB)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="video2-tab-pane" role="tabpanel" aria-labelledby="video2-tab" tabindex="0">
                        <div class="row">
                                <div class="col-lg-6">
                                    <video
                                        id="my-video"
                                        class="video-js video-js2"
                                        controls
                                        preload="auto"
                                        poster="assets/images/review/2.webp"
                                        data-setup="{}">
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                                    </video>

                                    <div class="row mt-4">
                                        <h4 class="textgray mb-4">Spotlight On… The Impact of the Changing Research Landscape on Our Journals</h4>
                                        <p>In an evermore-crowded journals landscape, gaining recognition continues to be a challenge for all our editors in attracting high-quality submissions from potential authors. Ritu Dhand explores key changes in the research publishing landscape over the last decade, and new editorial strategies for how journals can successfully compete to attract high-quality research papers.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="icon">
                                                <i class="fa-solid fa-download"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="mb-0"><a href="#" class="textblue text-deco">Spotlight On...The Impact of the Changing Research Landscape on Our Journals</a></p>
                                            <p>(PDF, 10.57 MB)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <video
                                        id="my-video"
                                        class="video-js video-js2"
                                        controls
                                        preload="auto"
                                        poster="assets/images/review/2.webp"
                                        data-setup="{}">
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                                    </video>
                                    <div class="row mt-4">
                                        <h4 class="textgray mb-4">Spotlight On… Springer Nature’s Research Communities: Connecting the Stories Behind the Research</h4>
                                        <p>Our 42 Research Communities encompass the natural, applied and humanitarian disciplines, and boast a membership of over 42,000 researchers and science-interested readers. Learn how these platforms will provide our Editors and Authors alike with greater opportunities to connect and collaborate.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="icon">
                                                <i class="fa-solid fa-download"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="mb-0"><a href="#" class="textblue text-deco">Spotlight On...The Impact of the Changing Research Landscape on Our Journals</a></p>
                                            <p>(PDF, 10.57 MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="video3-tab-pane" role="tabpanel" aria-labelledby="video3-tab" tabindex="0">
                        <div class="row">
                                <div class="col-lg-6">
                                    <video
                                        id="my-video"
                                        class="video-js video-js2"
                                        controls
                                        preload="auto"
                                        poster="assets/images/review/2.webp"
                                        data-setup="{}">
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                                    </video>

                                    <div class="row mt-4">
                                        <h4 class="textgray mb-4">Spotlight On… The Impact of the Changing Research Landscape on Our Journals</h4>
                                        <p>In an evermore-crowded journals landscape, gaining recognition continues to be a challenge for all our editors in attracting high-quality submissions from potential authors. Ritu Dhand explores key changes in the research publishing landscape over the last decade, and new editorial strategies for how journals can successfully compete to attract high-quality research papers.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="icon">
                                                <i class="fa-solid fa-download"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="mb-0"><a href="#" class="textblue text-deco">Spotlight On...The Impact of the Changing Research Landscape on Our Journals</a></p>
                                            <p>(PDF, 10.57 MB)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <video
                                        id="my-video"
                                        class="video-js video-js2"
                                        controls
                                        preload="auto"
                                        poster="assets/images/review/2.webp"
                                        data-setup="{}">
                                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                                    </video>
                                    <div class="row mt-4">
                                        <h4 class="textgray mb-4">Spotlight On… Springer Nature’s Research Communities: Connecting the Stories Behind the Research</h4>
                                        <p>Our 42 Research Communities encompass the natural, applied and humanitarian disciplines, and boast a membership of over 42,000 researchers and science-interested readers. Learn how these platforms will provide our Editors and Authors alike with greater opportunities to connect and collaborate.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="icon">
                                                <i class="fa-solid fa-download"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="mb-0"><a href="#" class="textblue text-deco">Spotlight On...The Impact of the Changing Research Landscape on Our Journals</a></p>
                                            <p>(PDF, 10.57 MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="white-section">
    <div class="container">
        <div class="row mb-4">
            <h3 class="subheading">Other Springer Nature video series</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="blog-wrapper gray-section">
                        <a href="transfer-desk-for-editors.php">
                            <div class="blog-column">
                                <div class="blog-header">
                                    <img src="assets/images/blog/228.webp" class="img-fluid" alt="">
                                </div>
                                <div class="blog-body">
                                    <h3 class="textgray mb-4">Science Stories</h3>
                                    <p>Science Stories provides a platform to showcase some of the most exciting and inspirational stories happening in the science and research world in 3 minute videos.</p>
                                </div>
                                
                            </div>
                        </a>
                        <div class="right-icon">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="blog-wrapper gray-section">
                        <a href="transfer-desk-for-editors.php">
                            <div class="blog-column">
                                <div class="blog-header">
                                    <img src="assets/images/blog/229.webp" class="img-fluid" alt="">
                                </div>
                                <div class="blog-body">
                                    <h4 class="textgray mb-4">In Conversation</h4>
                                    <p>‘In Conversation’ is a new series which, by bringing together two guests to discuss a topical issue.</p>
                                </div>                           
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

<?php include('footer.php'); ?>