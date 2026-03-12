// 1. 各タブのデータを準備
const tabData = [
  {
    img: "images/Actitivities_Tab_img1.png",
    title: "水中の世界",
    desc: "沖縄の海と言えば「ダイビング」。透き通った海水から織り成す青色はまさに幻想的。水に包まれながら癒される空間を味わえます。",
    price: "費用相場：￥13,200～￥26,400"
  },
  {
    img: "images/Actitivities_Tab_img2.png", // 2枚目の画像パス
    title: "水上リフレッシュ",
    desc: "水上でのアクティビティはサーフィンやバナナボートだけでなく、シーカヤック人気です。潮騒を聞きながら適度な運動で心地いい体験ができます。",
    price: "費用相場：￥1,500～￥3,500"
  },
  {
    img: "images/Actitivities_Tab_img3.png", // 3枚目の画像パス
    title: "空中散歩",
    desc: "沖縄は海だけじゃない！空もある！上を見れば青い空、下を見れば青い海。青に包まれる沖縄のパラセーリングで絶景体験ができます。",
    price: "費用相場：￥6,000～￥15,000"
  }
];

// 2. HTMLの要素を取得
const tabButtons = document.querySelectorAll('.tabItem');
const tabImage = document.getElementById('tabImage');
const tabTitle = document.getElementById('tabTitle');
const tabDesc = document.getElementById('tabDescription');
const tabPrice = document.getElementById('tabPrice');

// 3. クリックイベントを設定
tabButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    // ボタンの見た目（activeクラス）を切り替え
    tabButtons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');

    // 4. データの中身を入れ替え
    tabImage.src = tabData[index].img;
    tabTitle.textContent = tabData[index].title;
    tabDesc.textContent = tabData[index].desc;
    tabPrice.textContent = tabData[index].price;
  });
});