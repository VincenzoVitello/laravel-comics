<div class="container_top_section">
    <div class="jumbo_container">

    </div>
    <div class="container_thumbnails">
        <div class="current_series">
            <p>current series</p>
          </div>
        <div class="thumbs_container">
          @foreach($comicsArray as $card)
          <div class="card">
              <img src="{{$card["thumb"]}}" alt="">
              <p>
                {{$card["series"]}}
            </p>
          </div>
          
          @endforeach
          <button class="button">Load More</button>
        </div>
    </div>
    <div class="blue_footer">
        
    </div>
</div>