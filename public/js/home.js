var map;

var rooms = [];
let selectedRoom = null;
let clickedRoom = null
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    // noinspection EqualityComparisonWithCoercionJS
    if (this.readyState == 4 && this.status == 200) {
        rooms = JSON.parse(this.responseText);
    }
};

function addPolygoneToMap(ar) {

    var polygon = L.polygon(ar, {color: 'red'}).addTo(map);
}


xmlhttp.open("GET", "./rooms.json", true);
xmlhttp.send();

function resetStyle() {
    let x = document.querySelectorAll(".chambre_selected");
    let k;
    for (k = 0; k < x.length; k++) {
        let ch = $("#" + x[k].id);
        ch.removeClass("chambre_selected");
        ch.addClass("chambre");
    }

    let y = document.querySelectorAll(".tr_selected");
    let j;
    for (j = 0; j < y.length; j++) {
        let chr = $("#" + y[j].id);
        chr.removeClass("tr_selected");
    }
}


function chClicked(id) {
    resetStyle();
    clickedRoom = id;
    let ch = rooms[id - 1];
    ch = $("#" + ch.plan_rect);
    ch.removeClass("chambre");
    ch.addClass("chambre_selected");

    let room = rooms[id - 1];
    $("#" + room.list_row).addClass("tr_selected");
    console.log(event.target)
}

function resetmList() {
    resetStyle();
    selectedRoom = null;
    clickedRoom = null;
    updateList()
}

function chListHover(id) {
    if (clickedRoom == null) {
        resetStyle();
        selectedRoom = id;
        updateList()
    }
}

function infoCh(id) {
    let room = rooms[id - 1];
    $("#room-edit").fireModal()
    console.log(id)
}

let roomsPersons = [];

function initRooms() {
    for (let i = 0; i < 9; i++) {
        roomsPersons[i] = []
    }
}

initRooms()
let roomLabels = [
    {lat: -75, lng: 160},//1
    {lat: -75, lng: 228},
    {lat: -81, lng: 282.5},
    {lat: -213.5, lng: 249.5},

    {lat: -216.5, lng: 161.5},//5
    {lat: -147, lng: 153},
    {lat: -150, lng: 236.5},
    {lat: -86, lng: 332},

    /*
     {lat: -102.5, lng: 306},

     {lat: -136.5, lng: 454.5},//10
     {lat: -155, lng: 413},
     {lat: -160.5, lng: 380.5},
     {lat: -164, lng: 338},
     {lat: -63, lng: 428},

     {lat: -170.5, lng: 235},//15
     {lat: -259, lng: 25.5},
     {lat: -248, lng: 70},
     {lat: -248.5, lng: 108},
     {lat: -262.5, lng: 182.5},

     {lat: -247, lng: 221.5},//20
     {lat: -248, lng: 261},
     {lat: -253.5, lng: 297.5},
     {lat: -248, lng: 376},
     {lat: -249.5, lng: 407},

     {lat: -256, lng: 454.5},//25
     {lat: -280.5, lng: 102},
     {lat: -283, lng: 350.5},
     {lat: -250.5, lng: 146.5},
     {lat: -251.5, lng: 343.5},

     {lat: -204, lng: 356},//30
     {lat: -159.5, lng: 193.5},
     {lat: -161, lng: 303.5},*/
];

initMap();


function initMap() {


    map = L.map('mapid', {
        minZoom: 1,
        maxZoom: 4,
        center: [0, 0],
        zoom: 1,
        crs: L.CRS.Simple,
        attributionControl: false
    });


    var w = 1280 * 3,
        h = 806 * 3,
        url = './mp.svg';
// calculate the edges of the image, in coordinate space
    var southWest = map.unproject([0, h], map.getMaxZoom() - 1);
    var northEast = map.unproject([w, 0], map.getMaxZoom() - 1);
    var bounds = new L.LatLngBounds(southWest, northEast);

// add the image overlay,
// so that it covers the entire map
    L.imageOverlay(url, bounds).addTo(map);

    map.setMaxBounds(bounds);

    L.control.attribution({
        prefix: false
    }).addAttribution('<a href="#">seghiri.takieddine@univ-constantine2.dz , benchetra.hamza@univ-constantine2.dz</a>').addTo(map);

    function clicked(e) {
        console.log(e.latlng)
    }

    map.on('click', clicked);


    //todo initLabelsWithPopups();
}

