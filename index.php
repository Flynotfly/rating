<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js "></script>
  <?php include "php/rate.php" ?>
  <title>GDKS Rating</title>
</head>
<body bgcolor=#141414 >
  

<div class="upbar">
  <div class="upbardop">
    <div class="upbarnews"><div class="upbartext">Новости</div></div>
    <div class="upbarmatches"><div class="upbartext">Матчи</div></div>
    <div class="upbarresults"><div class="upbartext">Результаты</div></div>
    <div class="upbarevents"><div class="upbartext">Турниры</div></div>
    <div class="upbarstats"><div class="upbartext">Статистика</div></div>
    <div class="upbarforum"><div class="upbartext">Форум</div></div>
    <div class="upbarlive"><div class="upbartext">онлайн матчи</div></div>
  </div>
</div> 

<div class="centreback">

  <div class="leftBar">
    <div class="lBarYear"><div class="lBarName"> Год </div></div>
    <div class="lBarYearlist">
      <div class="lBarListElementYear" id="year21"><div class="lBarListElementName"> 2021 </div></div>
      <div class="lBarListElementYear" id="year20"><div class="lBarListElementName"> 2020 </div></div>
      <div class="lBarListElementYear" id="year19"><div class="lBarListElementName"> 2019 </div></div>
    </div>

    <div class="lBarMonth"><div class="lBarName">Месяц</div></div>

    <?php
      while(($resultDates = mysqli_fetch_assoc($queryDates)) !== null):
        if ($resultDates[year]>$yearIdnex):
          if ($yearIdnex !=0): ?>
            </div></div>
          <?php endif;
          $yearIdnex = $resultDates[year];
          $monthIndex = 0;?>
          <div class="lBarMonthList" id="monthlist<?php echo $resultDates[year];?>">
        <?php endif;

        if ($resultDates[month]>$monthIndex):
          if ($monthIndex != 0): ?>
            </div>
          <?php endif;
          $monthIndex = $resultDates[month] ?>
          <div class="lBarListElementMonth" id="month<?php echo $resultDates[month]; echo $resultDates[year]; ?>"> <div class="lBarListElementName"><?php echo $resultDates[monthname];?></div></div>
          <div class="lBarDayList" id="daylist<?php echo $resultDates[month]; echo $resultDates[year]; ?>">
        <?php endif;?>

        <div class="lBarListElementDay"><div class="lBarListElementName"><?php echo $resultDates[day]?></div></div>

    <?php endwhile;?>

    </div>
    </div>
  </div>


  <div class="centrebar">

    <div class="ratedate">CS:GO World ranking on June 28th, 2021</div>

    <?php
      for ($i = 1; $i <=20; $i++):
    ?>

    <div class="teamblock" id="teamblock<?php echo str_pad($i, 2, '0', STR_PAD_LEFT)  ?>">
      <span class="teamposition">#<?php echo ($i) ?></span>
      <img class="teamlogo" id="teamlogo<?php echo str_pad($i, 2, '0', STR_PAD_LEFT)?>" src="/img/teamslogo/<?php echo $ratingArray["logoid"][$i] ?>" >
      <div class="teamtable"><span class="teamname" id="teamname<?php echo str_pad($i, 2, '0', STR_PAD_LEFT)?>"><?php echo $ratingArray[name][$i] ?></span><span class="teampoints" id="teampoints<?php echo str_pad($i, 2, '0', STR_PAD_LEFT)?>">(<?php echo $ratingArray[score][$i] ?> points)</span>
      <div class="teamplayersname"><?php echo $ratingArray[player1][$i]?> &#8226 <?php echo $ratingArray[player2][$i]?> &#8226 <?php echo $ratingArray[player3][$i]?> &#8226 <?php echo $ratingArray[player4][$i]?> &#8226 <?php echo $ratingArray[player5][$i]?></div></div>
    </div>
    <?php endfor ?>
  </div
</div>


<script type="text/javascript">
  var jArray = <?php echo json_encode ($ratingArray);?>;
  <?php echo "gdhff" ?>
</script>

<script src="/js/rate.js"></script>
</body>
