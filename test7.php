

    <?php
    //require_once 'error_code.php';
    require_once 'error_code.php';
    echo 'Hello World!1111';
    $test1 = 1;
    $test2 = 2;
    echo $test1 + $test2;

    $arr1 = ['aaa', 'bbb3332222'];
    echo $arr1[1];

    $arr2 = ['volvo', 'bmw', 'benchi'];

    echo 'i like'.$arr2[0].','.$arr2[1].' and '.$arr2[2].'.<br>';

    $arr3 = ['name1' => 'zhao', 'name2' => 'miao', 'name3' => 'hai'];

    echo '   =>>  '.$arr3['name2'].' ';
    echo count($arr3);
    for ($x = 0; $x <= 10; ++$x) {
        echo " 我 凯撒1 number is $x <br> ";
    }

    $arr4 = ['blue', 'green', 'yellow'];
    print_r($arr4);
    foreach ($arr4 as $item) {
        echo " $item <br>";
    }

    $arr5 = ['benchi', 'bmw', 'fengtian'];
    $arrLength = count($arr5);

    for ($x = 0; $x <= $arrLength; ++$x) {
        echo "<br> $arr5[$x] <br>";
    }
    //这里测试关联数组

    $arr6 = ['Peter' => '35', 'Ben' => '44', 'Joe' => '55'];
    foreach ($arr6 as $x => $x_value) {
        echo 'key='.$x.', value = '.$x_value;
        echo '<br>';
    }

    $txt1 = '学习 PHP';
    $txt2 = 'RUNOOB.COM';
    $cars = ['Volvo', 'BMW', 'Toyota'];

    echo $txt1;
    echo '<br>';
    echo "在 $txt2 学习 PHP ";
    echo PHP_EOL;
    echo "我车的品牌是 $cars[0]";
    echo PHP_EOL;
    echo "我车的品牌是 $cars[0]";
    echo PHP_EOL;
    echo '<br>';
    echo "我车的品牌是 $cars[0]";

    $t = date('D');
    //$t= date('H');
    echo '<br>';
    echo $t;
    if ($t > '20') {
        echo '==>OK';
    } else {
        echo '==> not OK';
    }

    $color = 'black';
    switch ($color) {
        case 'red':
            echo '=>red';
            break;
        case 'green':
            echo '=>green';
            break;
        default:
            echo '=>black';
            break;
    }
    //遍历数组 数字键遍历
    $arrayName = ['benchi', 'bmw', 'fengtian'];
    $arrlen = count($arrayName);
    echo '<br>';
    for ($x = 0; $x < $arrlen; ++$x) {
        echo '=>'.$arrayName[$x];
    }
    //指定键遍历
    $age = ['zhao' => '12', 'qian' => '13', 'li' => '12'];
    echo 'this name qian age is =>'.$age['qian'];
    foreach ($age as $key => $value) {
        echo 'Key= '.$key.' value= '.$value;
    }

    $number = [2, 4, 8, 99];
    rsort($number);
    print_r($number);

    $i = 1;
    while ($i <= 10) {
        echo 'number is '.$i;
        echo '<br>';
        ++$i;
    }

    $a = 1333333;
    do {
        ++$a;
        echo 'test value '.$a.'<br>';
    } while ($a <= 10);

    $arrayName1 = ['aa' => 'ssss', 'bb' => 'ccccc', 'cc' => 'ccccc'];
    $arrayName2 = $arrayName1['bb'];

    print_r($arrayName2);

    $foo = ['aa' => 'aaaaa', 'bb' => 'bbbbb'];
    unset($foo['aa']);
    var_dump($foo);
       echo '=========='.'<br>';

