
//ローディング画面（初回のみブラウザが読み込まれたときのみ作動）
    // TOPページのローディング制御
    window.addEventListener('load', () => {
    const loadingView = document.getElementById('loadingView');

    // loadingViewが存在する場合のみ実行（TOPページ判定）
    if (loadingView) {
        // セッションストレージで初回訪問かチェック
        if (!sessionStorage.getItem('isVisited')) {
            // 初回訪問：1.2秒見せてからフェードアウト
            setTimeout(() => {
                loadingView.classList.add('isLoaded');
                // 訪問済みフラグをセット
                sessionStorage.setItem('isVisited', 'true');
            }, 3000);
        } else {
            // 2回目以降：即座に非表示
            loadingView.style.display = 'none';
        }
    }
});






// ドロワーメニューの制御（ハンバーガーボタンの開閉）
document.addEventListener('DOMContentLoaded', function() {

    // 操作する要素をそれぞれ取得
    const openBtn = document.getElementById('js-hamburger'); // 開くボタン（三本線など）
    const closeBtn = document.getElementById('js-close');     // 閉じるボタン（×ボタンなど）
    const drawer = document.getElementById('js-nav');        // ナビゲーションメニュー本体
    
    // 要素が見つからない場合の、エラー防止処理
    if (!openBtn || !drawer) return;

    // --- メニューを開く処理 ---
    openBtn.addEventListener('click', () => {
        // メニュー本体に「is-active」クラスを付与して表示させる
        drawer.classList.add('is-active');
    });

    // --- メニューを閉じる処理 ---
    // 閉じるボタンが存在する場合のみ実行
    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            // 「is-active」クラスを削除してメニューを非表示にする
            drawer.classList.remove('is-active');
        });
    }

    // --- レスポンシブ対応：画面幅変更時のリセット処理 ---
    window.addEventListener('resize', function() {
        // 画面幅がPCサイズ（768px以上）に広がった場合
        if (window.innerWidth >= 768) {
            // スマホ用メニューが開いたままにならないよう、強制的に閉じる
            drawer.classList.remove('is-active');
        }
    });
});







//シーサーのポップアップ
// ページ遷移時にシーサーをポップアップさせる制御
document.addEventListener('DOMContentLoaded', () => {
    // 表示させるシーサーの要素を取得
    const shisaPopup = document.getElementById('shisaPopup');
    // ページ内にあるすべてのリンク（<a>タグ）をまとめて取得
    const allLinks = document.querySelectorAll('a');

    // シーサーの要素が存在する場合のみ処理を実行
    if (shisaPopup) {
        // すべてのリンクに対して一つずつクリックイベントを設定
        allLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                // クリックされたリンクの移動先URLを取得
                const url = link.getAttribute('href');

                // 例外処理：リンク先が空、ページ内リンク（#）、またはJS実行用のリンクは無視する
                if (!url || url.startsWith('#') || url.includes('javascript:void(0)')) {
                    return;
                }

                // --- 1. ページ移動のキャンセル ---
                // クリック後すぐにページが切り替わらないよう、ブラウザの標準動作を一時停止する
                event.preventDefault();
                
                // --- 2. 演出の実行 ---
                // シーサーにクラスを付与して、画面内に出現させる
                shisaPopup.classList.add('is-active');

                // --- 3. 時間差でページ移動 ---
                // 0.8秒（800ミリ秒）待ってから、本来の移動先URLへ画面を切り替える
                // ※シーサーを見せるための「タメ」の時間です
                setTimeout(() => {
                    window.location.href = url;
                }, 800);
            });
        });
    }
});







//　トップページ一番上のフェード部分
// ページが読み込まれたらスタート！
document.addEventListener('DOMContentLoaded', function() {

    // 道具（画像）とノート（番号）を準備
    const images = document.querySelectorAll('.MainImage');
    let currentIndex = 0;

    // 「めくる動き」のルールを決める
    function NextPage() {
        if (!images[currentIndex]) return;
        // 今の画像からシールを剥がす
        images[currentIndex].classList.remove('IsActive');

        // 番号を更新（枚数で割った余りにしてループさせる）
        currentIndex = (currentIndex + 1) % images.length;

        // 新しい番号の画像にシールを貼る
        images[currentIndex].classList.add('IsActive');
    }

    // 4秒ごとに自動実行！
    setInterval(NextPage, 4000);
});






