
.article .article-product {
color: darkorange;
}

.article-slide {
    	width: 600px;
        height: 420px;
        
        overflow: hidden;
    }
    .image-holder
        {
            width: 3500px;
            background-color: red;
            height: 400px;
            clear: both;
            position: relative;
            transition: left 2s;
        }
    .slider-image {
		object-fit: cover;
      float: left;
            margin: 0px;
            padding: 0px;
        width: 600px;
        height: 400px;
        position: relative;
        
	}
    .button-holder {
    	margin-left: 40%;
        z-index: 100;
    }
    .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
        }
       #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-2:target ~ .image-holder
        {
            left: -600px;
        }
        
        #slider-image-3:target ~ .image-holder
        {
            left: -1200px;
        }

#slider-image-4:target ~ .image-holder
        {
            left: -1800px;
        }

#slider-image-5:target ~ .image-holder
        {
            left: -2400px;
        }