
$("select.select_packet").change(function() {
  const param = $(this).children("option:selected").val();
  const data = {
    code: param,
  }

  if (param!=0) {
    $.ajax({
      type: "POST",
      url: 'http://localhost:8080/user/upgrade',
      data: data,
      success: function(data){
        let paket = JSON.parse(data);
        console.log(paket);
        $("#detail_packet_band").val(paket[0].bandwidth);
        $("#detail_packet_price").val("Rp." + paket[0].price + ",- per bulan");

        $("#detail_packet").removeAttr('hidden');
      },
      error: function(data) {
        console.log(data);
      }
    })
  }
});

$("#btn-batal-upgrade").click(function(){
  $("#detail_packet").attr('hidden', true);
});