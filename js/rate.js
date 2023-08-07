
jQuery(function($){

  let $opendaylistname = "";
  
  $('.lBarListElementYear').click(function(){  //открывает лист месяцев при нажатии на год
    $('div.lBarMonthList').css('display','none');
    $('#monthlist' + $(this).attr('id').slice(-2)).css('display','block');
  });  

  $('.lBarListElementMonth').click(function(){  //открывает лист дней при нажатии на месяц
    if ($opendaylistname == $(this).attr('id').slice(-4)) {  // закрывает лист дней при повторном нажатии
      $('#daylist' + $(this).attr('id').slice(-4)).css('display','none');
      $opendaylistname = "";
    } 
    else{
    $('div.lBarDayList').css('display','none');
    $('#daylist' + $(this).attr('id').slice(-4)).css('display','block');
    $opendaylistname = $(this).attr('id').slice(-4);
    }
  }); 



})
