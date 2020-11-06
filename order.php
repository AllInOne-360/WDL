<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <title>Menu</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css/Mstyle.css">
</head>

<body>
  <div class="container">
    <div class="nav-wrapper">
          <div class="left-side">
                <div class="nav-link-wrapper active-nav-link">
                  <a href="index.html">Rice</a>
                </div>

                <div class="nav-link-wrapper">
                  <a href="about.html">Snacks</a>
                </div>

                <div class="nav-link-wrapper">
                  <a href="about.html">Soup</a>
                </div>

                <div class="nav-link-wrapper">
                  <a href="about.html">Drinks</a>
                </div>

                <div class="nav-link-wrapper">
                  <a href="about.html">Ice-Cream</a>
                </div>
          </div>

          <div class="right-side">
            <div class="brand">
              NameofStudent
            </div>
          </div>

      </div>           


      <div class="menu-content-rice">
        <div class="menu-items-rice">

                <div class="menu-item-rice">  

                   <div class="img-background" style="background-image: url(images/Fried.jpg);">
                   </div>

                   <div class="text-wrapper">
                     <div class="logo-wrapper">
                       <img src="images/rice.png" height="100px" width="100px">
                     </div>
                     <div class="subtitle">Coding bootcamp and learning management system.</div>
                   </div>


                </div>


                <div class="menu-item-rice">  

                   <div class="img-background" style="background-image: url(images/manchurian.jpg);">
                   </div>

                   <div class="text-wrapper">
                     <div class="logo-wrapper">
                       <img src="images/rice.png" height="100px" width="100px">
                     </div>
                     <div class="subtitle">Coding bootcamp and learning management system.</div>
                   </div>


                </div>


                <div class="menu-item-rice">  

                   <div class="img-background" style="background-image: url(images/mushroom.png);">
                   </div>

                   <div class="text-wrapper">
                     <div class="logo-wrapper">
                       <img src="images/rice.png" height="100px" width="100px">
                     </div>

                     <div class="subtitle">Coding bootcamp and learning management system.</div>
                   </div>


                </div>


                <div class="menu-item-rice">  

                   <div class="img-background" style="background-image: url(images/schezwan.png);">
                   </div>

                   <div class="text-wrapper">
                     <div class="logo-wrapper">
                       <img src="images/rice.png" height="100px" width="100px">
                     </div>

                     <div class="subtitle">Coding bootcamp and learning management system.</div>
                   </div>


                </div>


                <div class="menu-item-rice">  

                   <div class="img-background" style="background-image: url(images/schezwan.png);">
                   </div>

                   <div class="text-wrapper">
                     <div class="logo-wrapper">
                       <img src="images/rice.png" height="100px" width="100px">
                     </div>

                     <div class="subtitle">Coding bootcamp and learning management system.</div>
                   </div>


                </div>
          </div>

      </div>

  </div>
</body>
<script type="text/javascript">
    const portfolioItems = document.querySelectorAll('.menu-items-rice');

    portfolioItems.forEach(portfolioItem => {
    portfolioItem.addEventListener('mouseover', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.add('image-blur');
    });

    portfolioItem.addEventListener('mouseout', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.remove('image-blur');
    });
  });

</script>
</html>






    