function initLabelsWithPopups() {

    for (let i = 0; i < roomLabels.length; i++) {
        var m = turf.point([roomLabels[i].lat, roomLabels[i].lng]);

        var customPin = L.divIcon({
            className: 'location-pin',
            html: "<span id='room-" + (i + 1) + "' class=\"badge badge-secondary\">0</span><br>" +
                "<span>ch #" + chambres_list[i].id + "</span>"
            , iconSize: [100, 50],
            iconAnchor: [20, 20],
            popupAnchor: [0, -21],
        });


        var marker = L.marker(m.geometry.coordinates, {
            icon: customPin
        }).addTo(map);


        var mPopup = "<span class='font-weight-bold'>" + chambres_list[i].nom + "</span>" +
            '<div id="popup-' + (i + 1) + '">' +

            '</div>';


        marker.bindPopup(mPopup);


        marker.on('click', function (ev) {
            //  ev.target.openPopup();
            showModal(i);

            ev.originalEvent.stopPropagation();
        });
    }
}


function showModal(number) {
    let chambre = chambres_list[number];
    let people = roomsPersons[number];
    $('.modal-title').html("<h2>" + chambre.nom + "</h2>");
    let popupBody = $('#popup');
    let mhtml = "";
    for (let i = 0; i < people.length; i++) {
        mhtml = mhtml + "<tr id='person-" + people[i].id + "'>" +
            "<td>" + people[i].id + "</td>" +
            "<td>" + people[i].name + "</td>" +
            "</tr>"
    }

    popupBody.html(mhtml);


    $('#myModal').appendTo("body").modal('show');
}

var personsRooms = [];
var markers = [];

function updateCounterLabels() {
    for (let i = 0; i < roomsPersons.length; i++) {
        let mid = "#room-" + (i + 1);
        $(mid).html(roomsPersons[i].length)
    }
}

function addPersonToPopupList(person, room) {
//todo
    let id = "popup";
    $(id).innerHTML = +'  <li id="person-' + person.id + '" class="">' + person.name + '</li>';
}

function showSelectedRoom(roomId) {
}

function updateList() {

    let mList = $("#people");
    let pp = "";

    if (selectedRoom != null) {
        for (let i = 0; i < roomsPersons[selectedRoom - 1].length; i++) {
            let person = roomsPersons[selectedRoom - 1][i];
            let mclass = "";
            if (person.type == "EMPLOYEE") mclass = "t_EMPLOYEE";
            if (person.type == "PENSIONNAIRE ") mclass = "t_PENSIONNAIRE";
            if (person.type == "USER") mclass = "t_RESIDENT";
            pp = pp +
                "<tr id='tr_" + person.id + "' class='" + mclass + "'   onmouseover='showSelectedRoom(" + (selectedRoom) + ")'>" +
                "      <td>" + person.lastname + " " + person.firstname + "</td>" +
                "      <td>" + chambres_list[selectedRoom - 1].nom + "</td>" +
                "</tr>"
        }
    } else {
        for (let j = 0; j < roomsPersons.length; j++) {
            for (let i = 0; i < roomsPersons[j].length; i++) {
                let person = roomsPersons[j][i];
                let mclass = "";
                if (person.type == "EMPLOYEE") mclass = "t_EMPLOYEE";
                if (person.type == "PENSIONNAIRE ") mclass = "t_PENSIONNAIRE";
                if (person.type == "USER") mclass = "t_RESIDENT";
                pp = pp +
                    "<tr id='tr_" + person.id + "' class='" + mclass + "'  onmouseover='showSelectedRoom(" + (j + 1) + ")'>" +
                    "      <td>" + person.lastname + " " + person.firstname + "</td>" +
                    "      <td>" + chambres_list[j].nom + "</td>\n" +
                    "</tr>"
            }
        }
    }
    mList.html(pp)
}


