<html>
<head>
	<title>OWL</title>
	<link rel="stylesheet" type="text/css" href="frontend/templates/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/templates/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="frontend/templates/css/animate.css">
    <link href="backend/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="custom.css">
</head>
	<body>
<div class="img__wrap">
  <img class="img__img" src="event2.png" />
  <p class="img__description">This image looks super neat.</p>
</div>

<div class="container">
        <header>
            <h1>Selamat Datang</h1>
        </header>
 
        <article>
            website ini telah dikunjungi
            
            kali
        </article>
    </div>
    

<!-- Caraousel -->
<!-- <div class="owl-carousel owl-theme">
    <div class="item"><img src="img/1.jpg" alt=""></div>
    <div class="item"><img src="img/1.jpg" alt=""></div>
    <div class="item"><img src="img/1.jpg" alt=""></div>
</div> -->
<div>
<h2>belajar css</h2>
</div>
<div id="menu-posisi">
    <a class="menu" href="">Home</a>
    <a class="menu" href="">Contact</a>
    <a class="menu" href="">About</a>
</div><br>
<div class="text-pendek">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aperiam sint consequuntur dolore aliquam, veritatis commodi dolorum harum tempore qui.
</div>
<div>
    <p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum dignissimos sit sapiente debitis accusamus ad velit praesentium! Tenetur facere quibusdam, et numquam. Iure aliquam nesciunt fugiat nobis natus rerum, distinctio doloribus quis aliquid hic odit cum, dolorem excepturi, ullam soluta eaque praesentium. Distinctio suscipit nisi id molestiae quis, quam quo, expedita libero numquam provident deserunt, qui labore eum ad blanditiis placeat, adipisci eaque excepturi aliquam quas. Beatae ipsa repudiandae, ut quidem quo accusantium delectus possimus eaque distinctio iste. Placeat asperiores expedita, sint voluptas facilis omnis ut iure labore vero est? Nisi dolorem eum soluta aliquid ducimus itaque vitae reprehenderit, ut voluptatum quis quod delectus veniam, autem, totam. Ipsum dolorem, eveniet non ipsa qui eius eos est ut voluptatum veritatis velit excepturi molestias aliquam reprehenderit obcaecati sint nostrum eum consequuntur delectus commodi quo maiores. Non laboriosam corporis, quibusdam doloribus alias facere, architecto praesentium magnam voluptatem inventore, beatae reprehenderit quod saepe enim tempore. Esse illum, ducimus magni assumenda tempore aperiam ex beatae neque rem! Neque velit, magni repudiandae. Quos velit, officia eius id. Consequuntur animi officia ipsam inventore voluptates a velit explicabo culpa aliquam quae? Omnis quam perspiciatis blanditiis corporis cumque, laudantium sit eveniet recusandae. Deleniti laudantium voluptatem rerum ea, asperiores eos natus ipsum quaerat enim delectus. Autem, blanditiis. Veniam magni, consequatur dicta, delectus quam, repellendus nulla, mollitia eaque magnam officiis harum aspernatur iste explicabo unde voluptatem beatae consequuntur officia voluptatum excepturi. Perspiciatis error, nisi tempora cum non qui ex deleniti eaque libero incidunt id pariatur dolorum adipisci sed aperiam, quisquam asperiores? Cupiditate, labore, culpa vel, placeat magnam modi et enim laudantium praesentium est deleniti! Facilis minus esse consequuntur repellendus ipsam culpa dolor, ullam ipsa animi dolore accusamus quo harum magnam quod maxime dicta mollitia. Saepe possimus eveniet, id repellat sed quaerat ut, expedita modi suscipit consequatur aliquam animi excepturi, assumenda, doloremque.</p>
</div>
<div class="customNavigation">
  <a class="btn prev">Previous</a>
  <a class="btn next">Next</a>
</div>

<div id="owl-demo" class="owl-carousel owl-theme">
  <div class="item"><h1>1</h1></div>
  <div class="item"><h1>2</h1></div>
  <div class="item"><h1>3</h1></div>
  <div class="item"><h1>4</h1></div>
  <div class="item"><h1>5</h1></div>
  <div class="item"><h1>6</h1></div>
  <div class="item"><h1>7</h1></div>
  <div class="item"><h1>8</h1></div>
  <div class="item"><h1>9</h1></div>
  <div class="item"><h1>10</h1></div>
  <div class="item"><h1>11</h1></div>
  <div class="item"><h1>12</h1></div>
  <div class="item"><h1>13</h1></div>
  <div class="item"><h1>14</h1></div>
  <div class="item"><h1>15</h1></div>
  <div class="item"><h1>16</h1></div>
</div>




	<script src="frontend/templates/js/jquery.min.js"></script>	
	<script src="frontend/templates/js/owl.carousel.min.js"></script>
	<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        animateIn: 'flipInX',
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:false,
                loop:false
            }
        }
    })
	</script>
    <script>
        
$(document).ready(function() {

  var owl = $("#owl-demo");

  owl.owlCarousel();

  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })

});


    </script>	
	</body>
</html>
