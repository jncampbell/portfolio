<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ $image_1 }}" alt="{{ $alt_1 }}"/>
        </div>
        <div class="item">
            <img src="{{ $image_2 }}" alt="{{ $alt_2 }}"/>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>