function addPersonM(room, person, position) {

    console.log(room);
    if (typeof room == "number")
        room = chambres_list[room - 1];
    else
        room = chambres_list[room.id - 1];
    // noinspection EqualityComparisonWithCoercionJS
    // if (personsRooms[person.id] != room) {
    console.log("hani dkholt nzid 3abd")
    if (typeof markers[person.id] !== 'undefined') {
        map.removeLayer(markers[person.id])
    }

    var fullname = person.name;
    var polygonPoints = [];
    for (let i = 0; i < room.corners.length; i++) {
        polygonPoints[i] = [room.corners[i].x, room.corners[i].y]
    }
    var poly = L.polygon(polygonPoints);
    console.log(position)


    if (position.length > 1) {
        var m = {geometry: {coordinates: [position[0], position[1]]}}
    } else {
        m = randomPointInPoly(poly);
    }
    //m = randomPointInPoly(poly);
    console.log("hani rayh nhat l pin")
    var customPin = L.divIcon({
        className: 'location-pin',
        //remplacer les icones par des images
        html: "<div style='text-align: center' style='width: auto'> " + "<i class=\"fas fa-user\"></i>" + " </div>"
        , iconSize: [100, 50],
        iconAnchor: [20, 20],
        popupAnchor: [27, -21],
    });

    console.log("hani rayh nhat l pin")

    var marker = L.marker(m.geometry.coordinates,
        {
            icon: customPin
        }).addTo(map);
    console.log("hani hatit lpin hna : " + m.geometry.coordinates)


    //haw popup
    var mPopup = "<h6>" + fullname + "</h6>" +
        "<span><b>chambre : </b>" + room.nom + "</span>";
    marker.bindPopup(mPopup);


    marker.on('mouseover', function (ev) {
        ev.target.openPopup();
    });

    markers[person.id] = marker;
    personsRooms[person.id] = room;
    // }
}


function randomPointInPoly(polygon) {
    var bounds = polygon.getBounds();
    var x_min = bounds.getEast() + 20;
    var x_max = bounds.getWest() - 20;
    var y_min = bounds.getSouth() - 20;
    var y_max = bounds.getNorth() + 20;

    var lat = y_min + (Math.random() * (y_max - y_min));
    var lng = x_min + (Math.random() * (x_max - x_min));

    var point = turf.point([lng, lat]);
    var poly = polygon.toGeoJSON();
    var inside = turf.inside(point, poly);

    if (inside) {
        return point
    } else {
        return randomPointInPoly(polygon)
    }
}

function showAlertNotification(person, room) {
    toastr.error('Le pensionnaire <b>' + person.firstname + " " + person.lastname + "</b>,a acceder a la chambre <b>" + room.nom + "</b>!", 'Alerte!')
}

/******************************************************/

function addPerson(room, person) {
    if (personExistsInRooms(person)) {
        deleteFromAllRoomsExceptTheOne(person, room);
    } else {
        addPersonToRoom(person, room);
    }
    //   addPersonMRoom(chambres_list[room-1],person)
}


function roomHasPerson(roomPerson, person) {
    for (let i = 0; i < roomPerson.length; i++) {

        // noinspection EqualityComparisonWithCoercionJS
        if (roomPerson[i].id == person.id)
            return true;
    }

    return false;
}


function personExistsInRooms(person) {
    for (let i = 0; i < roomsPersons.length; i++) {
        if (roomHasPerson(roomsPersons[i], person))
            return true
    }
    return false;
}

function deleteFromRoomIfExists(person, room) {
    if (roomsPersons[room] > -1) {
        var index = roomsPersons[room].indexOf(person);
        //console.log(roomsPersons)
        if (index > -1) {
            roomsPersons[room].splice(index, 1);
        }
    }

}

function deleteFromAllRoomsExceptTheOne(person, room) {
    for (let i = 0; i < roomsPersons.length; i++) {
        //     console.log("i : " + i + " room : " + (room - 1))
        // noinspection EqualityComparisonWithCoercionJS
        if (i != room - 1) {
            deleteFromRoomIfExists(person, i + 1);
        }
    }
}

function addPolygonToRoom(room) {
    var t_corners = chambres_list[room].corners;
    console.log(chambres_list[room]);

    var latlngs = [
        [t_corners[0].x, t_corners[0].y],
        [t_corners[1].x, t_corners[1].y],
        [t_corners[2].x, t_corners[2].y],
        [t_corners[3].x, t_corners[3].y]
    ];
    addPolygoneToMap(latlngs)
}

function alertIfMoreThanThreeInRoom(roomsPerson, room) {
    if (roomsPerson.length >= 3) {
        addPolygonToRoom(room);
        var personsID = []
        for (let i = 0; i < roomsPerson; i++) {
            console.log("check " + roomsPerson[i].name);
        }
        //notifyPersons(personsID);

        /*  request = $.ajax({
               url : './notify',
               method:'GET',
               dataType: 'json',
               data: personsID,

           }); */


    }
    // for (let i = 0; i < roomsPersons[i].length; i++) {
    /* $.ajax({
         url : './notify',
         method:'GET',
         success:function (){
             alert('ok');
         },
         fail:function (){
             alert('no');
         }
     });*/

    //}

}

