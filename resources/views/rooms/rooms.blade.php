@extends('partials.nav_side')


@section('page_title', 'Gestion des pieces')

@section('css')
    <link rel="stylesheet" href="./css/plan_ch.css"/>

@stop

@section('content')


    <div class="row">
        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card">

                <div class="card-body align-content-center text-center map">
                    {{--<div id="mapid">--}}
                    <svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                         y="0px" viewBox="0 0 740 458" xml:space="preserve">


 <svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 700 720" xml:space="preserve"><metadata
         id="metadata8"><rdf:RDF><cc:Work
                 rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
                     rdf:resource="http://purl.org/dc/dcmitype/StillImage" /></cc:Work></rdf:RDF></metadata><defs
         id="defs6"><clipPath
             id="clipPath18"
             clipPathUnits="userSpaceOnUse"><path
                 id="path16"
                 d="M 0,791 H 4686 V 5383 H 0 V 791" /></clipPath><clipPath
             id="clipPath262"
             clipPathUnits="userSpaceOnUse"><path
                 id="path260"
                 d="M 0,791 H 4686 V 5383 H 0 V 791" /></clipPath><clipPath
             id="clipPath274"
             clipPathUnits="userSpaceOnUse"><path
                 id="path272"
                 d="M 0,791 H 4686 V 5383 H 0 V 791" /></clipPath></defs><g
         transform="matrix(0.16,0,0,-0.16,-50,850)"
         id="g10"><g
             id="g12"><g clip-path="url(#clipPath18)" id="g14"><g id="g20">
                     <path
                         id="path22"
                         style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.25;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="m 4685,5318 h -138 l 138,-138 z m -138,0 138,-138 h -138 z" /></g><g
                     id="g24"><path
                         id="path26"
                         style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.25;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M 4547,5318 H 482 l 4065,-138 z m -4065,0 4065,-138 H 482 Z" /></g><g
                     id="g28"><path
                         id="path30"
                         style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.25;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M 482,5318 H 343 l 139,-138 z m -139,0 139,-138 H 343 Z" /></g><g
                     id="g32"><path
                         id="path34"
                         style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.25;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M 482,5180 H 343 L 482,1899 Z m -139,0 139,-3281 H 343 Z" /></g><g
                     id="g36"><path
                         id="path38"
                         style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.25;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M 482,1899 H 343 l 139,-138 z m -139,0 139,-138 H 343 Z" /></g><g
                     id="g40"><path
                         id="path42"
                         style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.25;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M 4685,5180 H 4547 L 4685,929 Z m -138,0 138,-4251 h -138 z" /></g><g
                     id="g44">
                     <rect xmlns="http://www.w3.org/2000/svg" id="ch_1" x="485" y="1800" class="chambre" fill="none" width="1290" height="2100"/>
                     <path
                         id="path46"
                         style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.25;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="m 4685,929 h -138 l 138,-138 z m -138,0 138,-138 h -138 z" /></g>

                 <rect xmlns="http://www.w3.org/2000/svg" id="ch_5" x="485" y="1800" class="chambre" fill="none" width="1290" height="2100"/>
                 <rect xmlns="http://www.w3.org/2000/svg" id="ch_4" x="485" y="3930" class="chambre" fill="none" width="1290" height="1250"/>
                 <rect xmlns="http://www.w3.org/2000/svg" id="ch_3" x="1820" y="4300" class="chambre" fill="none" width="1335" height="880"/>
                 <rect xmlns="http://www.w3.org/2000/svg" id="ch_2" x="3210" y="3930" class="chambre" fill="none" width="1330" height="1250"/>
                 <rect xmlns="http://www.w3.org/2000/svg" id="ch_1" x="3210" y="2685" class="chambre" fill="none" width="1330" height="1200"/>
                 <rect xmlns="http://www.w3.org/2000/svg" id="cuisine" x="2980" y="1800" class="chambre" fill="none" width="1560" height="830"/>
                 <rect xmlns="http://www.w3.org/2000/svg" id="sejour_1" x="1820" y="1800" class="chambre" fill="none" width="1100" height="885"/>
                 <rect xmlns="http://www.w3.org/2000/svg" id="sejour_2" x="1820" y="2685" class="chambre" fill="none" width="1335" height="1565"/>
                 <rect xmlns="http://www.w3.org/2000/svg" id="wc" x="2610" y="835" class="chambre" fill="none" width="1930" height="920"/>
                 <path id="path48"
                       style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                       d="M 343,5180 H 4685" /><path
                     id="path50"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 343,5318 H 4685" /><path
                     id="path52"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 1775,4256 H 2868" /><path
                     id="path54"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3131,4256 h 76" /><path
                     id="path56"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 1821,4302 H 2838" /><path
                     id="path58"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 482,3932 H 1821" /><path
                     id="path60"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 482,3886 H 1821" /><path
                     id="path62"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 3161,3932 H 4547" /><path
                     id="path64"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 3161,3886 H 4547" /><path
                     id="path66"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2930,2685 h 231" /><path
                     id="path68"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 3207,2685 H 4547" /><path
                     id="path70"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 2976,2639 H 4547" /><path
                     id="path72"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 343,1761 H 1852" /><path
                     id="path74"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 343,1899 H 482" /><path
                     id="path76"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2114,1761 h 446" /><path
                     id="path78"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 2930,1761 H 4547" /><path
                     id="path80"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 482,1807 H 1775" /><path
                     id="path82"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2145,1807 h 492" /><path
                     id="path84"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2900,1807 h 30" /><path
                     id="path86"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 2976,1807 H 4547" /><path
                     id="path88"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 4547,5318 V 791" /><path
                     id="path90"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 4685,5318 V 791" /><path
                     id="path92"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 4547,837 H 2607" /><path
                     id="path94"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 4685,791 H 2560" /><path
                     id="path96"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 4685,929 H 4547" /><path
                     id="path98"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 482,1761 V 5318" /><path
                     id="path100"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 343,1761 V 5318" /><path
                     id="path102"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1821,3856 v 107" /><path
                     id="path104"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1821,4225 v 31" /><path
                     id="path106"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1821,4302 v 878" /><path
                     id="path108"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 1775,1807 V 3563" /><path
                     id="path110"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 1821,1761 V 3563" /><path
                     id="path112"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1775,4256 v 924" /><path
                     id="path114"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3207,2685 v 878" /><path
                     id="path116"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3207,4256 v 924" /><path
                     id="path118"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3161,2685 v 908" /><path
                     id="path120"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3161,3856 v 107" /><path
                     id="path122"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3161,4225 v 955" /><path
                     id="path124"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2976,1807 v 414" /><path
                     id="path126"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2976,2544 v 95" /><path
                     id="path128"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2930,1761 v 490" /><path
                     id="path130"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2930,2514 v 171" /><path
                     id="path132"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2607,837 v 970" /><path
                     id="path134"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2560,791 v 970" /><path
                     id="path136"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3131,4256 v 13 h 8 v 17 h 22 v -30 h -30" /><path
                     id="path138"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2868,4256 v 13" /><path
                     id="path140"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2868,4269 h -9 v 17 h -21 v -30 h 30" /><path
                     id="path142"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 3119,4589 V 4286" /><path
                     id="path144"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3119,4286 h 20 v 303" /><path
                     id="path146"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3139.6272,4589.4624 c -159.269,-9.5855 -282.6169,-143.1099 -279.573,-302.6382" /><path
                     id="path148"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3161,3963 h 13 v -9 h 17 v -22 h -30 v 31" /><path
                     id="path150"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3161,4225 h 13" /><path
                     id="path152"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3174,4225 v 9 h 17 v 22 h -30 v -31" /><path
                     id="path154"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 3494,3974 H 3191" /><path
                     id="path156"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3191,3974 v -20 h 303" /><g
                     transform="rotate(-90,3567,369.5)"
                     id="g158"><path
                         id="path160"
                         style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M -17.87281,296.96265 C -177.14197,287.37698 -300.48984,153.85269 -297.44586,-5.67562" /></g><path
                     id="path162"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1821,3963 h -13 v -9 h -17 v -22 h 30 v 31" /><path
                     id="path164"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1821,4225 h -13" /><path
                     id="path166"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1808,4225 v 9 h -17 v 22 h 30 v -31" /><path
                     id="path168"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1488,3974 h 303" /><path
                     id="path170"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1791,3974 v -20 h -303" /><g
                     transform="rotate(90,-1075.5,2861)"
                     id="g172"><path
                         id="path174"
                         style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M 297.44586,-5.67562 C 300.48984,153.85269 177.14197,287.37698 17.87281,296.96265" /></g><path
                     id="path176"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1821,3856 h -13 v 8 h -17 v 22 h 30 v -30" /><path
                     id="path178"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1821,3593 h -13" /><path
                     id="path180"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1808,3593 v -9 h -17 v -21 h 30 v 30" /><path
                     id="path182"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1488,3844 h 303" /><path
                     id="path184"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1791,3844 v 20 h -303" /><g
                     transform="rotate(90,-1048.5,2834)"
                     id="g186"><path
                         id="path188"
                         style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M -17.87281,296.96265 C -177.14197,287.37698 -300.48984,153.85269 -297.44586,-5.67562" /></g><path
                     id="path190"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3161,3856 h 13 v 8 h 17 v 22 h -30 v -30" /><path
                     id="path192"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3161,3593 h 13" /><path
                     id="path194"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3174,3593 v -9 h 17 v -21 h -30 v 30" /><path
                     id="path196"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 3494,3844 H 3191" /><path
                     id="path198"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3191,3844 v 20 h 303" /><g
                     transform="rotate(-90,3540,342.5)"
                     id="g200"><path
                         id="path202"
                         style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M 297.44586,-5.67562 C 300.48984,153.85269 177.14197,287.37698 17.87281,296.96265" /></g><path
                     id="path204"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2930,2251 h 13 v -8 h 17 v -22 h -30 v 30" /><path
                     id="path206"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2930,2514 h 13" /><path
                     id="path208"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2943,2514 v 9 h 17 v 21 h -30 v -30" /><path
                     id="path210"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 3263,2263 H 2960" /><path
                     id="path212"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2960,2263 v -20 h 303" /><g
                     transform="rotate(-90,2596,-370.5)"
                     id="g214"><path
                         id="path216"
                         style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M -17.87281,296.96265 C -177.14197,287.37698 -300.48984,153.85269 -297.44586,-5.67562" /></g><path
                     id="path218"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2637,1807 v -13 h -9 v -17 h -21 v 30 h 30" /><path
                     id="path220"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2900,1807 v -13" /><path
                     id="path222"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2900,1794 h 8 v -17 h 22 v 30 h -30" /><path
                     id="path224"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2649,1473 v 304" /><path
                     id="path226"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2649,1777 h -21 v -304" /><g
                     transform="rotate(180,1305.25,885.75)"
                     id="g228"><path
                         id="path230"
                         style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                         d="M -17.87281,296.96265 C -177.14197,287.37698 -300.48984,153.85269 -297.44586,-5.67562" /></g><path
                     id="path232"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1852,1761 v 13 h -9 v 17 h -22 v -30 h 31" /><path
                     id="path234"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2114,1761 v 13" /><path
                     id="path236"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2114,1774 h 9 v 17 h 22 v -30 h -31" /><path
                     id="path238"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="M 1863,2094 V 1791" /><path
                     id="path240"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1863,1791 h -20 v 303" /><path
                     id="path242"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2122.9458,1791.8243 c 3.044,159.5284 -120.3038,293.0527 -279.573,302.6384" /><path
                     id="path244"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2838,4256 v 46" /><path
                     id="path246"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3161,3563 h 46" /><path
                     id="path248"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1821,3563 h -46" /><path
                     id="path250"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2930,2544 h 46" /><path
                     id="path252"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2930,2221 h 46" /><path
                     id="path254"
                     style="fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2145,1761 v 46" /></g></g><g
             id="g256"><g
                 clip-path="url(#clipPath262)"
                 id="g258"><text
                     id="text266"
                     style="font-variant:normal;font-weight:normal;font-size:1.579px;font-family:Verdana;-inkscape-font-specification:Verdana;writing-mode:lr-tb;fill:#7fbfff;fill-opacity:1;fill-rule:nonzero;stroke:none"
                     transform="matrix(1,0,0,-1,2214,2940)"><tspan
                         id="tspan264"
                         y="0"
                         x="0 0.82265902 1.771638 2.204284 2.63693 3.5780139 4.133822 5.1175389 5.5422902 6.4912691 7.1655021 7.9881611 8.987668 9.4203138 10.355082">salle d'archive</tspan></text>
             </g></g><g
             id="g268"><g
                 clip-path="url(#clipPath274)"
                 id="g270"><path
                     id="path276"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1072,2927 -1,4 -4,3 -3,2 h -8 l -3,-2 -4,-3 -1,-4 -2,-5 v -9 l 2,-5 1,-4 4,-3 3,-2 h 8 l 3,2 4,3 1,4" /><path
                     id="path278"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1083,2899 v 37" /><path
                     id="path280"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1108,2936 v -37" /><path
                     id="path282"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1083,2918 h 25" /><path
                     id="path284"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1122,2899 14,37 14,-37" /><path
                     id="path286"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1127,2911 h 17" /><path
                     id="path288"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1160,2899 v 37 l 14,-37 14,37 v -37" /><path
                     id="path290"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1218,2918 6,-1 1,-2 2,-4 v -5 l -2,-4 -1,-1 -6,-2 h -15 v 37 h 15 l 6,-2 1,-2 2,-3 v -4 l -2,-3 -1,-2 -6,-2 h -15" /><path
                     id="path292"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1239,2899 v 37 h 16 l 6,-2 1,-2 2,-3 v -4 l -2,-3 -1,-2 -6,-2 h -16" /><path
                     id="path294"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1252,2918 12,-19" /><path
                     id="path296"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1276,2899 v 37 h 23" /><path
                     id="path298"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1276,2918 h 15" /><path
                     id="path300"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1276,2899 h 23" /><path
                     id="path302"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1354,2936 -5,-2 -4,-5 -2,-9 v -5 l 2,-9 4,-5 5,-2 h 3 l 6,2 3,5 2,9 v 5 l -2,9 -3,5 -6,2 h -3" /><path
                     id="path304"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1400,2936 h -18 l -2,-16 2,2 5,2 h 6 l 5,-2 3,-4 2,-5 v -4 l -2,-5 -3,-3 -5,-2 h -6 l -5,2 -2,1 -1,4" /><path
                     id="path306"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 945,4628 -2,4 -3,3 -4,2 h -7 l -3,-2 -4,-3 -2,-4 -1,-5 v -9 l 1,-5 2,-4 4,-3 3,-2 h 7 l 4,2 3,3 2,4" /><path
                     id="path308"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 956,4600 v 37" /><path
                     id="path310"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 980,4637 v -37" /><path
                     id="path312"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 956,4619 h 24" /><path
                     id="path314"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 994,4600 14,37 14,-37" /><path
                     id="path316"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1000,4612 h 17" /><path
                     id="path318"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1033,4600 v 37 l 14,-37 14,37 v -37" /><path
                     id="path320"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1091,4619 5,-1 2,-2 2,-4 v -5 l -2,-3 -2,-2 -5,-2 h -16 v 37 h 16 l 5,-2 2,-1 2,-4 v -4 l -2,-3 -2,-2 -5,-2 h -16" /><path
                     id="path322"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1112,4600 v 37 h 16 l 5,-2 2,-1 2,-4 v -4 l -2,-3 -2,-2 -5,-2 h -16" /><path
                     id="path324"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1125,4619 12,-19" /><path
                     id="path326"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1149,4600 v 37 h 23" /><path
                     id="path328"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1149,4619 h 14" /><path
                     id="path330"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1149,4600 h 23" /><path
                     id="path332"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1227,4637 -6,-2 -3,-5 -2,-9 v -5 l 2,-9 3,-5 6,-2 h 3 l 5,2 4,5 2,9 v 5 l -2,9 -4,5 -5,2 h -3" /><path
                     id="path334"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 1269,4600 v 37 l -18,-25 h 27" /><path
                     id="path336"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3726,3323 -2,4 -3,3 -4,2 h -7 l -3,-2 -4,-3 -2,-4 -2,-5 v -9 l 2,-5 2,-4 4,-3 3,-2 h 7 l 4,2 3,3 2,4" /><path
                     id="path338"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3736,3295 v 37" /><path
                     id="path340"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3761,3332 v -37" /><path
                     id="path342"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3736,3314 h 25" /><path
                     id="path344"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3775,3295 14,37 14,-37" /><path
                     id="path346"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3780,3307 h 18" /><path
                     id="path348"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3814,3295 v 37 l 14,-37 14,37 v -37" /><path
                     id="path350"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3872,3314 5,-1 2,-2 2,-4 v -5 l -2,-4 -2,-1 -5,-2 h -16 v 37 h 16 l 5,-2 2,-2 2,-3 v -4 l -2,-3 -2,-2 -5,-2 h -16" /><path
                     id="path352"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3893,3295 v 37 h 16 l 5,-2 2,-2 2,-3 v -4 l -2,-3 -2,-2 -5,-2 h -16" /><path
                     id="path354"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3905,3314 13,-19" /><path
                     id="path356"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3930,3295 v 37 h 23" /><path
                     id="path358"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3930,3314 h 14" /><path
                     id="path360"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3930,3295 h 23" /><path
                     id="path362"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 4007,3332 -5,-2 -3,-5 -2,-9 v -5 l 2,-9 3,-5 5,-2 h 4 l 5,2 4,5 2,9 v 5 l -2,9 -4,5 -5,2 h -4" /><path
                     id="path364"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 4032,3325 4,2 5,5 v -37" /><path
                     id="path366"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2334,4787 -2,4 -3,3 -4,2 h -7 l -4,-2 -3,-3 -2,-4 -2,-5 v -9 l 2,-5 2,-4 3,-3 4,-2 h 7 l 4,2 3,3 2,4" /><path
                     id="path368"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2344,4759 v 37" /><path
                     id="path370"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2369,4796 v -37" /><path
                     id="path372"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2344,4778 h 25" /><path
                     id="path374"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2383,4759 14,37 14,-37" /><path
                     id="path376"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2388,4771 h 18" /><path
                     id="path378"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2422,4759 v 37 l 14,-37 14,37 v -37" /><path
                     id="path380"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2480,4778 5,-1 2,-2 2,-4 v -5 l -2,-3 -2,-2 -5,-2 h -16 v 37 h 16 l 5,-2 2,-2 2,-3 v -4 l -2,-3 -2,-2 -5,-2 h -16" /><path
                     id="path382"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2501,4759 v 37 h 16 l 5,-2 2,-2 2,-3 v -4 l -2,-3 -2,-2 -5,-2 h -16" /><path
                     id="path384"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2513,4778 13,-19" /><path
                     id="path386"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2538,4759 v 37 h 23" /><path
                     id="path388"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2538,4778 h 14" /><path
                     id="path390"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2538,4759 h 23" /><path
                     id="path392"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2615,4796 -5,-2 -3,-5 -2,-9 v -5 l 2,-9 3,-5 5,-2 h 4 l 5,2 4,5 2,9 v 5 l -2,9 -4,5 -5,2 h -4" /><path
                     id="path394"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2644,4796 h 19 l -11,-14 h 6 l 3,-2 2,-2 2,-5 v -3 l -2,-6 -4,-3 -5,-2 h -5 l -5,2 -2,2 -2,3" /><path
                     id="path396"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3823,4751 -2,3 -3,4 -4,2 h -7 l -3,-2 -4,-4 -2,-3 -1,-5 v -9 l 1,-5 2,-4 4,-4 3,-1 h 7 l 4,1 3,4 2,4" /><path
                     id="path398"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3833,4723 v 37" /><path
                     id="path400"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3858,4760 v -37" /><path
                     id="path402"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3833,4742 h 25" /><path
                     id="path404"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3872,4723 14,37 14,-37" /><path
                     id="path406"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3877,4735 h 18" /><path
                     id="path408"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3911,4723 v 37 l 14,-37 14,37 v -37" /><path
                     id="path410"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3969,4742 5,-2 2,-1 2,-4 v -5 l -2,-4 -2,-2 -5,-1 h -16 v 37 h 16 l 5,-2 2,-2 2,-3 v -4 l -2,-3 -2,-2 -5,-2 h -16" /><path
                     id="path412"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3990,4723 v 37 h 16 l 5,-2 2,-2 2,-3 v -4 l -2,-3 -2,-2 -5,-2 h -16" /><path
                     id="path414"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 4002,4742 13,-19" /><path
                     id="path416"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 4027,4723 v 37 h 23" /><path
                     id="path418"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 4027,4742 h 14" /><path
                     id="path420"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 4027,4723 h 23" /><path
                     id="path422"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 4105,4760 -6,-2 -3,-5 -2,-9 v -5 l 2,-9 3,-6 6,-1 h 3 l 5,1 4,6 2,9 v 5 l -2,9 -4,5 -5,2 h -3" /><path
                     id="path424"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 4131,4751 v 2 l 2,3 1,2 4,2 h 7 l 3,-2 2,-2 2,-3 v -4 l -2,-3 -3,-6 -18,-17 h 25" /><path
                     id="path426"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3768,2248 -1,3 -4,4 -3,1 h -7 l -4,-1 -3,-4 -2,-3 -2,-6 v -9 l 2,-5 2,-3 3,-4 4,-2 h 7 l 3,2 4,4 1,3" /><path
                     id="path428"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3779,2256 v -26 l 2,-5 3,-4 6,-2 h 3 l 5,2 4,4 2,5 v 26" /><path
                     id="path430"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3818,2219 v 37" /><path
                     id="path432"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3856,2251 -3,4 -5,1 h -7 l -6,-1 -3,-4 v -3 l 2,-4 1,-2 4,-2 10,-3 4,-2 2,-2 1,-3 v -5 l -3,-4 -5,-2 h -7 l -6,2 -3,4" /><path
                     id="path434"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3867,2219 v 37" /><path
                     id="path436"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3881,2219 v 37 l 25,-37 v 37" /><path
                     id="path438"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3920,2219 v 37 h 23" /><path
                     id="path440"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3920,2239 h 14" /><path
                     id="path442"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3920,2219 h 23" /><path
                     id="path444"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3343,1240 8,-36 9,36 9,-36 9,36" /><path
                     id="path446"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3411,1232 -2,3 -3,4 -4,1 h -7 l -3,-1 -4,-4 -1,-3 -2,-6 v -8 l 2,-6 1,-3 4,-4 3,-1 h 7 l 4,1 3,4 2,3" /><path
                     id="path448"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3438,1235 v -31" /><path
                     id="path450"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3422,1219 h 31" /><path
                     id="path452"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3492,1235 -3,4 -6,1 h -7 l -5,-1 -4,-4 v -3 l 2,-4 2,-2 4,-1 10,-4 4,-2 1,-1 2,-4 v -5 l -3,-4 -6,-1 h -7 l -5,1 -4,4" /><path
                     id="path454"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3503,1204 v 36 h 12 l 5,-1 4,-4 2,-3 1,-6 v -8 l -1,-6 -2,-3 -4,-4 -5,-1 h -12" /><path
                     id="path456"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 3555,1223 6,-2 2,-2 1,-3 v -5 l -1,-4 -2,-2 -6,-1 h -15 v 36 h 15 l 6,-1 2,-2 1,-4 v -3 l -1,-4 -2,-1 -6,-2 h -15" /><path
                     id="path458"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2350,3485 -3,3 -6,2 h -7 l -5,-2 -3,-3 v -4 l 1,-3 2,-2 4,-2 10,-3 4,-2 1,-2 2,-4 v -5 l -3,-3 -6,-2 h -7 l -5,2 -3,3" /><path
                     id="path460"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2361,3453 v 37 h 23" /><path
                     id="path462"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2361,3472 h 14" /><path
                     id="path464"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2361,3453 h 23" /><path
                     id="path466"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2412,3490 v -28 l -2,-6 -2,-1 -3,-2 h -4 l -3,2 -2,1 -2,6 v 3" /><path
                     id="path468"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2433,3490 -4,-2 -3,-3 -2,-4 -2,-5 v -9 l 2,-5 2,-4 3,-3 4,-2 h 7 l 4,2 3,3 2,4 2,5 v 9 l -2,5 -2,4 -3,3 -4,2 h -7" /><path
                     id="path470"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2461,3490 v -27 l 2,-5 3,-3 6,-2 h 3 l 5,2 4,3 2,5 v 27" /><path
                     id="path472"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2500,3453 v 37 h 16 l 5,-2 2,-2 1,-3 v -4 l -1,-3 -2,-2 -5,-2 h -16" /><path
                     id="path474"
                     style="fill:none;stroke:#0000ff;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                     d="m 2512,3472 12,-19" /></g></g></g></svg>

