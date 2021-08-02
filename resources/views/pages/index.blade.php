@extends('layouts.master')
@section('content')


<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #000000;
  padding: 8px;
    background-color: #000000;
    color:white;

}

#customers tr:nth-child(even){background-color: #000000;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}
</style>


    <!-- Header -->
    <header id="header" class="header" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large" style="color:white;">BayBlade Galleria Exclusive HighEnd NFT Club</h1>
                        <p class="p-large" style="color:white;">BayBlade is a high-end collection of the most rarest Blades, each with a unique design and power level. Each Blade is specifically crafted and minted with unique abilities. There will only be 100 BayBlades minted on the block chain, we are an exclusive community and every blade is valuable.</p>
                        <a class="btn-solid-lg" href="https://opensea.io/collection/bayblade">NFT Shop</a>
                        <a class="btn-solid-lg secondary" style="color:white;" href="https://t.me/joinchat/Wg4SFmpc0dwyZDFh">Telegram</a>
                        <br>
                        <a href="https://twitter.com/baybladetoken" target="_blank"><img  class="twitterimage"  src="images/twitter.png" height="50px" width="50px"  alt=""></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/cyberusred.gif" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Introduction -->
    <div class="basic-1" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p  style="color:white;">Each BayBlade NFT differs from the previous BayBlade in stats and other characteristic, minting only one copy of that specific bayblade for the general public.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of introduction -->


    <!-- Features -->
    <div id="features" class="cards-1"  style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="badge.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Edition</h5>
                            <p style="color:white;">There will be First and Second Edition BayBlade NFT's, Each Set Will Have 50 BayBlades Increasing The Rarity Of The Blade.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="type.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Type</h5>
                            <p style="color:white;"> Each BayBlade Has A Unique Type That Will Give To It Rarity</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="statone.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Stats</h5>
                            <p style="color:white;">Each BayBlade NFT Has Very Unique Stats To It That Drives Up The Value Of That BayBlade.</p>
                        </div>
                    </div>
                    <!-- end of card -->

               
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->


    <!-- Details 1 -->
    <div id="details" class="basic-2" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:white">Welcome To The Club</h2>
                        <p style="color:white;">When you buy a Bayblade NFT your buying a unique blade that will unlock different attributes in our community that only memebers will have access to, your BayBlade serves as your identity each blade is different and the combinations of Beast, Color, Edition, Specialty and Type. </p>
                        <!-- <p>We enjoy helping small and medium sized tech businesses take a shot at established Fortune 500 companies</p> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                    <img class="img-fluid" src="images/cyberusyellow.gif" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->



   

    <!-- Details 2 -->
    <div class="basic-3" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                    <img class="img-fluid" src="images/cyberusred.gif" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:white">Tokenomics</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">1,000,000,000,000,000 Total Supply</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">4% Redistribution Ethereum To Community Holders. <br>  Ethereum will be distrbuted every 60 min to holders</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">Dev Team: 8% </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">10% To Liqudity pool </div>
                            </li>

                            <li>
                            <div class="media-body" style="color:white">50% of the total supply will be burned before launch </div>

                            </li>
                        </ul>
  
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


    
    <!-- Pricing -->
    <div id="pricing" class="cards-2" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">RoadMap</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card" style="background-color:black;">
                        <div class="card-body">
                            <div class="card-title">Phase 1</div>
                            <ul class="list-unstyled li-space-lg">
                           
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Release 1st Edition BayBlade NFT's </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">1000 Holders</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">2,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">1 Million MarketCap</div>
                                </li>

                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Marketing Campaign</div>
                                </li>
                            </ul>
                         
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card" style="background:black;">
                        <div class="card-body">
                            <div class="card-title">Phase 2</div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Release 2nd Edition BayBlade NFT's</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">5,000 Holders</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">10,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">5 Million MarketCap</div>
                                </li>

                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Coingecko and CoinMarketcap</div>
                                </li>
                            </ul>
                           
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card" style="background:black;">
                        <div class="card-body">
                            <div class="card-title">Phase 3</div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Release 3rd Edition BayBlade NFT's</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">10,000 Holders</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">15,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;"> 8 Million MarketCap</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;"> Cex and Dex </div>
                                </li>
                            </ul>
                           
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->



<!-- <table id="customers">
  <tr>
    <th>BayBlade</th>
    <th></th>
    <th>Country</th>
  </tr>
  <tr>
    <td>  <img class="img-fluid" src="images/cyberusyellow.gif" height="200px" width="200px" alt="alternative"></td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
 
</table> -->



@endsection