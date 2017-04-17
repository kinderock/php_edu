<h4> Задача №1</h4>
<?php
  $slogan = ['Учиться мы', 'не бросим', '14', '88'];

  echo 'Массив <b>$slogan</b>:<br><pre>';
  echo print_r($slogan);
  echo '</pre>';

  echo 'Строка:<br>';
  echo "$slogan[0] $slogan[1] $slogan[2] $slogan[3]"; //V1 простой
  echo '<br />';
  echo implode(' ', $slogan); //V2 узнал про implode
?>

<br/><hr/><br/>

<h4> Задача №2</h4>
<?php
  $phrase = $slogan[0].' '.$slogan[1].' '.$slogan[2].' '.$slogan[3]; //V1

  // $phrase = implode(' ', $slogan); //V2

  // $phrase = ''; //V3, но до циклов вы вроде как не доходили еще
  // for ($i=0; $i < count($slogan); $i++) {
  //   $phrase .= $slogan[$i];
  // }

  echo 'Переменная <b>$phrase</b>:<br>';
  echo $phrase;
?>

<br/><hr/><br/>

<h4> Задача №3</h4>
<?php
  $slogan[count($slogan)] = '!'; //V1
  // $slogan[] = '!'; //V2
  $slogan[0] = 'Кодить мы';
  unset($slogan[2]);
  unset($slogan[3]);

  echo 'Обновленный массив <b>$slogan</b>:<br><pre>';
  echo print_r($slogan);
  echo '</pre>';
?>

<br/><hr/><br/>

<h4> Задача №4</h4>
<?php
  $task_generator = array(
    "part1" => ["Подготовить", "Реализовать", "Сгенерировать", "Одобрить", "Отклонить"],
    "part2" => ["задачи", "эскизы", "планы", "презентацию", "баннера"],
    "part3" => ["ко вторнику", "для клиентов", "для партнеров", "по акциям", "до конца месяца"]
  );

  echo 'Массив <b>$task_generator</b>:<br><pre>';
  echo print_r($task_generator);
  echo '</pre>';

  $key1 = mt_rand(0, 4);
  $key2 = mt_rand(0, 4);
  $key3 = mt_rand(0, 4);

  echo 'Cлучайная фраза: '.$task_generator['part1'][$key1].' '.$task_generator['part2'][$key2].' '.$task_generator['part3'][$key3];
?>

<br/><hr/><br/>

<h4> Задача №5</h4>
<?php
  // $day = getdate(); //V1
  //
  // echo 'Массив <b>$day</b>:<br><pre>';
  // echo print_r($day);
  // echo '</pre>';
  //
  // $day = $day['wday'];

  $day = date('w'); //V2

  echo $day.'<br>';

  switch ($day) {
    case 0:
      $current = 'воскресенье';
      break;

    case 1:
      $current = 'понедельник';
      break;

    case 2:
      $current = 'вторник';
      break;

    case 3:
      $current = 'среда';
      break;

    case 4:
      $current = 'четверг';
      break;

    case 5:
      $current = 'пятница';
      break;

    case 6:
      $current = 'суббота';
      break;

    default:
      $current = 'какой-то странный день...';
      break;
  }

  echo "Сегодня $current";
?>

<br/><hr/><br/>
