ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
        center: [55.771702, 37.589796],
        zoom: 14,
        controls: ['smallMapDefaultSet']
    });


    var myPlacemark = new ymaps.Placemark([55.771702, 37.589796], {
    }, {
        preset: 'islands#darkGreenIcon'
    });

    myMap.geoObjects.add(myPlacemark);
});