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
        <div class="blue_cards_container">
            <div class="blue_footer_card">
                <img src="{{asset("images/buy-comics-digital-comics.png")}}" alt="">
                <span>Digital comics</span>
            </div>
            <div class="blue_footer_card">
                <img src="{{asset("images/buy-comics-merchandise.png")}}" alt="">
                <span>Merchandise</span>
            </div>
            <div class="blue_footer_card">
                <img src="{{asset("images/buy-comics-subscriptions.png")}}" alt="">
                <span>Subscriptions</span>
            </div>
            <div class="blue_footer_card">
                <img src="{{asset("images/buy-comics-shop-locator.png")}}" alt="">
                <span>Shop Locator</span>
            </div>
            <div class="blue_footer_card">
                <img src="{{asset("images/buy-dc-power-visa.svg")}}" alt="">
                <span>DC power visa</span>
            </div>
        </div>
    </div>
</div>