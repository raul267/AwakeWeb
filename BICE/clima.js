setTimeout(refrescar, 600000);
  function refrescar(){
    //Actualiza la página
    location.reload();
  }
$.getJSON("http://api.openweathermap.org/data/2.5/weather?lat=-33.4378&lon=-70.6505&APPID=f1d1a38a857294c103707368b78133aa&units=metric",function(data){
    //Convertir temperatura
    var temp = data.main.temp;
    var nt = temp.toString();
    var st = nt.split(".")[0];
    $("#tempe").text(st+"°");

    // Icono
    var icon =data.weather[0].icon;
    var url = "http://openweathermap.org/img/w/" + icon +".png";

    $("#imgClima").attr("src",url);
    console.log(data);

});
//llenar actividades
$.post('acciones/json.php',function(datos)
          {
            $("#divActividades").html(datos);
    console.log(datos);
          });
//llenar cumpleaños
$.post('acciones/json2.php',function(datos)
          {
            $("#divCumpleanos").html(datos);

          });
//llenar menu
          $.post('acciones/json3.php',function(datos)
                    {
                      $("#divMenu").html(datos);

                    });

          $(function() {
              $.ajax({
                  type: "get",
                  url: "https://www.cooperativa.cl/noticias/site/tax/port/all/rss____1.xml",
                  dataType: "xml",
                  success: function(data) {
                      /* handle data here */
                      console.log(data);
                      var noticias ="";
                      for (var i = 1; i < 10; i++)
                      {
                        noticias= noticias+'&nbsp||&nbsp'+ data.getElementsByTagName("title")[i].innerHTML;
                      }

                       console.log(noticias);
                       $("#noticias").html(noticias);



                  },
                  error: function(xhr, status) {
                      /* handle error here */
                      $("#show_table").html(status);
                  }
              });
          });
