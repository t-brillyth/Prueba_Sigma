let state = $('#state');
let city = $('#city');

state.empty();
city.empty();

state.append('<option selected="true" disabled>Escoja Departamento</option>');
state.prop('selectedIndex', 0);

city.append('<option selected="true" disabled>Escoja Ciudad</option>');
city.prop('selectedIndex', 0);

const proxyurl = "https://cors-anywhere.herokuapp.com/";
const url = 'https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json';

// Populate dropdown with list of provinces
$.getJSON(proxyurl + url, function (data) {
    $.each(data, function (key, entry) {
        state.append($('<option></option>').attr('value', key).text(key));
    })
    $("select.country").change(function () {
        var selectCiudad = $(this).children("option:selected").val();
        city.empty();
        $.each(data[selectCiudad], function (key, entry) {
            city.append($('<option></option>').attr('value', entry).text(entry));
        })
    });
});