<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/detail.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        nav {
            background-color:black;
            color:rgb(255, 255, 255);
        }

        body {
            background-color: rgb(230, 230, 230);
        }

        #img1:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 20%;
            max-width: 100px;
            text-align: center;
            color: #ccc;
            background-color: rgba(0,0,0,0.9);
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {  
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: rgba(0,0,0,0.9);
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
        }

        /* Share Buttons */
        #share-container span {
            display: block;
            margin: 3rem auto;
            font-size: 50px;
            padding: 1rem;
            margin: 1rem;
        }
        #share-buttons i {
            font-size: 50px;
            margin-left: 30px;
            margin-top : 10px;
        }

        #share-buttons {
            background-color: white;
            width: 600px;
            height :300px;
            text-align: center;
            margin-top:100px;
            margin-left:-280px;
            margin-right:auto;
            border-radius:5px;
            position: fixed;
            z-index: 9999999;
            border:1px solid rgb(189, 189, 189);
            display: none;

        }

        .share-button2 {
            width:50px;
            height: 50px;
            font-size:20px;
            border-radius:50%;
            border:none;
            margin-top:-220px;
            margin-left: 400px;
            color:black;
            background-color:#ccc
        }
        .facebook {
            color: #3b5998;
        }
        .twitter {
            color: #55acee;
        }
        .linkedin {
            color: #0077b5;
        }
        .reddit {
            color: #cb2027;
        }
        .whatsapp {
            color: #25D366;
        }
        .telegram {
            color: #229ED9;
        }
        .facebook, .twitter, .linkedin, .reddit, .whatsapp, .telegram {
            opacity: 0.6;
        }
        .facebook:hover, .twitter:hover, .linkedin:hover, .reddit:hover, .whatsapp:hover, .telegram:hover {
            opacity: 0.9;
        }

        
    </style>

    <title>Detail</title>
</head>
<body>

    @include('partials.navbar')
    

    <div class="main mb-5">
        <div class="card-coba">
            <div class="card-img">
                @if($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid" id="img1">
                 @else
                    <img src="pd.jpg" alt="" class="img-fluid">
                @endif
            </div>

            <!--Modal-->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img src="modal-content" id="img01">
                <div id="caption"></div>
            </div>

            <div class="card-detail">
                <div class="download">
                </div>
                
                <h1>{{ $post->title }}</h1>
                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <div class="profile">
                    <div class="profile-img">
                        <img src="/img/user.jpg" alt="">
                    </div>
                    <h3>{{ $post->author->username }}</h3>
                </div>

                <div id="share-buttons">

                    <h2>Share</h2><hr>

                    <!-- facebook -->
                    <a class="facebook" target="blank"><i class="fab fa-facebook"></i></a>
                    
                    <!-- twitter -->
                    <a class="twitter" target="blank"><i class="fab fa-twitter"></i></a>
                    
                    <!-- linkedin -->
                    <a class="linkedin" target="blank"><i class="fab fa-linkedin"></i></a>
                    
                    <!-- reddit -->
                    <a class="reddit" target="blank"><i class="fab fa-reddit"></i></a>
                  
                    <!-- whatsapp-->
                    <a class="whatsapp" target="blank"><i class="fab fa-whatsapp"></i></a>
                  
                    <!-- telegram-->
                    <a class="telegram" target="blank"><i class="fab fa-telegram"></i></a>
                  
                </div>
                
                <button class="share-button2" id="coba">
                    <i class="fas fa-share-alt"></i>
                </button>

                <div class="card-comment">

                    <div class="comment">
                        <a href="{{ asset('storage/'.$post->image) }}" download="">
                            Download
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://http-127-0-0-1-8000-shaikw6k9o.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("img1");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<!--Javascript Link Share-->
<script>
    const  link = encodeURI(window.location.href);
    const msg = encodeURIComponent('Hey, Silahkan liat Assetku ! ');
    const title = encodeURIComponent(document.querySelector('title').textContent);

    console.log([link, msg, title]);

    const fb = document.querySelector('.facebook');
    fb.href = `https://www.facebook.com/share.php?u=${link}`;

    const twitter = document.querySelector('.twitter');
    twitter.href = `http://twitter.com/share?&url=${link}&text=${msg}&hashtags=Amikom,TugasAkhir`;

    const linkedIn = document.querySelector('.linkedin');
    linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;

    const reddit = document.querySelector('.reddit');
    reddit.href = `http://www.reddit.com/submit?url=${link}&title=${title}`;

    const whatsapp = document.querySelector('.whatsapp');
    whatsapp.href = `https://api.whatsapp.com/send?text=${msg}: ${link}`;

    const telegram = document.querySelector('.telegram');
    telegram.href = `https://telegram.me/share/url?url=${link}&text=${msg}`;
</script>

<script>
    const btn = document.querySelector('#coba');
    const container = document.querySelector('#share-buttons');

        coba.addEventListener("click", function() {
            if(container.style.display === "block") {
                container.style.display = "none";
            } else {
                container.style.display = "block";
            }
        });
</script>

</body>
</html>