</svg>

                </div>


            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-3 col-sm-4">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Liste des chambres</span>
                </div>
                <div class="card-body p-0 rooms-list">
                    <div class="scroll">
                        <div class="table-responsive">
                            <table class="table table-md">
                                <tbody>
                                @foreach($rooms as $r)
                                    <tr id="tr_{{$loop->iteration}}"
                                        class="{{$r->isInterdite == 1 ? 'is-interdite' : ''}}"
                                        onmouseover="chListHover({{$loop->iteration}})">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$r->name}}</td>
                                        <td>
                                            <a class="btn btn-outline-info btn-sm edit-room-btn"
                                               data-id="{{$r->id}}"
                                               data-json_index="{{$loop->index}}"
                                               data-name="{{$r->name}}"
                                               data-is_interdite="{{$r->isInterdite}}"

                                               data-remodal-target="room-edit"
                                               data-toggle="tooltip"
                                               data-original-title="Modifier le nom et le type de la piece">Modifier</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @include('rooms.edit_modal')


@stop

@section('js')
    <script>
        $('body').addClass("sidebar-mini")
    </script>
    <script src="./js/plan_ch.js"></script>
    <script>
        $(document).ready(function () {

            var height = $('.map').height();
            $('.rooms-list').height(height + 50);

            $('.edit-room-btn').click(function () {
                var btn = $(this);

                var id = btn.data('id');
                var name = btn.data('name');
                var isInterdite = btn.data('is_interdite');

                var jsonIndex = btn.data('json_index');

                $('#room-edit .id').val(id);
                $('#room-edit .name').val(name);
                $('#room-edit .is-interdite').prop('checked', isInterdite);

                var data = JSON.stringify(rooms[jsonIndex]);
                $('#room-edit .data').val(data);
            });
        })
    </script>
@stop