//トップページ食べる部分の画像切り替え部分
document.addEventListener('DOMContentLoaded', function() {
// 準備：メイン画像を1枚取得
const mainImg = document.querySelector('.foodImgMain')
// 準備：サムネイルを全部取得
const subImgs = document.querySelectorAll('.foodImgSub')
// メイン画像かサブ画像がなければ終了
    if (!mainImg || subImgs.length === 0) return;
// 準備：今の番号を 0 で作っておく
let foodIndex = 0;
// 動き：画像を切り替える関数
function autochangefood () {
    //  番号を 1 増やす（枚数で割った余りにしてループ！）
    foodIndex = (foodIndex + 1) % subImgs.length;
// サムネイルの[番号]番目から 'src' をゲットして、変数（例：newPath）に入れる
    const nextSrc = subImgs[foodIndex].getAttribute('src');
//  メイン画像の 'src' を、その newPath で上書きする
    mainImg.setAttribute('src', nextSrc);
}
//サムネイルをクリックした時も切り替えられる場合
subImgs.forEach((thumb, index) => {
    thumb.addEventListener('click', ()=> {
        foodIndex = index;
        mainImg.setAttribute('src', thumb.getAttribute('src'));
    });
});
// ⑤ 実行：4秒（4000ms）ごとに ④ を動かす
setInterval(autochangefood,4000);
});






    // ホテルの画像スライダー（自動カルーセル）の制御
    document.addEventListener('DOMContentLoaded', function() {
    // スライドさせる画像が入ったコンテナを取得
    const hotelContainer = document.querySelector('.hotelImageContainer');
    
    // 要素が存在しない場合はエラー防止のため処理を中断
    if (!hotelContainer) return; 

    // 現在何枚目の画像を表示しているかを管理する変数
    let hotelIndex = 0;

    // 自動でスライドさせる関数
    function autoScrollHotel() {
        // 次の画像へカウントアップ
        hotelIndex++;

        // --- スライド開始 ---
        // 0.8秒（800ms）かけて、なめらかに横移動させる
        hotelContainer.style.transition = 'transform 800ms ease-in-out';
        // 左方向へ計算した距離分だけ移動
        hotelContainer.style.transform = `translateX(calc(-50% - ${hotelIndex * 33.33}%))`;

        // --- 無限ループの処理（ワープ） ---
        // 3枚目（ループ用のダミー画像）が中央に来たタイミングで実行
        if (hotelIndex === 3) {
            // アニメーションが終わるのを待ってから（0.8秒後）
            setTimeout(() => {
                // アニメーションを一時的にオフにする（ワープを隠すため）
                hotelContainer.style.transition = 'none';
                
                // カウントをリセットして本物の1枚目の位置へ一瞬で戻す
                hotelIndex = 0; 
                hotelContainer.style.transform = `translateX(-50%)`;
            }, 800);
        }
    }

    // 4秒（4000ms）ごとに上記の自動スライド関数を実行する
    setInterval(autoScrollHotel, 4000);
});






// コンセプトセクション：無限ループスライダーの制御
document.addEventListener('DOMContentLoaded', function() {
    // スライドさせる要素を包んでいるコンテナを取得
    const container = document.querySelector('.SlideContainer');
    
    // 要素が見つからない場合はエラー防止のため処理を終了
    if (!container) return;

    // --- スライド位置の管理設定 ---
    let slideIndex = 2; // ループを自然に見せるため、本物の1枚目（Index 2）からスタート
    const totalSlides = 7; // 全体の枚数（コピー分を含む合計枚数）
    const moveAmount = 100 / totalSlides; // スライド1枚分が占める横幅の割合（%）

    // 自動スライドを実行する関数
    function autoSlide() {
        // 次のインデックス（番号）へ進める
        slideIndex++;

        // --- 移動アニメーション ---
        // 0.8秒かけて滑らかに移動させる設定
        container.style.transition = 'transform 0.8s ease-in-out';
        // 左方向へ計算した距離分だけずらす（中央寄せを考慮して -50% から開始）
        container.style.transform = `translateX(calc(-50% - ${slideIndex * moveAmount}%))`;

        // --- 無限ループのワープ処理 ---
        // 末尾にある「コピーの1枚目（Index 5）」が画面中央に来た瞬間を実行タイミングとする
        if (slideIndex === 5) {
            // アニメーションが終わるのを待ってから（0.8秒後）
            setTimeout(() => {
                // ワープを隠すために、一時的にアニメーションをオフにする
                container.style.transition = 'none';
                
                // 見た目は変えずに、内部的な番号だけ「本物の1枚目（Index 2）」に巻き戻す
                slideIndex = 2;
                container.style.transform = `translateX(calc(-50% - ${slideIndex * moveAmount}%))`;
            }, 800); // 遷移アニメーションの時間（0.8s）と合わせる
        }
    }

    // 4秒（4000ミリ秒）おきに autoSlide 関数を繰り返し実行する
    setInterval(autoSlide, 4000); 
});