//     $people = array("Peter", "Joe", "Glenn", "Cleveland");
//     reset($people);
//     print_r($people);
//     while (list($key, $val) = each($people))
//    {
//    echo "$key => $val<br>";
//    }
  $transaction_id = false;
  if (!empty($transaction_id)) {
      echo 'hgh+++';
  } else {
      echo 'hgh----';
  }

   echo '=========='.'<br>';

    $a1 = 99;
    $a2 = 99;
    echo $a1;
    print_r($a1);

    $a2 = $GLOBALS['a1'];
    print_r($a2);
    //var_dump($a2);

    function add($x1, $x2)
    {
        $total = $x1 + $x2;

        return $total;
    }

    echo '1+2 total is :'.add(1, 2);

    echo '该文件位置：'.__FILE__;

    $sites = [
        'taobao' => ['淘宝', 'www.taobao.com'],
        'jingdong' => ['京东', 'www.jingdong.com'],
    ];
    echo '<br>';
    print_r($sites);
    echo '<br>';
    $data = date('Y-m-d');
    echo $data;
    echo '<br>';
    //把一个变量转换成json对象，成功则返回json对象，失败则返回false;
    $arr111 = ['name' => 'zhao', 'name2' => 'miaohai', 'name3' => 'zheyu111'];

    echo json_encode($arr111);
    $xx = json_encode($arr111);
    echo '<br>';
    $xxx = json_decode($xx);
    echo $xxx->name3;

    //使用过滤器
    $int = 19.1;
    if (!filter_var($int, FILTER_VALIDATE_INT)) {
        echo '非法';
    } else {
        echo '合法';
    }
    //取得某一个数组其中一列的值
    echo '<br>';
    $arrayName = [
        'name1' => [
            'name11' => 'aa',
            'name22' => 'bb', 'name33' => 'cc',
        ],
        'name2' => [
            'name11' => 'aaa',
            'name22' => 'bbb', 'name33' => 'ccc',
        ],
    ];
    $arrayName1 = array_column($arrayName, 'name33');
    print_r($arrayName1);
    echo '<br>';
    $name = ['zhao', 'hua', 'qian'];

    $age = [11, 12, 13];
    $newArr = array_combine($name, $age);

    print_r($newArr);

    //$REQUEST_URI = 'https://uat.citconpay.com/posp/rest/initialize?q=';
    $request = basename(parse_url('/rest/initialize1', PHP_URL_PATH));
    //$request = clean_statement($request);
    //$b = clean_statement($b);
    var_dump($_SERVER['REQUEST_URI']);
    echo '<br>';
    var_dump($request);
    echo '<br>';
    //$ip = $_SERVER['REMOTE_ADDR'];
    $test = $_SERVER['SERVER_ADDR'];
    var_dump($_SERVER['SERVER_ADDR']);
    echo '<br>';

    $aa = $GLOBALS['error_code']['CONTEXT_INCONSISTENT']['msg'];
    var_dump($aa);

    // echo '<br>';
    // var_dump($xxx);
    // echo '<br>';
    // echo $xxx['name3']
    echo '<br>'; echo '<br>'; echo '<br>';
    $array['id'] = '1234';
    $array['type'] = 'alp';

    $aaa['sss'] = json_encode($array);
    $aaa['transactionId'] = 'ssss';
    $aaa['www'] = 'wwwww';
   // $bb = json_encode($request);
   // $request1 = ['name' => 'callback', 'value' => 'test'];
   $test = http_build_query($aaa);
   echo $test;
   //var_dump($request1);
   echo '<br>';
   //var_dump($request1);
   $barcode = 'qr44444444';
   if (strpos($barcode, 'qr') === 0) {
       echo strpos($barcode, 'qr');
       echo 'no fund ';
   } else {
       echo 'fund';
   }
   echo '<br>';
   echo strpos('phpIlove , I love  too!', 'php');

   $ipn_url = 'https://uat.citconpay.com/posp/ipn/';
   $callback_url = 'https://uat.citconpay.com/posp/receipt';

   function is_transaction_from_offline($ipn_url, $callback_url)
   {
       if (strpos(strtolower($ipn_url), 'citconpay.com/posp/ipn') !== false && strpos(strtolower($callback_url), 'citconpay.com/posp/receipt') !== false) {
           return true;
       }

       return false;
   }

   if (is_transaction_from_offline($ipn_url, $callback_url)) {
       echo 'AAA';
   } else {
       echo 'BBB';
   }

    ?>

