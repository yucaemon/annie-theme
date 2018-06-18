/**
 * Created by yuka on 6/15/18.
 */

jQuery(document).ready(function($) {

console.log('test');


$('document').ready(function() {
    var options = { videoId: 'HFUreAm3Kt8'};
    $('#douga').tubular(options);
});

//Flexbox で全体を中央に配置しつつ最後の行を左揃えにする処理
// 子パネル (ul.cell) の数だけ空の子パネル (ul.cell.is-empty) を追加する。

var $grid = $('.grid'),
    emptyCells = [],
    i;

for (i = 0; i < $grid.find('.cell').length; i++) {
    emptyCells.push($('<ul>', { class: 'cell is-empty' }));
}

$grid.append(emptyCells);


});