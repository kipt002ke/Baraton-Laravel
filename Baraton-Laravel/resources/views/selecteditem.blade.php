<!DOCTYPE html>
<html lang="en">
<head>
   <title>Listing</title>

    <link href="/css/fontawesome.min.css"  rel="stylesheet">
    <link  href="/css/listings.css"  rel="stylesheet">
    <link  href="/css/all.css"  rel="stylesheet">
    <link href="/css/all.min.css"  rel="stylesheet">

</head>
<body>
    <div class="navbar">
        <a href="/"><img src="/images/logo3.png" title="BARA-C RENTALS"  class="logo"/></a>
        <div class="links">

        </div>
    </div>
    @foreach ($selected_item['data'] as $item)
    <div class="heading">
        <h2>{{ $item->propertyname }}</h2>
    </div>
    <div class="container">
        <div class="title">
            <h2>{{ $item->Room_Type }}</h2>
        </div>
        <div class="content">
           <div class="main-image">
            <?php $img=json_decode($item->images) ?>
            {{-- <img src="{{ asset('/uploads/'.$img[0])}}" alt=" " class="img-responsive" /> --}}
            <img src="{{ asset('/uploads/'.$img[0])}}" alt="SAMPLE IMAGE" >
           </div>
            <div class="description">
                <h3>Vacancies: 1 </h3>
                <h3>Rental Cost: Ksh {{ number_format($item->cost) }} </h3>
                <h3>Additional Costs: none</h3>
                <h3>Contact: {{ $item->contact }}</h3>
                {{-- <h3>Facilities</h3> --}}
                {{-- <ul>
                    <li><i class="fas fa-bed"></i>Bedrooms:  </li>
                    <li><i class="fas fa-tshirt"></i></i>Wardobe:  </li>
                    <li><i class="fas fa-shower"></i>Bathroom:  </li>
                    <li><i class="fas fa-toilet"></i>Washroom:  </li>
                    <li><i class="fas fa-faucet"></i>Water:  </li>
                    <li><i class="fas fa-fire"></i>Kitchenett:  </li>
                    <li><i class="fas fa-sink"></i>Sink:  </li>
                    <li><i class="fas fa-lightbulb"></i>Electricity:  </li>
                    <li><i class="fas fa-wifi"></i>WiFi:  </li>
                </ul> --}}

                {{-- <h3>Description/ More Info</h3> --}}
                {{-- <p class="p">A short description of the listing and any additional information....</p> --}}

                {{-- <button type="button" class="btn btn-success"> {{ $item->contact }}</button> --}}

            </div>
        </div>
@endforeach
        <div class="samples">
            <?php    foreach (json_decode( $item->images) as $image) { ?>

            <img src="{{ asset('/uploads/'.$image) }}" alt="SAMPLE IMAGE" class="sample-image">
            <?php }   ?>
        </div>
    </div>

    <div class="copy">
        <p>© <?php echo date('Y') ?> BARATON . All Rights Reserved | Design by <a href="index.php">Emmanuel Kiptoo And Kelvin Agoi</a> </p>
    </div>
</body>

</html>
