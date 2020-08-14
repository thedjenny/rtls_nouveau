@extends('partials/page_map')


@section('css')
    <link rel="stylesheet" href="./leaflet/leaflet.css"/>
    <link rel="stylesheet" href="./css/plan_ch.css"/>

@stop

@section('content')
  
                    <div id="mapid"></div>

                    

  

    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popup-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
                </div>
            </div>
        </div>
    </div>



@stop

@section('js')
    <script src='https://unpkg.com/@turf/turf'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/howler/2.1.2/howler.core.min.js'></script>

    <script src="./leaflet/leaflet.js"></script>
    <script>
        $('body').addClass("sidebar-mini")
        var height = $('.map').height();
        $('.rooms-list').height(height + 50);
        var chambres_list = [

                @foreach($rooms as $r)
            {
                id:{{$r->id}},
                nom: "{{$r->name}}",
                type: "{{$r->type}}",
                isInterdite:{{$r->isInterdite}},
                peoples: [],
                corners: [
                    <?php
                    
                    $co=json_decode($r->data);
                    if(isset($co)){
                    $co = $co->corners;
                    
                    foreach ($co as $item) {
                        echo "{x:" . $item->x . ",y:" . $item->y . "},";
                    }}
                    
                    ?>
                ]
            },
            @endforeach
        ]


    </script>
    <script src="./js/map.js"></script>
@stop