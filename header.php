  
<!--header -->
<nav>
    <style>
        body{
        margin: 0;
        padding: 0;
      }
        .card-row {
            display: flex;
            gap: 10px;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            margin-bottom: 4rem;
        }
        .card {
          background-color: wheat;
          border: 1px solid wheat;
          border-radius: 5px;
          padding: 20px;
          width: 280px;
        }
        
        .card .card-body {
          text-align: center;
        }
        
        .card .card-body .col-md-3 {
          margin-bottom: 20px;
        }
        
        .card .card-body .image-container {
          max-width: 150px;
          height: 150px;
          margin: 0 auto;
          border: 2px solid #eaeaea;
          margin-bottom: 10px;
          border-radius: 5px;
        }
        
        .card .card-body .image-container .img-fluid {
          width: 100%;
          height: 100%;
          border-radius: 999px;
        }

        .card .card-body .image-container {
            width: 100%;

        }
        
        
        .card .card-body :is(.card-text,.card-title) {
          margin-bottom: 10px;
          text-align: center;
        }
        
        .inner{
            display: flex;
            justify-content: space-around;
        
        }
        nav{
            background-color:black;
            height: 80px;
        }
        .logo{
            color: wheat;
            margin-top: 30px;
            font-size: 20px;
            
        }
        .links{
            color: wheat;
            margin-top: 20px; 
        }
        .st{
            color: wheat;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
        <div class="inner">
            <div class="logo">GODDIES</div>
            <div class="links">
               <a href="" class="st" >HOME</a>
                <a href="" class="st">ABOUT US</a>
                <a href="" class="st"class="show-time" onclick="showdate()">DATE</a>
                <a href="" class="st"class="blink" onclick="blinkpage()">BLINK</a>
            </div>
        </div>
    </nav>
<!-- End of header -->

<!-- jumbotron -->
<div class="jumbotron text-center" style="margin-left:40%;">
    <h1>WELCOME</h1>
    <h1>Click the login</h1>
</div>
<!-- End of jumbotron -->
