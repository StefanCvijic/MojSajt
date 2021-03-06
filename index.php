<!DOCTYPE html>
<html>
    <?php include('header.php'); ?>
<body>
    <div class="container">
        <div class="nav-wrapper">
            <div class="left-side">
                <div class="nav-link-wrapper active-nav-link">
                   <a href="index.php">Home</a>
                </div>

                <div class="nav-link-wrapper">  
                   <a href="about.php">About</a>
                </div>  

                <div class="nav-link-wrapper">  
                   <a href="portfolio.php">Portfolio</a>
                </div>      
            </div>
            
            <div class="right-side">
                <div class="brand">
                  <div>STEFAN CVIJIC</div>
                </div>  
            </div>
        </div>
        <div class="content-wrapper">
            <div class="portfolio-items-wrapper">
                
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-backg" style="background-image:url(foto-site/coding.jpg)"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>
                        <div class="subtitle">
                            Why did I start web programming?
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-backg" style="background-image:url(foto-site/basketball.jpg)"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>
                        <div class="subtitle">
                            Basketball is a sport that I have been playing for years and we have noticed results.
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-backg" style="background-image:url(foto-site/guitar.jpg)"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>
                        <div class="subtitle">
                            I think everyone should learn to play at least one instrument.
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-backg" style="background-image:url(foto-site/travel.jpg)"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>
                        <div class="subtitle">
                            In the future, I want to explore new places and new cultures.
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-backg" style="background-image:url(foto-site/drawing.jpg)"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>
                        <div class="subtitle">
                            In my free time I draw and I want to try my hand at graphic design.
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-backg" style="background-image:url(foto-site/gym.jpg)"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>
                        <div class="subtitle">
                            Physical activity and training are very important, so they are part of my daily routine.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper')

    portfolioItems.forEach(portfolioItem =>{
        portfolioItem.addEventListener('mouseover', () =>{
            portfolioItem.childNodes[1].classList.add('img-darken');
        })
        portfolioItem.addEventListener('mouseout', () =>{
            portfolioItem.childNodes[1].classList.remove('img-darken');
        })
    })
    
</script>    
</html>       