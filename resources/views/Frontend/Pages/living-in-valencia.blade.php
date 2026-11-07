    @extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Living in Valencia',
        'page' => 'Living in Valencia'    
    ])

    <!-- tution fee -->
        <div class="page-content-top pt--120 pt__md--80">
            <div class="container">
                <div class="row">
                    <h3 class="rts-section-title">Living in Valencia</h3>
                    <p class="desc">Valencia is one of Europe's most liveable cities: sunny almost all year, close to the sea,
                    easy to get around and more affordable than Madrid or Barcelona. This guide brings
                    together practical information to help you plan your move: where to live, how to find
                    accommodation, what things cost, how to get around and what to do in your first weeks.
                        
                    <p class="desc">If you have questions while you plan, our team is happy to point you in the right direction.</p>
                    <h5>Where to live</h5>
                    <p class="desc">Our campus is in Paterna, a short walk from the metro. Many students choose to live
                    either close to the campus or in Valencia along the metro network, so they can enjoy city
                    life and still reach class easily. Before you decide, check your journey time with the
                    <a href="https://www.metrovalencia.es/" style="color: #c80a1e;" target="_blank">Metrovalencia route planner</a>.</p>
                </div>
            </div>
        </div>
        <div class="semister-fee pb--60">
            <div class="container">
                <div class="row">
                    <div class="semister-fee__content">
                        <!-- tab item -->                       
                            <div class="rts-fee-chart__content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <th>Area</th>
                                                <th>What it's like</th>
                                                <th>Good for</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Paterna</td>
                                                <td>Calm and residential, with green spaces like Parque Central and everyday shops and services
                                                </td>
                                                <td>A short commute and a quieter routine
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Burjassot
                                                </td>
                                                <td>A lively student town next to a large university campus, with plenty of shared flats</td>
                                                <td>Living among other students</td>
                                            </tr>
                                            <tr>
                                                <td>Campanar and Benicalap</td>
                                                <td>Modern residential areas in the north-west of Valencia, between the city centre and Paterna</td>
                                                <td>Easy access to both the campus and the city</td>
                                            </tr>
                                       
                                        <tr>
                                            <td>Benimaclet
                                            </td>
                                            <td>A village-like neighbourhood with a strong student community, bars and cafés</td>
                                            <td>A social, student atmosphere</td>
                                        </tr>
                                        <tr>
                                            <td>Ciutat Vella and Ruzafa</td>
                                            <td>The historic centre and Valencia's trendiest area, full of restaurants and nightlife</td>
                                            <td>Being at the heart of everything (but higher rents)</td>
                                        </tr>
                                    
                                        <tr>
                                            <td>El Cabanyal</td>
                                            <td>The old fishermen's quarter, next to the beach</td>
                                            <td>Beach lovers who don't mind a longer commute</td>
                                        </tr>
                                     
                                    </tbody>
                                    </table>
                                </div>
                   
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
        <div class="page-content-top">
            <div class="container">
                <div class="row">
                     <h5>Finding accommodation</h5>
                    <p class="desc">NOVUS does not provide accommodation, but these tips will help you find a place that
                    suits you. Start looking early: demand is high, especially before September and January.</p>
                    <!-- <h5>Finding accommodation</h5> -->
                </div>
            </div>
        </div>
        <div class="semister-fee pb--60">
            <div class="container">
                <div class="row">
                    <div class="semister-fee__content ">
                        <!-- tab item -->                       
                            <div class="rts-fee-chart__content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                                      <h5 class="pb--20">Types of accommodation</h5>
                                 <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <th>Option</th>
                                                <th>Typical monthly cost*</th>
                                                <th>Good to know</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Room in a shared flat</td>
                                                <td>About €400–550</td>
                                                <td>The most popular choice for students; bills are often extra</td>
                                            </tr>
                                            <tr>
                                                <td>Student residence</td>
                                                <td>From about €600</td>
                                                <td>Usually includes bills, cleaning and common areas; book well in advance</td>
                                            </tr>
                                            <tr>
                                                <td>Studio</td>
                                                <td>About €600–800</td>
                                                <td>More privacy, but fewer options and higher cost</td>
                                            </tr>
                                       
                                        <tr>
                                            <td>Homestay</td>
                                            <td>Varies</td>
                                            <td>Living with a local family; a great way to practise Spanish</td>
                                        </tr>
                                      
                                     
                                    </tbody>
                                    </table>
                                </div>
                        <p class="desc">*Approximate prices for Valencia, based on idealista, Fotocasa and student
                        accommodation listings in 2024–2026. Areas outside the centre, like Paterna or Burjassot,
                        are often cheaper.</p>
                     <h5 class="pb--10">Where to look</h5>
                        <div class="check-area-details">
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Property portals: idealista, Fotocasa, Habitaclia</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Room and student platforms: Badi, Spotahome, Uniplaces, Housing Anywhere</span>
                                    </div>
                                  
                                      <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Facebook groups for flat shares in Valencia</span>
                                    </div>
                                </div>

                                <h5 class="pt--10">Contracts and deposits</h5>
                                <div class="check-area-details">
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>For a flat rented as your main home, the legal deposit (fianza) is one month's rent.
                                        Landlords can ask for an extra guarantee, but the total should not exceed three
                                         months' rent.</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>For flats, agency fees are paid by the landlord, not the tenant.</span>
                                    </div>
                                  
                                      <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Room rentals and short-term contracts follow different rules, so always read the
                                        contract carefully and ask what's included (bills, internet, cleaning).</span>
                                    </div>
                                     <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Always get a written contract and a receipt for every payment.</span>
                                    </div>
                                </div>

                                <h5 class="pt--10">Avoiding scams</h5>
                                <div class="check-area-details">
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Never pay a deposit before seeing the property, in person or on a live video call.</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Be careful with prices that look too good to be true, or landlords who say they're
                                        abroad and can't show the flat.</span>
                                    </div>
                                  
                                      <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Pay by bank transfer to an account in the landlord's name, never by money transfer
                                        services or in cash without a receipt.</span>
                                    </div>
                                     <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>If you're not sure, ask us: we're happy to give you a second opinion.</span>
                                    </div>
                                </div>
                                    <p class="desc pt--10"><strong>Arriving before you find a place?</strong> Many students book a hostel or short-term rental for
                                    their first one or two weeks and visit flats in person once they arrive.</p>
                            
                            
                             <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                                      <h5 class="pb--20">Cost of living</h5>
                                      <p class="desc pt--10">Most students in Valencia spend around €850–1,200 a month, depending on where they
                                        live and their lifestyle. Here's an approximate monthly budget for a student sharing a flat:</p>
                                 <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <th>Expense</th>
                                                <th>Approximate monthly cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Room in a shared flat</td>
                                                <td>€400–550</td>
                                            </tr>
                                            <tr>
                                                <td>Bills (your share of electricity, water,internet)</td>
                                                <td>€40–70</td>
                                            </tr>
                                            <tr>
                                                <td>Groceries</td>
                                                <td>€200–300</td>
                                            </tr>
                                       
                                          <tr>
                                            <td>Public transport</td>
                                            <td>€20–45 (free or discounted passes may be available for under-31s)</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile phone plan</td>
                                            <td>€8–15</td>

                                        </tr>
                                        <tr>
                                            <td>Leisure and eating out</td>
                                            <td>€100–150</td>

                                        </tr>
                                        <tr>
                                            <td>Gym (optional)</td>
                                            <td>€20–40</td>
                                        </tr>                                      
                                     
                                    </tbody>
                                    </table>
                                </div>
                              <p class="desc pt--10">Figures are estimates based on 2026 cost-of-living data for Valencia and will vary.
                                Shopping at local markets and cooking at home can lower your budget considerably.</p>

                            <p class="desc pt--10"><strong>One-off costs to plan for:</strong> your rental deposit (usually one month's rent), health insurance
                            if you need it, a transport card and your residence card fees if applicable.</p>
                            </div>
                            <div class="rts-event-details pt--50">
                        <div class="container">
                            <div class="row justify-content-md-center justify-content-start">
                                <div class="col-lg-12 col-md-12">
                                            <div class="event-details">
                                <div class="event-details__content">
                            
                                    <div class="event-details__content--text">
                                        <div class="rts-section">
                                            <h4 class="rts-section-title">Getting around</h4>
                                            <p class="description">Valencia is flat, compact and easy to explore. Our campus in Paterna is a short walk from
                                    the metro, which connects you to the city centre and the rest of the network.</p>
                                </div>
                            </div>
                            <div class="event-details__content--feature">
                                <!-- single feature -->
                                <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">Metro and tram (Metrovalencia):</p>
                                    <p class="feature-description">the quickest way to reach the campus and get
                                    around the city. Single tickets start at €1.50, loaded onto a rechargeable card (€1.10 for
                                    the cardboard card). If you travel every day, a monthly pass is much better value.</p>
                                    </div>

                                  <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">Youth pass:</p>
                                    <p class="feature-description">young people under 31 have been able to get a free or discounted youth
                                    travel pass (SUMA Jove) for metro, tram and buses. Check the current conditions on
                                    the Metrovalencia website when you arrive.</p>
                                </div>

                                  <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">Buses (EMT):</p>
                                    <p class="feature-description">cover the whole city, including areas the metro doesn't reach.
                                    Valenbisi: Valencia's public bike system, with stations all over the city and an annual
                                    subscription. With its many cycle lanes and the Turia Gardens running through the
                                    city, cycling is one of the nicest ways to get around.</p>
                                </div>

                                  <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">From the airport:</p>
                                    <p class="feature-description">metro lines 3 and 5 connect the airport to the city in about 20
                                    minutes. The airport has its own fare zone, so the ticket costs more (€4.80 for a
                                    single). If you arrive with heavy luggage, a taxi is a good option: the airport is close to
                                    Paterna, and a taxi there usually costs around €20–30 (around €25–30 to the city
                                    centre). Taxis from the airport include a €5.40 supplement and have a minimum fare of
                                    €12.50, and night, weekend and holiday rates are a little higher. Use the official taxi
                                    rank outside arrivals.</p>
                                </div>

                               <p class="desc pt--10">Useful apps: Metrovalencia and EMT València for routes and times, and Google Maps for
                                public transport directions.</p>
                                <p class="desc pt--10">Fares checked in 2026; please confirm current prices on <a style="color: #c80a1e;" href="https://www.metrovalencia.es/" target="_blank">metrovalencia.es</a> before you
                                travel.</p>
                            </div>
                        </div>
                    </div>
                    <article class="blog-details pt--50">
                  
                        <h3 class="sub-title">Your first steps</h3>
                        <p>We'll guide you through these during your welcome and orientation week.</p>
                        <div class="row mb-5 align-items-center">
                        <p class="desc">1. <strong>Register at the town hall (empadronamiento).</strong> Once you have an address, register at
                        the town hall (ayuntamiento) where you live. It's free, and you'll usually need your
                        passport and rental contract. Your registration certificate is often needed for other
                        paperwork.</p>   
                        <p class="desc">2. <strong>Get your residence documents.</strong> Non-EU students staying more than six months: apply for your foreign national
                        identity card (TIE) at the police station within one month of arriving in Spain. You'll
                        need an appointment (cita previa).<br>EU students staying more than three months: register at the Central Register of
                        Foreign Nationals to get your EU registration certificate.</p>   
                       <p class="desc">3. <strong>Get a Spanish phone number.</strong> You can buy a prepaid SIM with your passport at any
                        phone shop. Monthly plans with plenty of data start from around €8.</p>  
                        <p class="desc">4. <strong>Open a bank account.</strong>Many Spanish and online banks let you open an account with
                        your passport. A local account makes it easier to pay rent and bills.</p>  
                        <p class="desc">5. <strong>Check your health cover.</strong>EU students can use their European Health Insurance Card
                        (EHIC). Non-EU students need private health insurance, which is also required for a
                        study visa.</p>  
                        <p>Requirements can change; always check the official information for your situation.</p>
                        
                        </div>
                   <h5 class="pt--10">Useful information</h5>
                   <h6><strong>Emergency numbers</strong></h6>
                                <div class="check-area-details">
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>112: all emergencies (police, ambulance, fire), free, with operators who speak English</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>091: National Police</span>
                                    </div>
                                  
                                      <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>092: Local Police</span>
                                    </div>
                            
                                </div>
                                <h6 class="pt--10"><strong>Healthcare</strong></h6>
                                <p class="desc">For urgent care, go to the emergency department (urgencias) of the nearest hospital or
                                    health centre. Pharmacies (farmacias) are easy to find, and there is always one open late
                                    or overnight in each area (farmacia de guardia).</p>
                                <h6 class="pt--10"><strong>Everyday life</strong></h6>   
                                <div class="check-area-details">
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Many shops close in the afternoon for a few hours, and on Sundays most are closed.</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Lunch is usually between 2 and 4 pm, and dinner from 9 pm.</span>
                                    </div>
                                  
                                      <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Valencian (valencià) is spoken alongside Spanish, so you'll see both languages on signs.</span>
                                    </div>
                                  <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>The weather is mild most of the year, but summers are hot and humid, so plan for air conditioning or a fan.</span>
                                    </div>
                                   </div>
                                    <p class="desc pt--20"><strong>Questions?</strong> Our team is happy to help you with anything as you settle in. Contact us at info@novuseducation.es</p>
                        

                                
                    </article>
                    
                </div>
            
            </div>
         
        </div>
    </div>
                        </div>
                        
                    </div>
               
                </div>
            </div>
        </div>
    <!-- tution fee end -->
     
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection