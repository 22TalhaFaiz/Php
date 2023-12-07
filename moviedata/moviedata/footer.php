
<style>
	@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto&family=Stylish&display=swap");
	.footer {
  padding-block: 5rem;
  background:linear-gradient(45deg #201f1e,#2f302f,#363635);
  /* background-color: #f8f9fa; */
  /* background:  #201f1e; */
  /* color: #666873; */
  color: #cccccc;
  font-weight:bold;
}
.footer__container {
  max-width: 116rem;
  margin: auto;
  padding: 0 1.5rem;
}

.footer__top {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
  row-gap: 2rem;
}
.footer__title {
  font-size: 1.8rem;
  color: #cccccc;
  font-weight: 900;
  margin-bottom:1rem;
}
.footer__list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}
.footer__list-item {
  list-style: none;
}
.footer__list-link {
  text-decoration: none;
  color: inherit;
  transition: color 0.25s;
  font-size:16px;
}
.footer__list-link:hover {
  color: grey;
}

.company__info {
  grid-column: 1/-1;
  display: flex;
  flex-direction: column;
  gap: 2rem;
  padding-right: 5rem;
}
.company__logo {
  color:#cccccc;
  font-weight:900;
  text-transform:uppercase;
}
.company__info ul {
  flex-direction: row;
}
.copyright {
  margin-top: auto;
}
@media screen and (min-width: 40em) {
  .company__info {
    grid-column: span 2;
  }
}
</style>

<footer class="footer">
	<div class="container-fluid">
    <div class="footer__container">
      <div class="footer__top">
        <div class="company__info">
          <h2 class="company__logo"><img src="images/t-logo.png" height="100px" alt="Logo Image Here"/></h2>
          <p class="company__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, iure. Harum, animi dolores,
            nam, ad magni expedita.
          </p>
          <ul class="footer__list">
            <li class="footer__list-item">
              <a href="" class="footer__list-link">
                <i class="ri-facebook-circle-line"></i>
              </a>
            </li>
            <li class="footer__list-item">
              <a href="#" class="footer__list-link">
                <i class="ri-instagram-line"></i>
              </a>
            </li>
            <li class="footer__list-item">
              <a href="#" class="footer__list-link">
                <i class="ri-twitter-line"></i>
              </a>
            </li>
          </ul>
          <span class="copyright">&copy;2021 Company name. All rights reserved.</span>
        </div>

        <div>
          <h6 class="footer__title">Services</h6>
          <ul class="footer__list">
            <li class="footer__list-item">
              <a href="" class="footer__list-link">About</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">OwnerShip</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">Affiliates</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">Models</a>
            </li>
          </ul>
        </div>

        <div>
          <h6 class="footer__title">Education</h6>
          <ul class="footer__list">
            <li class="footer__list-item">
              <a href="" class="footer__list-link">About</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">Careers</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">Affiliates</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">Sitemap</a>
            </li>
          </ul>
        </div>

        <div>
          <h6 class="footer__title">Policy's</h6>
          <ul class="footer__list">
            <li class="footer__list-item">
              <a href="" class="footer__list-link">About</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">Careers</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">Affiliates</a>
            </li>
            <li class="footer__list-item">
              <a href="" class="footer__list-link">Sitemap</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
	</div>
  </footer>
</body>
</html>

<style>
.content {
	padding-bottom:0px !important;
}
#form111 {
                width:300px;
                margin:50px auto;
}
#search111{
                padding:8px 15px;
                background-color:#fff;
                border:0px solid #dbdbdb;
}
#button111 {
                position:relative;
                /* padding:6px 15px; */
                left:-8px;
                border:5px solid #ca072b;
                background-color:#ca072b;
                color:#fafafa;
}
#button111:hover  {
                background-color:#b70929;
                color:white;
}

</style>

<script src="js/auto-complete.js"></script>
 <link rel="stylesheet" href="css/auto-complete.css">
    <script>
        var demo1 = new autoComplete({
            selector: '#search111',
            minChars: 1,
            source: function(term, suggest){
                term = term.toLowerCase();
                <?php
						$qry2=mysqli_query($con,"select * from tbl_movie");
						?>
               var string="";
                <?php $string="";
                while($ss=mysqli_fetch_array($qry2))
                {
                
                $string .="'".strtoupper($ss['movie_name'])."'".",";
                //$string=implode(',',$string);
                
              
                }
                ?>
                //alert("<?php echo $string;?>");
              var choices=[<?php echo $string;?>];
                var suggestions = [];
                for (i=0;i<choices.length;i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });
    </script>