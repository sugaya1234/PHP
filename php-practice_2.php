<?php
// Q1 tic-tac問題

function tictac()
{
    echo "1から100までのカウントを開始します\n";
    for ($i = 1; $i <= 99; $i++) {
        switch ($i) {
            case $i % 4 === 0 && $i % 5 ===0:
                echo "tic-tac\n";
                break;
            
            case $i % 4 === 0:
                echo "tic\n";
                break;
    
            case $i % 5 ===0:
                echo "tac\n";
                break;
    
            default:
                echo $i . "\n";
                break;
            }
  }
}

tictac();


// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// 問題1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";

// 問題2
foreach ($personalInfos as $index => $info) {
    echo $index + 1 . "番目の" . $info['name'] . "のメールアドレスは" . $info['mail'] . "で、電話番号は" . $info['tel'] . "です。\n";
}

// 問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName . "は" . $class .  "の授業に酸化しました。学籍番号：" . $this->studentId;
    }
}

$suzuki = new Student(5, '鈴木');
echo "学籍番号" . $suzuki->studentId . "番目の生徒は" . $suzuki->studentName . "です。\n";

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題1
$now = new DateTime();
echo $now->modify('-1 months')->format("Y-m-d\n");

// 問題2
$date2 = new DateTime('1992-04-25');
$interval = $now->diff($date2);

echo $interval->format('あの日から%a日経過しました。');
