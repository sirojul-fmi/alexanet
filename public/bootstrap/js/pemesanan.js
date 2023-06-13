
$(document).ready(()=> {
  if ($("#paketWifi").val()=='' || $("#paketWifi").val()==null) {
    $("#data-paket").hide();
  }
});

$("#btn-selesai").click(function() {
  $("#result-paket").text('');
  $("#result-bandwidth").text('');
  $("#result-harga").text('');

  const q1 = $("#q1").val();
  const q2 = $("#q2").val();
  const q3 = $("#q3").val();
  const q4 = $("#q4").val();

  const data = {
    rule1: q1,
    rule2: q2,
    rule3: q3,
    rule4: q4,
  };
  
  const url = $("#btn-simpan").data('url');

  $.ajax({
    type: "POST",
    url: url,
    data: data,
    dataType: "json",
    success: function(data) {

      // console.log(data[0].price);
            
      $("#result-paket").text(data[0].packet);
      $("#result-bandwidth").text(data[0].bandwidth);
      $("#result-harga").text('Rp.' + data[0].price + ',-');

      $("#btn-simpan").click(() => {
        $("#paketWifi").val(data[0].packet);
        $("#paketCode").val(data[0].packet_code);
        $("#data-paket").show();
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
  
});