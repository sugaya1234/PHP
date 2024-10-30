<?php
// Q1 変数と文字列
$name = '菅谷';
$message = '私の名前は「' . $name . '」です。';

echo $message;

// Q2 四則演算
$x = 4;
$y = 5;
$num = $x * $y;

echo $num;
echo $num / 2;

// Q3 日付操作
$deta = date('Y年m月d日 H時i分s秒');

echo '現在時刻は、' . $deta . 'です。';

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else {
    if ($device === 'mac') {
        echo '使用OSは、macです。';
    } else {
        echo 'どちらでもありません。';
    }
}

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age < 18) ? '未成年です' : '成人です';

echo $message;

// Q6 配列
$kanto = ['東京都', '千葉県', '神奈川県', '茨城県', '群馬県', '栃木県', '埼玉県'];

echo $kanto[3] .'と' . $kanto[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$prefectures = [
    '東京都' => '新宿区',
    '千葉県' => '千葉市',
    '神奈川県' => '横浜市',
    '茨城県' => '水戸市',
    '群馬県' => '前橋市',
    '栃木県' => '宇都宮市',
    '埼玉県' => 'さいたま市'];

foreach ($prefectures as $prefecture => $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
if ($prefecture == '埼玉県') {
    echo $prefecture . "の県庁所在地は" . $capital . "です。\n";
}

// Q9 連想配列-3
$prefectures['北海道'] = '札幌市';
$prefectures['沖縄県'] = '那覇市';

foreach ($prefectures as $prefecture => $capital) {
    if ($prefecture === '東京都' || $prefecture === '千葉県'
    || $prefecture === '神奈川県' || $prefecture === '茨城県'
    || $prefecture === '群馬県' || $prefecture === '栃木県'
    || $prefecture === '埼玉県') {
        echo $prefecture . "の県庁所在地は" . $capital . "です。\n";
    } else {
        echo $prefecture . "は関東地方ではありません。\n";
    }
}

// Q10 関数-1
function hello($name)
{
    return $name . "さん、こんにちは。\n";
}

echo hello("佐藤");
echo hello("鈴木");

// Q11 関数-2
function calcTaxInPrice($price)
{
    return $price + $price * 0.1;
}

$price = 100;
$taxInPrice = calcTaxInPrice($price);
echo $price . "円の商品の税込み価格は". $taxInPrice ."円です。";

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 === 1){
        echo $num . "は奇数です。\n";
    } else {
        echo $num . "は偶数です。\n";
    }
}

distinguishNum(6);
distinguishNum(3);


// Q13 関数とswitch文
function evaluateGrade($grade)
{
    switch ($grade) {
        case "A":
        case "B":
            echo "合格です。\n";
            break;
    
        case "C":
            echo "合格ですが追加課題があります。\n";
            break;
    
        case "D":
            echo "不合格です。\n";
            break;
    
        default:
            echo "判定不明です。講師に問い合わせてください。\n";
            break;
    }
}

evaluateGrade("B");
evaluateGrade("F");