function notifyPersons(personsID) {
    personsID = [1, 5];
    /* request = $.ajax({
         url: "./notify",
         method: "GET",
         dataType: "json",
         data: personsID,
         success:function (){
             alert('ok');
         },
         failure:function (){
             alert('no');
         }

     });*/


}

function addPersonToRoom(person, room) {
    //ajouter la personne a la liste

    roomsPersons[room - 1].push(person);

    alertIfMoreThanThreeInRoom(roomsPersons[room - 1], room - 1);


    //afficher la personne dans le popup
    addPersonToPopupList(person, room);

    //mettre a jour les compteurs des chambres
    updateCounterLabels();

    updateList();
}


if ("WebSocket" in window) {
    // Let us open a web socket
    var ws = new WebSocket("ws://192.168.43.31:8090");

    ws.onopen = function () {
        // Web Socket is connected
        console.info("Connection is opened..");
        $('body').click()
    };

    ws.onmessage = function (evt) {
        var received_msg = evt.data;
        received_msg = JSON.parse(received_msg);

        // noinspection EqualityComparisonWithCoercionJS
        if (received_msg.type == "position") {
            // addPerson(received_msg.room, received_msg.person);

            addPersonM(received_msg.room, received_msg.person, received_msg.position);
            //addPerson(received_msg.room, received_msg.person);
            console.log(received_msg.person)
        } else
            // noinspection EqualityComparisonWithCoercionJS
        if (received_msg.type == "alert") {
            // showAlertNotification(received_msg.person, chambres_list[received_msg.room - 1]);
            var t_corners = chambres_list[received_msg.room - 1].corners;

            console.log(latlngs);
            addPolygoneToMap(t_corners);
        }
    };

    /*  function addPersonMRoom(room, person) {

          console.log(room);
          // noinspection EqualityComparisonWithCoercionJS
          if (personsRooms[person.id] != room) {
              if (typeof markers[person.id] !== 'undefined') {
                  map.removeLayer(markers[person.id])
              }

              var fullname = person.firstname + " " + person.lastname;

              var polygonPoints = [];
              for (let i = 0; i < room.corners.length; i++) {
                  polygonPoints[i] = [room.corners[i].x, room.corners[i].y]
              }
              var poly = L.polygon(polygonPoints);



              var m = randomPointInPoly(poly);



              var icon, color_class;
              switch (person.type) {
                  case "PENSIONNAIRE":
                      icon = "blind";
                      color_class = "  t_" + person.type;
                      // noinspection EqualityComparisonWithCoercionJS
                      if (room.isInterdite == 1) {
                          icon = "exclamation-triangle iconA fa-beat";
                          color_class = "alert_a ";
                      }
                      break;
                  case "USER":
                      icon = "user-md";
                      color_class = "  t_" + person.type;
                      break;
                  case "EMPLOYEE" :
                      icon = "male";
                      color_class = "  t_" + person.type;
                      break
              }

              var customPin = L.divIcon({
                  className: 'location-pin',
                  html: "<div style='text-align: center' style='width: auto'> "   +  "<i class=\"fas fa-user\"></i>" + " </div>"
                  , iconSize: [100, 50],
                  iconAnchor: [20, 20],
                  popupAnchor: [27, -21],
              });
              var marker = L.marker(m.geometry.coordinates, {
                  icon: customPin
              }).addTo(map);
              var mPopup = "<h6>" + fullname + "</h6>" +
                  "<span><b>chambre : </b>" + room.nom + "</span>";
              marker.bindPopup(mPopup);


              marker.on('mouseover', function (ev) {
                  ev.target.openPopup();
              });

              markers[person.id] = marker;
              personsRooms[person.id] = room;
          }
      }
  */
    ws.onclose = function () {
        // websocket is closed.
        console.error("Connection is closed...");
    };
} else {
    // The browser doesn't support WebSocket
    alert("WebSocket NOT supported by your Browser!");
}

/*
addPerson(3, {id: 1, name: "emulator"});
addPerson(3, {id: 2, name: "hamza"});
addPerson(3, {id: 3, name: "mohamed"});
addPerson(3, {id: 5, name: "galaxy"});

*/
