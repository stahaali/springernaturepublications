
$(document).ready(function() 
{
    
  

    $('.toggle4').click(function()
    {
        $('.collapse-menu').toggleClass('show4');
    });

    // $('.toggle').click(function()
    // {
    //     $('.menu-list').toggleClass('show');
    // });

    // load more

    $(".content").hide().slice(0, 3).show();
    $('.minusicon').hide();
    $('.load-button a').click(function(e) {
        e.preventDefault();

        if ($(".content:hidden").length > 0) {
            $(".content:hidden").slice(0, 3).slideDown();
            if ($(".content:hidden").length === 0) 
                {
                $('.plusicon').hide();
                $('.minusicon').show();
                $(this).html('<i class="fa-solid fa-minus minusicon"></i> Show Less');
            }
        } else 
        {
            $('.plusicon').show();
            $(".content").slice(3).slideUp();
            $(this).html('<i class="fa-solid fa-plus plusicon"></i> Show More');
        }
    });

    
    // $('.toggle2').click(function() 
    // {
    //     $('.collapse-menu2').toggleClass('show');

    //     $('.toggle3').toggleClass('show4');

    //     if ($('.collapse-menu2').hasClass('show')) 
    //     {
    //         $('.mobile-menu').addClass('fixed-menu');
    //     } 
    //     else 
    //     {
    //         $('.mobile-menu').removeClass('fixed-menu');
    //     }
    // });

    // $('.angledown').click(function()
    // {
    //     $('.menu-list2').toggleClass('show2');
    // });

});


$('.whitepapers-slider').owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    autoplay: true,
    autoPlaySpeed: 300,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
});

$('.readypublish-slider').owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    autoplay: true,
    autoPlaySpeed: 400,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
});

$('.readypublish-logoslider').owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
});

$('.homeslider').owlCarousel({
    loop: true,
    slideSpeed: 300,
    paginationSpeed: 400,
    items: 1,
    dots: false,   
    nav: true,
    animateOut: 'fadeOut',  
    animateIn: 'fadeIn',    
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
});

$('.blog-slider').owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
});

$('.homeslider').owlCarousel({
    loop: true,
    slideSpeed: 300,
    paginationSpeed: 400,
    items: 1,
    dots: false,   
    nav: true,
    animateOut: 'fadeOut',  
    animateIn: 'fadeIn',    
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
});

$('.ri-slider').owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
});

// pagination script

 $(document).ready(function () {
        const itemsPerPage = 9;
        const totalItems = $("#content-list .page-content").length;
        const totalPages = Math.ceil(totalItems / itemsPerPage);
        let currentPage = 1;

        function showPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            $("#content-list .page-content").hide().slice(start, end).show();
            $(".pagination .page-link1").removeClass("active");
            $(".pagination .page-link1").eq(page - 1).addClass("active");
        }

        $(".pagination").on("click", ".page-link1", function (e) {
            e.preventDefault();
            currentPage = $(this).text();
            showPage(currentPage);
        });

        $(".pagination").on("click", ".prev-link", function (e) {
            e.preventDefault();
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        });

        $(".pagination").on("click", ".next-link", function (e) {
            e.preventDefault();
            if (currentPage < totalPages) {
                currentPage++;
                showPage(currentPage);
            }
        });

        showPage(currentPage);
    });
    
// search script


$(document).ready(function() {
    // Trigger the filter function when search button is clicked
    $('.submit3').on('click', function(e) {
        e.preventDefault(); // Prevent the form from submitting
        var searchInput = $('#searchInput').val().toLowerCase(); // Get the input and convert it to lowercase
        filterResults(searchInput);
    });

    // Filter results based on search input
    function filterResults(searchInput) {
        // Loop through each list item
        $('#content-list .page-content').each(function() {
            var itemText = $(this).text().toLowerCase(); // Get the text content of the list item
            
            // Check if the search input is present in the text
            if (searchInput !== "" && itemText.indexOf(searchInput) !== -1) {
                $(this).show(); // Show matching items
            } else {
                $(this).hide(); // Hide non-matching items
            }
        });
    }
});



